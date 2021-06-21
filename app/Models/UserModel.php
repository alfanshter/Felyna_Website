<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users_felina";
    protected $dateFormat = 'datetime';
    protected $primaryKey = "username";
    protected $returnType = 'object';
    protected $createdField = 'created_at';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'role'];
}
