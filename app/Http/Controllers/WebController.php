<?php

namespace App\Http\Controllers;

use App\Category;

class WebController extends Controller
{
    public function Menu()
    {
        return view("menu");
    }

    public function Index()
    {
        return view('singlePage');
    }

    public function Studio()
    {
        $catContent = Category::select("id")
            ->where("site", "Studio")
            ->orderBy("position")
            ->with(["articles" => function($query){
                $query->where("online", true);
            }])
            ->get();

        return view("studio", compact(["catContent"]));
    }

    public function Compo()
    {
        $catContent = Category::select("id")
            ->where("site", "Compo")
            ->orderBy("position")
            ->with(["articles" => function($query){
                $query->where("online", true);
            }])
            ->get();

        return view("compo", compact(["catContent"]));
    }
}
