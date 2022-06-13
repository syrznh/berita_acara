<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields = ["nama", "email", "username", "password", "role_id"];

    public function get_users()
    {
        return $this->db->table('users')
            ->join('role', 'role.id=users.role_id')
            ->select('users.*, role.role_name as name_role')
            ->get()->getResultArray();
    }
}
