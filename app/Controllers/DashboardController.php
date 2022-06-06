<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokumenModel;
use App\Models\JenisbaModel;
use App\Models\TemplateModel;
use App\Models\TransaksiModel;

class DashboardController extends BaseController
{
    protected $TransaksiModel;
    // protected $JenisbaModel;
    // protected $DokumenModel;
    // protected $TemplateModel;
    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
        // $this->JenisbaModel = new JenisbaModel();
        // $this->DokumenModel = new DokumenModel();
        // $this->TemplateModel = new TemplateModel();

        // $this->db = \Config\Database::connect();
    }
    public function index()
    {

        $data = [
            'transaksi' => $this->TransaksiModel->get_transaksi()
        ];

        return view('dashboard/pages/index', $data);
    }
}
