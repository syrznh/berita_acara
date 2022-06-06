<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiDetailModel extends Model
{
    protected $table = "transaksi_detail";
    protected $primaryKey = "id";
    protected $allowedFields = ["transaksi_id", "ma_no", "rka_thn", "no_ba", "tgl_ba", "no_kontrak", "tgl_kontrak", "pihak_pertama", "penanggung_jawab_1", "jabatan_1", "pihak_kedua", "penanggung_jawab_2", "jabatan_2", "create_by", "create_date", "update_by", "update_date"];

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
}
