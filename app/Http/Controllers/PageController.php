<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.page1', ["title" => "title of header"]);
    }
}
