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
        return 'Menampilkan Data Matakuliah';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return 'Menampilkan Data Matakuliah';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return 'Menampilkan Data Matakuliah';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $param1)
    {
        if($param1){
            return 'Anda Mengakses Matakuliah '.$param1;
        }else{
            return 'Masukkan Kode Matakuliah!';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
         return 'Menampilkan Data Matakuliah';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
         return 'Menampilkan Data Matakuliah';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
         return 'Menampilkan Data Matakuliah';
    }
}
