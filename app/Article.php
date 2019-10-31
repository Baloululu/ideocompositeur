<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["image", "category_id"];

    public function articleContents()
    {
        return $this->hasMany("App\ArticleContent");
    }

    public function category()
    {
        return $this->belongsTo("App\Category");
    }

    public function scopeLocatedContents($query)
    {
        return $query->with(["articleContents" => function ($queryWith){
            $queryWith->where("country_code_id", 1);
        }]);
    }
}
