<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Halaman Admin";
        $dokters = Dokter::all();

        return view('admin.data_dokter', [
            'pageTitle' => $pageTitle,
            'dokters' => $dokters
        ]);
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
        // ELOQUENT
        $dokter = New Dokter;
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->no_telp = $request->no_telp;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->spesialis_id = $request->spesialis;
        // $employee->position_id = $request->position;
        $employee->save();

        return redirect()->route('admin.data_dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
