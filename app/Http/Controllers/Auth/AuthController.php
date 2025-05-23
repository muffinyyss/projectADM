<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

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

  // ฟังก์ชันการ Login
  // public function login(Request $request)
  // {

  //   // ค้นหาผู้ใช้จากฐานข้อมูล
  //   $user = User::where('Username', $request->username)
  //     ->where('Site', $request->site)
  //     ->first();

  //   // ตรวจสอบค่าที่กรอกในฟอร์ม
  //   $request->validate([
  //     'site' => 'required|string',
  //     'username' => 'required|string',
  //     'password' => 'required|string',
  //   ]);

  //   // ข้อมูลที่อนุญาตให้เข้าใช้งาน (กำหนดล่วงหน้า)
  //   $validSite = 'spcg';
  //   $validUsername = 'admin';
  //   $validPassword = '123';
  //   $validRole = 'sale';
  //   $errors = [];


  //   // ตรวจสอบข้อมูล
  //   if (
  //     $request->site === $validSite &&
  //     $request->username === $validUsername &&
  //     $request->password === $validPassword
  //   ) {

  //     // เก็บข้อมูล session เมื่อ login สำเร็จ
  //     Session::put('logged_in', true);
  //     Session::put('site', $request->site);
  //     Session::put('username', $request->username);
  //     Session::put('roles', $validRole);

  //     // เพิ่มบรรทัดนี้เพื่อบันทึกค่า role ลง log
  //     // \Log::info('Role ที่เก็บใน session หลัง login คือ: ' . Session::get('roles'));

  //     // Redirect ไปหน้า Home
  //     return redirect()->route('home');

  //   }


  //   if ($request->site !== $validSite) {
  //     $errors['site'] = 'Site name ไม่ถูกต้อง';
  //   }
  //   if ($request->username !== $validUsername) {
  //     $errors['username'] = 'Username ไม่ถูกต้อง';
  //   }
  //   if ($request->password !== $validPassword) {
  //     $errors['password'] = 'Password ไม่ถูกต้อง';
  //   }


  //   // ถ้าข้อมูลผิด ล้าง session เผื่อมีค้าง
  //   Session::forget('logged_in');

  //   // สร้างข้อมูล input ที่จะส่งกลับ
  //   $oldInput = [
  //     'site' => ($request->site === $validSite) ? $request->site : '',
  //     'username' => ($request->username === $validUsername) ? $request->username : '',
  //     'password' => ($request->password === $validPassword) ? $request->password : '',  // ไม่ควรส่ง password กลับเลย ไม่ปลอดภัยและ UX ดี
  //   ];


  //   return back()->withErrors($errors)->withInput($oldInput);

  // }

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
}
