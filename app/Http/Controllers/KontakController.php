<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Halaman Kontak Kami | Klinik Dharma Sekawan';
        return view('kontak', ['pageTitle'=> $pageTitle]);
    }
}
