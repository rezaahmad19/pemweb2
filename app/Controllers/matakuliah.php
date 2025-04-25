<?php

namespace App\Controllers;

class mataKuliah extends BaseController
{
    public function basisdata()
    {
        return view('mata-kuliah/basisdata');
    }
    public function metodologi()
    {
        return view('mata-kuliah/metodologi');
    }
    public function pemweb2()
    {
        return view('mata-kuliah/pemweb2');
    }
    public function visdat()
    {
        return view('mata-kuliah/visdat');
    }
}
