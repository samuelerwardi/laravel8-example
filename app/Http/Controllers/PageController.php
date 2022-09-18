<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.page1', ["title" => "title of header"]);
    }

    public function format_currency(Request $request){
        echo GeneralHelper::format_currency(10000);
    }
}
