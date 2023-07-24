<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Halaman Poliklinik | Klinik Dharma Sekawan';
        return view('poliklinik', ['pageTitle'=> $pageTitle]);
    }
}
