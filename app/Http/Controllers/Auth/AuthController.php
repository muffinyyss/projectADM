<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
  public function showLoginForm()
  {
    if (Session::get('logged_in')) {
      // ถ้าผู้ใช้ล็อกอินแล้ว ไปที่หน้า /Home
      return redirect()->route('home');
    }

    // ถ้ายังไม่ล็อกอิน แสดงหน้า login
    return view('auth.login');
  }

  public function login(Request $request)
  {
    // ตรวจสอบความถูกต้องของ input
    $request->validate([
      'site' => 'required|string',
      'username' => 'required|string',
      'password' => 'required|string',
    ]);

    $errors = [];

    // ค้นหาผู้ใช้จากฐานข้อมูล
    $user = User::where('Username', $request->username)
      ->where('Site', $request->site)
      ->first();

    if ($user) {
      // ใช้ Hash::check เปรียบเทียบ password กับค่าที่เข้ารหัสใน DB
      if ($request->password === $user->Password) {
        Session::put('logged_in', true);
        Session::put('site', $user->Site);
        Session::put('username', $user->Username);
        Session::put('fullname_th', $user->TH_fullname);
        Session::put('fullname_en', $user->EN_fullname);
        Session::put('nickname', $user->Nickname);
        Session::put('position', $user->Position);
        Session::put('branch', $user->Branch);

        // dd($user->TH_fullname);

        return redirect()->route('home');
      } else {
        $errors['password'] = 'Password ไม่ถูกต้อง';
      }
    } else {
      // แยก error ออกเป็น site หรือ username ไม่ถูกต้องแบบละเอียด
      $siteExists = User::where('Site', $request->site)->exists();
      if (!$siteExists) {
        $errors['site'] = 'Site ไม่ถูกต้อง';
      } else {
        $errors['username'] = 'Username ไม่ถูกต้อง';
      }
    }

    // ล้าง session เผื่อมีค้าง
    Session::forget('logged_in');

    return back()->withErrors($errors)->withInput([
      'site' => $request->site,
      'username' => $request->username,
    ]);
  }

  // ฟังก์ชันการ Logout
  public function logout()
  {
    Auth::logout(); // สำคัญมาก! แจ้ง Laravel ให้ออกจากระบบ
    Session::flush(); // ล้าง session ทั้งหมด
    request()->session()->invalidate(); // ทำให้ session เดิมใช้ไม่ได้
    request()->session()->regenerateToken(); // ป้องกัน CSRF จาก session เก่า

    return redirect('/'); // กลับไปหน้า login
  }



  public function getMenuJson()
  {
    // 1. โหลดไฟล์ JSON เป็น string
    $jsonString = file_get_contents(resource_path('menu/verticalMenu.json'));
    // dd(json_decode($jsonString, true));
    // 2. ดึง fullname_th จาก session
    $fullname = Session::get('fullname_th', 'Guest');
    $fullnameWithQuotes = '"คุณ' . $fullname . '"';

    // 3. แทนที่ {fullname_th} ใน string JSON
    $jsonString = str_replace('{fullname_th}', $fullnameWithQuotes, $jsonString);

    dd($jsonString);
    // 4. ส่งกลับ JSON
    return response($jsonString, 200)->header('Content-Type', 'application/json');
  }


}
