<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalerieController extends Controller
{
    public function Index()
    {
        return view('admin.galerie');
    }

    public function Upload(Request $request)
    {
        return redirect(route('galerie.index'));
    }
}
