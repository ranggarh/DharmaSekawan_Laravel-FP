<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoktorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Halaman Dokter Kami | Klinik Dharma Sekawan';
        return view('dokter', ['pageTitle'=> $pageTitle]);
    }
}
