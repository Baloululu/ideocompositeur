<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryCode extends Model
{
    public $timestamps = false;
    protected $fillable = ["code"];
}
