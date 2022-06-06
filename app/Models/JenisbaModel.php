<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisbaModel extends Model
{
    protected $table = "ba";
    protected $primaryKey = "ba_id";
    protected $allowedFields = ["nama_ba"];
}
