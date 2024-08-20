<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use App\Post;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientBlogController extends Controller
{
    public function post(){
        $menus = Menu::where('parent_id',0)->get();
        $posts = Post::all();
        // $products = Product::limit(5)->get();
        // $new_products = Product::orderBy('id','DESC')->limit(5)->get();
        // $productCode = Str::random(10);
        // $code = strtoupper($productCode);
        // $sliders = Slider::all();
        return view('clients.posts.index',compact('menus','posts'));
    }
    public function detail($slug){
        $menus = Menu::where('parent_id',0)->get();
        $detail = Post::where('slug',$slug)->first();
        $posts = Post::all();

        return view('clients.posts.detail', compact('menus','detail','posts'));
    }
    public function contact(){
        $menus = Menu::where('parent_id',0)->get();
        $posts = Post::all();
        return view('clients.posts.contact', compact('menus'));
    }
}
