<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index($pengantin)
    {
        $template = "pages.$pengantin.index";
        return view($template)->with(['undanganId' => 3, 'color' => 'bg-primarymini1-0']);
    }
}
