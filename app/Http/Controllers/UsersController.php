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

  public function store(Request $request)
  {
    $request->validate([
      'Site' => 'required|string|max:20',
      'TH_fullname' => 'required|string|max:100',
      'EN_fullname' => 'required|string|max:100',
      'Nickname' => 'nullable|string|max:100',
      'Username' => 'required|string|max:100|unique:users',
      'Password' => 'required|string|min:6|max:20',
      'Position' => 'nullable|string|max:100',
      'Branch' => 'nullable|string',
    ]);

    User::create([
      'Site' => $request->Site,
      'TH_fullname' => $request->TH_fullname,
      'EN_fullname' => $request->EN_fullname,
      'Nickname' => $request->Nickname,
      'Username' => $request->Username,
      'Password' => bcrypt($request->Password), // เข้ารหัสรหัสผ่าน
      'Position' => $request->Position,
      'Branch' => $request->Branch,
    ]);

    // ตรวจสอบข้อมูลที่ถูก validate แล้ว
    // dd($request);
    // User::create([
    //   'Site' => $request->input('site'),
    //   'TH_fullname' => $request->input('th_fullname'),
    //   'EN_fullname' => $request->input('en_fullname'),
    //   'Nickname' => $request->input('nickname'),
    //   'Username' => $request->input('username'),
    //   'Password' => bcrypt($request->input('password')),
    //   'Position' => $request->input('position'),
    //   'Branch' => $request->input('branch'),
    // ]);


    return redirect()->route('addUsers')->with('success', 'User added successfully.');
  }

  // public function update(Request $request, User $user)
  // {
  //   $request->validate([
  //     'Site' => 'required|string|max:20',
  //     'TH_fullname' => 'required|string|max:100',
  //     'EN_fullname' => 'required|string|max:100',
  //     'Nickname' => 'nullable|string|max:100',
  //     'Username' => 'required|string|max:100|unique:users,Username,' . $user->id,
  //     'Password' => 'nullable|string|min:6|max:20',
  //     'Position' => 'nullable|string|max:100',
  //     'Branch' => 'nullable|string',
  //   ]);

  //   $data = $request->only(['Site', 'TH_fullname', 'EN_fullname', 'Nickname', 'Username', 'Position', 'Branch']);

  //   if ($request->filled('Password')) {
  //     $data['Password'] = bcrypt($request->Password);
  //   }

  //   $user->update($data);

  //   return redirect()->route('users.index')->with('success', 'User updated successfully.');
  // }


}
