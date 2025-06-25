<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;

    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {
        $pageSekarang = $this->request->getVar('page_orang') ?? 1;
        $kataKunci = $this->request->getVar('keyword');

        if ($kataKunci) {
            $orang = $this->orangModel->search($kataKunci);
        } else {
            $orang = $this->orangModel;
        }

        $data = [
            'title'        => 'Daftar Orang',
            'orang'        => $orang->paginate(10, 'orang'),
            'pager'        => $this->orangModel->pager,
            'pageSekarang' => $pageSekarang,
            'keyword'      => $kataKunci
        ];

        return view('orang/index', $data);
    }
}
