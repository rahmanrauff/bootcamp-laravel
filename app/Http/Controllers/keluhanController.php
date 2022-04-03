<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keluhanController extends Controller
{
    //pu    
    public function index()
    {
return view('formulir');
    }
    public function aksi()
    {
return 'keluhan berhasil disimpan';
    }
    public function detail($id)
    {
return 'id and adalah '.$id;
    }
}
