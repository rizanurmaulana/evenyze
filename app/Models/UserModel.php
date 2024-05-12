<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'user';
  protected $primary_key = 'id';
  // protected $useAutoIncrement = 'false';
  // protected $protectFields = true;
  protected $allowedFields = ['id', 'name', 'email', 'phone', 'role', 'password', 'created_at', 'updated_at'];

  // protected $useTimeStamps = false;
}