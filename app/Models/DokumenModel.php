<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table = "dokumen";
    protected $primaryKey = "dokumen_id";
    protected $allowedFields = ["tipe_dokumen", "ba_id"];
}
