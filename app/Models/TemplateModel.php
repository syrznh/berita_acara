<?php

namespace App\Models;

use CodeIgniter\Model;

class TemplateModel extends Model
{
    protected $table = "template";
    protected $primaryKey = "template_id";
    protected $allowedFields = ["dokumen_id", "nama_template", "ba_id"];
}
