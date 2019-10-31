<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ["site", "position"];

    public function titles()
    {
        return $this->hasMany("App\CategoryTitle");
    }

    public function articles()
    {
        return $this->hasMany("App\Article")->locatedContents();
    }

    public function scopeLocatedTitles($query)
    {
        return $query->with(["titles" => function ($queryWith){
            $queryWith->select(["category_id", "title"])->where("country_code_id", 1);
        }]);
    }
}
