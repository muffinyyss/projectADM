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
    $perPage = 30; // จำนวนต่อหน้า
    $page = $request->input('page', 1); // หน้าปัจจุบัน

    // ดึงผู้ใช้ทั้งหมด แล้วแปลงเป็น array ทีละคน
    $rawUsers = Users::all()->map(function ($user) {
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

  // public function index(Request $request)
  // {
  //   $perPage = 30;
  //   $page = $request->input('page', 1);
  //   $search = $request->input('search');

  //   // ดึงผู้ใช้ทั้งหมด
  //   $rawUsers = Users::all()->map(function ($user) {
  //     return $user->toArray();
  //   });

  //   // กรองตามคำค้น
  //   if ($search) {
  //     $rawUsers = $rawUsers->filter(function ($user) use ($search) {
  //       return stripos($user['name'], $search) !== false || stripos($user['username'], $search) !== false || stripos($user['position'], $search) !== false;
  //     })->values(); // รีเซ็ต index
  //   }

  //   // paginate จาก collection
  //   $currentPageItems = $rawUsers->slice(($page - 1) * $perPage, $perPage)->values();

  //   $users = new LengthAwarePaginator(
  //     $currentPageItems,
  //     $rawUsers->count(),
  //     $perPage,
  //     $page,
  //     ['path' => $request->url(), 'query' => $request->query()]
  //   );

  //   return view('admin.addUsers', compact('users', 'search'));
  // }

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


  // public function search(Request $request)
  // {
  //   $search = $request->input('search');

  //   $query = Users::query();

  //   if ($search) {
  //     $query->where(function ($q) use ($search) {
  //       $q->where('EN_fullname', 'LIKE', "%{$search}%")
  //         ->orWhere('Username', 'LIKE', "%{$search}%")
  //         ->orWhere('Position', 'LIKE', "%{$search}%");
  //     });
  //   }

  //   $users = $query->orderBy('ID', 'desc')->limit(30)->get();

  //   return response()->json($users);
  // }

  // public function search(Request $request)
  // {
  //   $search = $request->input('search');

  //   $query = Users::query();

  //   if ($search) {
  //     $query->where(function ($q) use ($search) {
  //       $q->where('EN_fullname', 'LIKE', "%{$search}%")
  //         ->orWhere('Username', 'LIKE', "%{$search}%")
  //         ->orWhere('Position', 'LIKE', "%{$search}%");
  //     });
  //   }

  //   $users = $query->orderBy('ID', 'desc')->limit(30)->get();
  //   // แปลงเป็น array ก่อนส่งไป view
  //   $usersArray = $users->toArray();
  //   // dd($users->toArray());
  //   // return redirect()->route('addUsers'), ['users' => $users]);
  //   // return redirect()->route('addUsers')->with('users', $users);
  //   return view('admin.addUsers', ['users' => $usersArray]);


  // }





}
