<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
    protected $table = "pekerjaan";
    protected $primaryKey = "pekerjaan_id";
    protected $allowedFields = ["jenis_pekerjaan", "dokumen_id", "ba_id"];
}
