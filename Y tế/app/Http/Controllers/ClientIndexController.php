<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use App\Product;
use App\Slider;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ClientIndexController extends Controller
{
    public function show_data($data)
    {
        echo "<prev>";
        print_r($data);
        echo "</prev>";
    }
    public function searchChildren($data, $id, &$child)
    {
        foreach ($data as $item) {
            if ($item['parent_id'] == $id) {
                $child[] = $item['id'];
                $this->searchChildren($data, $item['id'], $child);
            }
        }
    }
    public function index(Request $request){
        //dd("Nguyễn Qúy Dũng");
        $menus = Menu::where('parent_id',0)->get();
        $name = $request->input('keyword');

       $sliders = Slider::all();
       $products = Product::limit(3)->get();
       $orderBy = Product::orderBy('id', 'DESC')->limit(4)->get();
        $posts =Post::all();
        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'price_asc') {
                $products = Product::orderBy('price', 'ASC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'price_desc') {
                $products =  Product::orderBy('price', 'DESC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'name_desc') {
                $products = Product::orderBy('name', 'DESC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'name_asc') {
                $products = Product::orderBy('name', 'ASC')->paginate(9)->appends(request()->query());
            }
        }
    //     dd('ok');
        
       return view('clients.index', compact('menus','sliders','name','products','orderBy','posts'));
    }
    public function list(Request $request, $slug){
        $menus = Menu::where('parent_id',0)->get();
        $name = $request->input('keyword');
       $find_id = Menu::where('slug', $slug)->first();
       $sliders = Slider::all();
       $products = Product::where('category_id',$find_id->id)->get();
       $orderBy = Product::orderBy('id', 'DESC')->limit(4)->get();
        $posts =Post::all();
        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'price_asc') {
                $products = Product::orderBy('price', 'ASC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'price_desc') {
                $products =  Product::orderBy('price', 'DESC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'name_desc') {
                $products = Product::orderBy('name', 'DESC')->paginate(9)->appends(request()->query());
            } elseif ($sort_by == 'name_asc') {
                $products = Product::orderBy('name', 'ASC')->paginate(9)->appends(request()->query());
            }
        }
    //     dd('ok');
        
       return view('clients.products.index', compact('menus','sliders','name','products','orderBy','posts'));
    }
  
   public function user_login(){
        $menus = Menu::where('parent_id',0)->get();
        return view('clients.acount.login', compact('menus'));
    }
    public function loginn(Request $request){
        $users = User::where('is_admin',0)->get();
        $email = $request->input('email');
		$password = $request->input('password');
 
		if( Auth::attempt(['email' => $email, 'password' =>$password])) {
			// Kiểm tra đúng email và mật khẩu sẽ chuyển trang
			return redirect('/');
		} else {
			dd("Bạn cần điền đúng thông tin đăng nhập !");
			return redirect('login.html');
		}
    }
    public function getRegister(Request $request){
        $menus = Menu::where('parent_id',0)->get();
        return view('clients.acount.register', compact('menus'));
    }
    public function postRegister(Request $request){
        $menus = Menu::where('parent_id',0)->get();
            User::create(
                [
                    'name' => $request->name,
                    'password' => Hash::make($request->input('password')),
                    'email' => $request->email
                ]
            );
            return redirect('login.html');
    }

public function search(Request $request){
    $new_products = Product::orderBy('id','DESC')->limit(3)->get();
    $productCode = Str::random(10);
         $code = strtoupper($productCode);
         $posts = Post::orderBy('id', 'desc')->limit(3)->get();
         $name = $request->name;
         $results = Product::where('name','LIKE',"%{$name}%",)->get();
         $menus = Menu::Where('parent_id',0)->get();
         if (isset($_GET['seletc'])) {
           $sort_by = $_GET['seletc'];
           if ($request->seletc == 'price_asc') {
               $results = Product::orderBy('price', 'ASC')->paginate(9)->appends(request()->query());
           } elseif ($request->seletc == 'price_desc') {
               $results =  Product::orderBy('price', 'DESC')->paginate(9)->appends(request()->query());
           } elseif ($request->seletc == 'name_desc') {
               $results =  Product::orderBy('name', 'DESC')->paginate(9)->appends(request()->query());
           } elseif ($request->seletc == 'name_asc') {
               $results =  Product::orderBy('name', 'ASC')->paginate(9)->appends(request()->query());
           }
        }
         return view('client.product.search', compact('new_products','menus','code','name','posts','results'));
    }
    
    }
