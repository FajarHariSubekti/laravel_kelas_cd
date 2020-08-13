<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_prodi = Prodi::all();
        return view('prodi.index', compact('list_prodi'));
    }
}

