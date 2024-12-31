<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index () {
        return view('page.FirstPage');
    }

    public function Project1() {
        return view('page.Project1');
    }
}
