<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleContent extends Model
{
    public $timestamps = false;
    protected $fillable = ["article_id", "country_code_id","title", "content"];

    public function article()
    {
        $this->belongsTo("App\Article");
    }
}
