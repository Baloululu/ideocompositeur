<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;

class WebController extends Controller
{
    public function Menu()
    {
        $this->AddJavascriptRotue();
        return view("menu");
    }

    public function Studio()
    {
        $this->AddJavascriptRotue();

        return view("studio");
    }

    public function Compo()
    {
        $this->AddJavascriptRotue();

        return view("compo");
    }

    private function AddJavascriptRotue()
    {
        JavaScript::put([
            "studioPath" => route("studio"),
            "compoPath" => route("compo")
        ]);
    }
}
