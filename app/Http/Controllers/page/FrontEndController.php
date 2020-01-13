<?php

namespace App\Http\Controllers\page;
use App\Models\Blog;
use App\Models\About;
use App\Models\Food;
use App\Models\Main;
use App\Models\Header;
use App\Models\Sidebar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use illuminate\support\Facedes\Validator;
use illuminate\Support\Facedes\Auth;

class FrontEndController extends Controller
{
    public function getHomePage() {
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.home',['header'=>$header, 'food'=>$food,'blog'=>$blog, 'sidebar'=>$sidebar,'main'=>$main]);

    }
}
