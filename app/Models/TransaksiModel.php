<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "transaksi_id";
    protected $allowedFields = ["ba_id", "judul_pekerjaan", "jenis_pekerjaan", "dokumen_id", "persentase", "keterangan", "create_by", "create_date", "update_by", "update_date"];

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $useTimestamps = true;
    protected $createdField  = 'created_date';
    protected $updatedField  = 'updated_date';

    public function get_transaksi()
    {
        return $this->db->table('transaksi')
            ->join('ba', 'ba.ba_id=transaksi.ba_id')
            ->join('dokumen', 'dokumen.dokumen_id=transaksi.dokumen_id')
            ->get()->getResultArray();
    }
    public function get_template()
    {
        return $this->db->table('template')
            ->join('ba', 'ba.ba_id=template.ba_id')
            ->join('dokumen', 'dokumen.dokumen_id=template.dokumen_id')
            ->get()->getResultArray();
    }
}
