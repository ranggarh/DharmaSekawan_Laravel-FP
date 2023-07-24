<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;

class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Halaman Admin";

        $patients = Patient::all();

        return view('admin.data_pasien',compact('pageTitle','patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = "Halaman Form Daftar Online | Klinik Dharma Sekawan";

        // return view('formulir',['pageTitle'=> $pageTitle]);

        // ELOQUENT
        $specialists = Specialist::all();
        return view('formulir', compact('pageTitle', 'specialists'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'ttl' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
            'keluhan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        }
            // ELOQUENT
        $patient = New Patient;
        $patient->fullname = $request->fullname;
        $patient->nik = $request->nik;
        $patient->email = $request->email;
        $patient->ttl = $request->ttl;
        $patient->alamat = $request->alamat;
        $patient->telp = $request->telp;
        $patient->specialist_id = $request->specialist;
        $patient->keluhan = $request->keluhan;
        $patient->save();

        return redirect()->route('beranda.index');

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
