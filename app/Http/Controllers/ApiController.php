<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ApiController extends Controller
{
    public function Menu(Request $request)
    {
        $studio = $request->get("Studio", false);

        if ($studio)
        {
            $menu = Category::locatedTitles()
                ->where("site", "Studio")
                ->orderBy("position")
                ->get();
            $logo = asset('images/common/logos/NEERO-Studio.svg');
        }
        else
        {
            $menu = Category::locatedTitles()
                ->where("site", "Compo")
                ->orderBy("position")
                ->get();
            $logo = asset('images/common/logos/IDEO-Compositeur.svg');
        }

        $categories = [];
        foreach ($menu as $catMenu)
        {
            $categories[$catMenu->id] = $catMenu->titles[0]->title;
        }

        return response()->json([
            "logo" => $logo,
            "menu" => $categories
        ]);
    }

    public function Image(Request $request)
    {
        if ($request->has("image"))
        {
            return response()->json(["message" => "Data url saved"], 200);
            $name = Str::random(40) . ".jpg";
            $original = Image::make($request->get("image"))
                ->interlace(true)
                ->encode("jpg", 75);
//            Storage::disk("public")->put("Galerie/" . $name, $original);

            $thumb = Image::make($request->get("image"))
                ->interlace(true)
                ->fit(300)
                ->encode("jpg", 75);
//            Storage::disk("public")->put("Galerie/Thumb" . $name, $thumb);

            return response()->json(["message" => "Data url saved"], 200);
        }
        return response()->json(["message" => "no image"], 200);
    }
}
