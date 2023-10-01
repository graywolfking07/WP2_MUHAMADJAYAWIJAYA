<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{

    function __construct(){
        // parent::__construct();
        helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        return view('v_index', $data);
    }
}
