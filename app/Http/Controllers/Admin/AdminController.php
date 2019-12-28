<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Index()
    {
        return redirect(route('articles.index'));
    }

    public function Link()
    {
        system("ln -s ../storage/app/public storage");
        return "\nfin";
    }
}
