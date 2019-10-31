<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTitle extends Model
{
    public $timestamps = false;
    protected $fillable = ["category_id", "country_code_id", "title"];

    public function category()
    {
        $this->belongsTo("App\Category");
    }
}
