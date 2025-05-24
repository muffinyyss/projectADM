<?php

namespace App\Http\Controllers;


use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response; // ด้านบนไฟล์

class UsersController extends Controller
{
  public function index(Request $request)
  {
    $perPage = 25; // จำนวนต่อหน้า
    $page = $request->input('page', 1); // หน้าปัจจุบัน
    $search = $request->input('search'); // รับค่าค้นหา
    $position = $request->input('position');
    // $positions = Users::select('position')->distinct()->pluck('position');


    // query ผู้ใช้ (ยังไม่โหลดทั้งหมด)
    $query = Users::query();

    // ถ้ามีคำค้นหา
    if ($search) {
      $query->where(function ($q) use ($search) {
        $q->where('EN_fullname', 'like', "%{$search}%")
          ->orWhere('username', 'like', "%{$search}%")
          ->orWhere('position', 'like', "%{$search}%");
      });
    }

    /// ถ้าเลือก position จริง ๆ และไม่ใช่ค่าว่าง
    if (!empty($position)) {
      $query->where('position', $position);
    }

    // ดึงข้อมูลทั้งหมดจาก query ที่กรองแล้ว (ยังเป็น Collection)
    $rawUsers = $query->get()->map(function ($user) {
      return $user->toArray();
    });

    // ทำ pagination จาก Collection ที่เป็น array แล้ว
    $users = new LengthAwarePaginator(
      $rawUsers->forPage($page, $perPage), // ข้อมูลที่จะแสดงในหน้านั้น
      $rawUsers->count(), // จำนวนทั้งหมด
      $perPage, // ต่อหน้า
      $page,
      ['path' => request()->url(), 'query' => request()->query()] // ให้ pagination ทำงานได้ถูกต้อง
    );

    // ดึงตำแหน่งทั้งหมดจาก DB สำหรับ dropdown
    $positions = Users::select('position')->distinct()->pluck('position');

    // dd($users);
    return view('admin.addUsers', compact('users', 'search', 'positions'));
  }

  public function store(Request $request)
  {
    // dd($request->all()); // ทดสอบก่อน

    $request->validate([
      'Site' => 'required|string|max:20',
      'TH_fullname' => 'required|string|max:100',
      'EN_fullname' => 'required|string|max:100',
      'Nickname' => 'nullable|string|max:100',
      'Username' => 'required|string|max:100|unique:users,Username', // แก้ให้ validate เฉพาะ column Username,
      'Password' => 'required|string|min:6|max:20',
      'Position' => 'nullable|string|max:100',
      'Branch' => 'nullable|string',
    ]);

    Users::create([
      'Site' => $request->Site,
      'TH_fullname' => $request->TH_fullname,
      'EN_fullname' => $request->EN_fullname,
      'Nickname' => $request->Nickname,
      'Username' => $request->Username,
      // 'Password' => bcrypt($request->Password), // เข้ารหัสรหัสผ่าน
      'Password' => $request->Password, // เข้ารหัสรหัสผ่าน
      'Position' => $request->Position,
      'Branch' => $request->Branch,
    ]);

    return redirect()->route('addUsers')->with('success', 'User added successfully.');
  }

  public function destroy($id)
  {
    $user = Users::findOrFail($id);
    $user->delete();

    return redirect()->route('addUsers')->with('success', 'User deleted successfully.');
  }


  // ฟังก์ชันแสดงฟอร์มแก้ไข
  public function edit($id)
  {
    $user = Users::findOrFail($id);
    return view('admin.editUsers', compact('user')); // เปลี่ยนชื่อ view ตามโฟลเดอร์ที่คุณใช้จริง
  }


  // ฟังก์ชันอัปเดตข้อมูล
  public function update(Request $request, $id)
  {
    $request->validate([
      'Site' => 'required|string|max:20',
      'TH_fullname' => 'required|string|max:100',
      'EN_fullname' => 'required|string|max:100',
      'Nickname' => 'nullable|string|max:100',
      'Username' => 'required|string|max:100|unique:users,Username,' . $id . ',ID', // ยกเว้นตัวเอง
      'Password' => 'nullable|string|min:6|max:20', // ถ้าไม่แก้รหัสผ่าน ไม่ต้องกรอก
      'Position' => 'nullable|string|max:100',
      'Branch' => 'nullable|string',
    ]);

    $user = Users::findOrFail($id);

    $user->Site = $request->Site;
    $user->TH_fullname = $request->TH_fullname;
    $user->EN_fullname = $request->EN_fullname;
    $user->Nickname = $request->Nickname;
    $user->Username = $request->Username;
    $user->Position = $request->Position;
    $user->Branch = $request->Branch;

    if ($request->Password) {
      // $user->Password = bcrypt($request->Password);
      $user->Password = $request->Password;

    }

    $user->save();

    return redirect()->route('addUsers')->with('success', 'User updated successfully.');
  }



}
