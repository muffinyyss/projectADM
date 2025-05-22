<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  use HasFactory;
  protected $table = 'users'; // ชื่อตาราง

  protected $primaryKey = 'ID'; // Primary key ที่ไม่ใช่ id

  public $timestamps = false; // ถ้าไม่มี created_at / updated_at
// 🔽 เพิ่มสองบรรทัดนี้ ถ้า ID เป็นเลข auto-increment
  protected $keyType = 'int';
  public $incrementing = true;
  protected $fillable = [
    'Site',
    'TH_fullname',
    'EN_fullname',
    'Nickname',
    'Username',
    'Password',
    'Position',
    'Branch',
  ];
}
