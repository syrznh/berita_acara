<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields = ["name", "email", "password", "role_id"];

    public function get_users()
    {
        return $this->db->table('users')
            ->join('role', 'role.id=users.role_id')
            ->get()->getResultArray();
    }
}
