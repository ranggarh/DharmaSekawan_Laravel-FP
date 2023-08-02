<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Halaman Tentang Kami | Klinik Dharma Sekawan';
        return view('tentang', ['pageTitle'=> $pageTitle]);
    }
}
