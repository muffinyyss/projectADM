<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UsersController extends Controller
{
  public function index(Request $request)
  {
    // $users = User::all()->toArray();

    // // dd($users);
    // return view('admin.addUsers', compact('users'));

    $perPage = 20; // จำนวนต่อหน้า
    $page = $request->input('page', 1); // หน้าปัจจุบัน

    // ดึงผู้ใช้ทั้งหมด แล้วแปลงเป็น array ทีละคน
    $rawUsers = User::all()->map(function ($user) {
      return $user->toArray(); // แปลง Model เป็น array
    });

    // ทำ pagination จาก Collection ที่เป็น array แล้ว
    $users = new LengthAwarePaginator(
      $rawUsers->forPage($page, $perPage), // ข้อมูลที่จะแสดงในหน้านั้น
      $rawUsers->count(), // จำนวนทั้งหมด
      $perPage, // ต่อหน้า
      $page,
      ['path' => request()->url(), 'query' => request()->query()] // ให้ pagination ทำงานได้ถูกต้อง
    );

    // dd($users);
    return view('admin.addUsers', compact('users'));
  }

  public function create(Request $request)
  {
    $request->validate([
      'site' => 'nullable|string',
      'branch' => 'nullable|string',
      'th_fullname' => 'required|string',
      'en_fullname' => 'required|string',
      'nickname' => 'nullable|string',
      'position' => 'nullable|string',
      'username' => 'required|string|unique:users,Username',
      'password' => 'required|string|min:6',
    ]);


    User::create([
      'Site' => $request->input('site'),
      'TH_fullname' => $request->input('th_fullname'),
      'EN_fullname' => $request->input('en_fullname'),
      'Nickname' => $request->input('nickname'),
      'Username' => $request->input('username'),
      'Password' => bcrypt($request->input('password')),
      'Position' => $request->input('position'),
      'Branch' => $request->input('branch'),
    ]);


    return redirect()->route('addUsers')->with('success', 'User added successfully.');
  }

}
