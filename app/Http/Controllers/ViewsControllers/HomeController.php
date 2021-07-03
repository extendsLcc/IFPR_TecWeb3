<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {

        return view( 'pages.home.index' );

    }

}
