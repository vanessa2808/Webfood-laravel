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
    public function getAboutPage() {
        $about = About::all();
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.about',['about'=>  $about,'header'=>$header,'food'=>$food,'blog'=>$blog,'sidebar'=>$sidebar,'main'=>$main]);

    }
    public function getRecipePage() {
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.recipe',['header'=>$header, 'food'=>$food,'blog'=>$blog, 'sidebar'=>$sidebar,'main'=>$main]);

    }
    public function getBlogPage(){
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.blog',['header'=>$header, 'food'=>$food,'blog'=>$blog, 'sidebar'=>$sidebar,'main'=>$main]);
    }
    public function getSingleBlogPage(){
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.single_blog',['header'=>$header, 'food'=>$food,'blog'=>$blog, 'sidebar'=>$sidebar,'main'=>$main]);
    }
}
