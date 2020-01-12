<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleContent;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticle;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    public function index()
    {
        $catContent = Category::select(["id", "site"])
            ->orderBy("position")
            ->with("articles")
            ->get()
            ->groupBy(function($item){
                return $item->site;
            });

        return view("admin.articles.index", compact(["catContent"]));
    }

    public function create()
    {
        $categories = Category::select("id")->locatedTitles()->get();
        $select = array();

        foreach ($categories as $cat)
        {
            $select[$cat->id] = $cat->titles[0]->title;
        }

        $url = route("articles.store");
        $method = "post";
        $article = new Article();

        $article->title = "";
        $article->content = "";

        return view("admin.articles.edit", compact(["select", "url", "method", "article"]));
    }

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

        return redirect(route("articles.index"))->with(["success" => "Article ajouté"]);
    }

    public function edit($id)
    {
        $categories = Category::select("id")->locatedTitles()->get();
        $select = array();

        foreach ($categories as $cat)
        {
            $select[$cat->id] = $cat->titles[0]->title;
        }

        $article = Article::where("id", $id)->with("articleContents")->first();

        $article->title = $article->articleContents[0]->title;
        $article->content = $article->articleContents[0]->content;

        $url = route("articles.update", $article->id);
        $method = "put";

        return view("admin.articles.edit", compact(["article", "select", "method", "url"]));
    }

    public function update(StoreArticle $request, $id)
    {
        $article = Article::find($id);
        $article->category_id = $request->get("category_id", 1);

        $path = $this->StoreImage($request);
        if ($path != null)
        {
            if ($article->image != null)
            {
                Storage::disk("public")->deleteDirectory($article->image);
            }
            $article->image = $path;
        }
        $article->online = $request->get("online", false);
        $article->save();

        $articleContent = ArticleContent::where("article_id", $id)->first();
        $articleContent->title = $request->get("title", "");
        $articleContent->content = $request->get("content", "");
        $articleContent->save();

        return redirect(route("articles.index"))->with(["success" => "Article modifié"]);
    }

    public function destroy($id)
    {
        ArticleContent::where("article_id", $id)->delete();

        $article = Article::find($id);
        if ($article->image != null)
        {
            Storage::disk("public")->deleteDirectory($article->image);
        }
        $article->delete();

        return redirect(route("articles.index"))->with(["success" => "Article supprimé"]);
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
                    ->widen(800, function ($constrainte){
                        $constrainte->upsize();
                    })
                    ->interlace(true)
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/small.jpg", $small);

                $medium = Image::make($path)
                    ->widen(1280, function ($constrainte){
                        $constrainte->upsize();
                    })
                    ->interlace(true)
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/medium.jpg", $medium);

                $large = Image::make($path)
                    ->widen(1920, function ($constrainte){
                        $constrainte->upsize();
                    })
                    ->interlace(true)
                    ->encode("jpg", 75);
                Storage::disk("public")->put($out."/large.jpg", $large);

                return $out;
            }
        }

        return null;
    }
}
