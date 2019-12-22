<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleContent;
use App\Category;
use App\Http\Requests\StoreArticle;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catContent = Category::select(["id", "site"])
            ->orderBy("position")
            ->with("articles")
            ->get()
            ->groupBy(function($item){
                return $item->site;
            });

        return view("admin.index", compact(["catContent"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select("id")->locatedTitles()->get();
        $select = array();

        foreach ($categories as $cat)
        {
            $select[$cat->id] = $cat->titles[0]->title;
        }

        return view("admin.create", compact(["select"]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $article = new Article();
        $article->image = $this->StoreImage($request);
        $article->category_id = $request->get("category_id", 1);
        $article->online = $request->get("online", false);
        $article->save();

        $articleContent = new ArticleContent();
        $articleContent->article_id = $article->id;
        $articleContent->country_code_id = 1;
        $articleContent->title = $request->get("title", "");
        $articleContent->content = $request->get("content", "");
        $articleContent->save();

        return redirect(route("admin.index"))->with(["success" => "Article ajouté"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select("id")->locatedTitles()->get();
        $select = array();

        foreach ($categories as $cat)
        {
            $select[$cat->id] = $cat->titles[0]->title;
        }

        $article = Article::where("id", $id)->with("articleContents")->first();

        return view("admin.edit", compact(["article", "select"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, $id)
    {
        $article = Article::find($id);
        $article->category_id = $request->get("category_id", 1);

        if ($article->image != null)
        {
            Storage::disk("public")->deleteDirectory($article->image);
        }
        $article->image = $this->StoreImage($request);
        $article->online = $request->get("online", false);
        $article->save();

        $articleContent = ArticleContent::where("article_id", $id)->first();
        $articleContent->title = $request->get("title", "");
        $articleContent->content = $request->get("content", "");
        $articleContent->save();

        return redirect(route("admin.index"))->with(["success" => "Article modifié"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArticleContent::where("article_id", $id)->delete();

        $article = Article::find($id);
        if ($article->image != null)
        {
            Storage::disk("public")->deleteDirectory($article->image);
        }
        $article->delete();

        return redirect(route("admin.index"))->with(["success" => "Article supprimé"]);
    }

    public function Link()
    {
        exec("php ../artisan storage:link", $output);
        return $output;
    }

    private function StoreImage($request)
    {
        if ($request->hasFile("image"))
        {
            if ($request->file("image")->isValid())
            {
                $path = $request->file("image")->path();
                $out = explode(".", $request->file("image")->hashName(), 2)[0];

                $small = Image::make($path)
                    ->resize(800, null, function ($constrainte){
                        $constrainte->aspectRatio();
                    })
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/small.jpg", $small);

                /*$medium = Image::make($path)
                    ->resize(1280, null, function ($constrainte){
                        $constrainte->aspectRatio();
                    })
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/medium.jpg", $medium);

                $large = Image::make($path)
                    ->resize(1920, null, function ($constrainte){
                        $constrainte->aspectRatio();
                    })
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/large.jpg", $large);*/

                return $out;
            }
        }

        return null;
    }
}
