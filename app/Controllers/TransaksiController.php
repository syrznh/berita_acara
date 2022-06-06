<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokumenModel;
use App\Models\JenisbaModel;
use App\Models\PekerjaanModel;
use App\Models\TemplateModel;
use App\Models\UsersModel;
use App\Models\TransaksiModel;
use App\Models\TransaksiDetailModel;
use CodeIgniter\HTTP\Response;

/** 
 * @property IncomingRequest $request;
 */

class TransaksiController extends BaseController
{
    protected $TransaksiModel;
    protected $TransaksiDetailModel;
    protected $DokumenModel;
    protected $PekerjaanModel;
    protected $JenisbaModel;
    protected $TemplateModel;
    protected $UsersModel;


    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
        $this->TransaksiDetailModel = new TransaksiDetailModel();
        $this->JenisbaModel = new JenisbaModel();
        $this->DokumenModel = new DokumenModel();
        $this->PekerjaanModel = new PekerjaanModel();
        $this->TemplateModel = new TemplateModel();
        $this->UsersModel = new UsersModel();
    }
    public function index()
    {
        $ba_id = '';
        $dokumen_id = '';
        $pekerjaan_id = '';
        $template_id = '';
        if ($this->request->getPost('submit')) {
            $ba_id = $this->request->getPost('ba_id');
            $dokumen_id = $this->request->getPost('dokumen_id');
            $pekerjaan_id = $this->request->getPost('pekerjaan_id');
            $template_id = $this->request->getPost('template_id');
        }
        $dataJenisba = $this->JenisbaModel;
        $dataDokumen = $this->DokumenModel;
        $dataPekerjaan = $this->PekerjaanModel;
        $dataTemplate = $this->TemplateModel;

        $data['listBa'] = $dataJenisba->select('ba_id, nama_ba')->orderBy('nama_ba')->findAll();
        $data['listDokumen'] = $dataDokumen->select('dokumen_id, tipe_dokumen')->where('ba_id', $ba_id)->orderBy('tipe_dokumen')->findAll();
        $data['listPekerjaan'] = $dataPekerjaan->select('pekerjaan_id, jenis_pekerjaan')->where('dokumen_id', $dokumen_id)->orderBy('jenis_pekerjaan')->findAll();
        $data['listTemplate'] = $dataTemplate->select('template_id, nama_template')->where('pekerjaan_id', $pekerjaan_id)->orderBy('nama_template')->findAll();

        $data['ba_id'] = $ba_id;
        $data['dokumen_id'] = $dokumen_id;
        $data['pekerjaan_id'] = $pekerjaan_id;
        $data['template_id'] = $template_id;

        return view('dashboard/pages/transaksi/index', $data);
    }
    public function ajaxDokumen()
    {
        $dataDokumen = $this->DokumenModel;
        $ba_id = $this->request->getVar('ba_id');
        if ($this->request->getVar('searchTerm')) {
            $listDokumen = $dataDokumen->select('dokumen_id, tipe_dokumen')->where('ba_id', $ba_id)->like('tipe_dokumen', $this->request->getVar('searchTerm'))->orderBy('tipe_dokumen')->findAll();
        } else {
            $listDokumen = $dataDokumen->select('dokumen_id, tipe_dokumen')->where('ba_id',  $ba_id)->orderBy('tipe_dokumen')->findAll();
        }

        $data = [];
        foreach ($listDokumen as $key) {
            $data[] = [
                'id' => $key['dokumen_id'],
                'text' => $key['tipe_dokumen'],
            ];
        }
        $response['data'] = $data;
        return $this->response->setJSON($response);
    }

    public function ajaxPekerjaan()
    {
        $dataPekerjaan = $this->PekerjaanModel;
        $dokumen_id = $this->request->getVar('dokumen_id');
        if ($this->request->getVar('searchTerm')) {
            $listPekerjaan = $dataPekerjaan->select('pekerjaan_id, jenis_pekerjaan')->where('dokumen_id', $dokumen_id)->like('jenis_pekerjaan', $this->request->getVar('searchTerm'))->orderBy('jenis_pekerjaan')->findAll();
        } else {
            $listPekerjaan = $dataPekerjaan->select('pekerjaan_id, jenis_pekerjaan')->where('dokumen_id', $dokumen_id)->orderBy('jenis_pekerjaan')->findAll();
        }

        $data = [];
        foreach ($listPekerjaan as $key) {
            $data[] = [
                'id' => $key['pekerjaan_id'],
                'text' => $key['jenis_pekerjaan'],
            ];
        }
        $response['data'] = $data;
        return $this->response->setJSON($response);
    }

    public function ajaxTemplate()
    {
        $dataTemplate = $this->TemplateModel;
        $pekerjaan_id = $this->request->getVar('pekerjaan_id');
        if ($this->request->getVar('searchTerm')) {
            $listTemplate = $dataTemplate->select('template_id, nama_template')->where('pekerjaan_id', $pekerjaan_id)->like('nama_template', $this->request->getVar('searchTerm'))->orderBy('nama_template')->findAll();
        } else {
            $listTemplate = $dataTemplate->select('template_id, nama_template')->where('pekerjaan_id', $pekerjaan_id)->orderBy('nama_template')->findAll();
        }

        $data = [];
        foreach ($listTemplate as $key) {
            $data[] = [
                'id' => $key['template_id'],
                'text' => $key['nama_template'],
            ];
        }
        $response['data'] = $data;
        return $this->response->setJSON($response);
    }
    public function create()
    {
        // $user = $this->UsersModel->where('id', session()->get('id'))->first();
        // $row = $this->request->getPost();

        // // Simpan ke table transaksi
        // $this->TransaksiModel->insert([
        //     'ba' => $row['ba_id'],
        //     'dokumen' => $row['dokumen_id'],
        //     'template' => $row['template_id'],
        //     'trx_detail' => $row['id']
        // ]);
        // return $row;

        $data['template'] = $this->TemplateModel->findAll();

        return view('dashboard/pages/transaksi/index', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
    }
}
