<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
  public function login(Request $request)
  {
    // ตรวจสอบค่าที่กรอกในฟอร์ม
    $request->validate([
      'site' => 'required|string',
      'username' => 'required|string',
      'password' => 'required|string',
    ]);

    // ข้อมูลที่อนุญาตให้เข้าใช้งาน (กำหนดล่วงหน้า)
    $validSite = 'esm';
    $validUsername = 'admin';
    $validPassword = '123';
    $validRole = 'sale';
    $errors = [];


    // ตรวจสอบข้อมูล
    if (
      $request->site === $validSite &&
      $request->username === $validUsername &&
      $request->password === $validPassword
    ) {

      // เก็บข้อมูล session เมื่อ login สำเร็จ
      Session::put('logged_in', true);
      Session::put('site', $request->site);
      Session::put('username', $request->username);
      Session::put('roles', $validRole);

      // เพิ่มบรรทัดนี้เพื่อบันทึกค่า role ลง log
      // \Log::info('Role ที่เก็บใน session หลัง login คือ: ' . Session::get('roles'));

      // Redirect ไปหน้า Home
      return redirect()->route('home');

    }


    if ($request->site !== $validSite) {
      $errors['site'] = 'Site name ไม่ถูกต้อง';
    }
    if ($request->username !== $validUsername) {
      $errors['username'] = 'Username ไม่ถูกต้อง';
    }
    if ($request->password !== $validPassword) {
      $errors['password'] = 'Password ไม่ถูกต้อง';
    }




    // ถ้าข้อมูลผิด ล้าง session เผื่อมีค้าง
    Session::forget('logged_in');

    // สร้างข้อมูล input ที่จะส่งกลับ
    $oldInput = [
      'site' => ($request->site === $validSite) ? $request->site : '',
      'username' => ($request->username === $validUsername) ? $request->username : '',
      'password' => '',  // ไม่ควรส่ง password กลับเลย ไม่ปลอดภัยและ UX ดี
    ];



    return back()->withErrors($errors)->withInput($oldInput);

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
