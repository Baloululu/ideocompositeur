<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    public function Index()
    {
        $files = Storage::disk("public")->files("Galerie/Studio");
        $names = [];
        foreach ($files as $file)
        {
            $temp = explode("/", $file);
            $names[] = $temp[count($temp) - 1];
        }

        return view('admin.galerie', compact(["names"]));
    }

    public function Upload(Request $request)
    {
        return redirect(route('galerie.index'));
    }
}
