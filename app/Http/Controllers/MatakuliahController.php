<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Menampilkan data matakuliah';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(?string $param1 = null)
    {
        if($param1 === null || $param1 === ''){
            return 'masukkan kode matakuliah';
        }
            return 'Anda Mengakses matakuliah: ' . $param1;
        }
    }