<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleContent;
use App\Category;
use Illuminate\Http\Request;
use JavaScript;

class WebController extends Controller
{
    public function Menu()
    {
        $this->AddJavascriptRoute();
        return view("menu");
    }

    public function Studio()
    {
        $this->AddJavascriptRoute();

        $catContent = Category::select("id")
            ->where("site", "studio")
            ->orderBy("position")
            ->with("articles")
            ->get();

        return view("studio", compact(["catContent"]));
    }

    public function Compo()
    {
        $this->AddJavascriptRoute();

        $catContent = Category::select("id")
            ->where("site", "compo")
            ->orderBy("position")
            ->with("articles")
            ->get();

        return view("compo", compact(["catContent"]));
    }

    private function AddJavascriptRoute()
    {
        $categories = Category::locatedTitles()
            ->orderBy("position")
            ->get()
            ->groupBy(function ($item){
                return $item->site;
            });

        $menu = ["compo" => [], "studio" => []];

        foreach ($categories["compo"] as $cat)
        {
            $menu["compo"][] = $cat->titles[0]->title;
        }

        foreach ($categories["studio"] as $cat)
        {
            $menu["studio"][] = $cat->titles[0]->title;
        }

        JavaScript::put([
            "studioPath" => route("studio"),
            "compoPath" => route("compo"),
            "logoPath" => asset('images/common/small/sIdeo_logo.png'),
            "studioMenu" => $menu["studio"],
            "compoMenu" => $menu["compo"]
        ]);
    }
}
