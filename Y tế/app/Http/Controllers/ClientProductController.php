<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Handler\Proxy;

class ClientProductController extends Controller
{
    public function product_detail(Request $request, $slug){
        $detail = Product::where('slug', $slug)->first();
        $menus = Menu::where('parent_id',0)->get();

  return view('client.product.detail',compact('detail','menus'));
    }
    public function  add_to_cart(Request $request, $id) {
        $products = Product::all();
        $data = Product::find($id);
        Cart::add(
            [
                'id' => $data->id,
                'name' => $data->name,
                'price' => 20000,
                'qty' => 1,
                'options' => [
                    'product_image' => $data->product_image
                ],
            ]
        );
        return redirect('cart-pay/cart.html')->with('status',"BẠN ĐÃ THÊM SẢN PHẨM '{$data->name}' VÀO GIỎ HÀNG THÀNH CÔNG !")->with('products', 'products');
    }
    public function deleteCart($rowId){
      Cart::remove($rowId);
      return redirect('/')->with('status','Xóa thành công !');
    }
    public function checkout(){
        Cart::destroy();
        return back()->with('status','Thanh toán thành công !');
    }
    public function shop(){
        $menus = Menu::where('parent_id',0)->get();
        $sliders = Slider::all();
        $products = Product::all();
       
         return view('client.product.products', compact('menus','sliders','products'));  
    }
    public function detail(Request $request, $slug){
        $menus = Menu::where('parent_id',0)->get();
        $products = Product::all();
        $product_detail = Product::where('slug', $slug)->first();
        return view("clients.products.detail", compact('product_detail', 'menus','products'));
    }
    public function cart(){
        $menus = Menu::where('parent_id',0)->get();
        $products = Product::all();
        return view('clients.products.index', compact('menus'));
    }
    public function search(Request $request){
        $sliders = Slider::all();
       $name = $request->input('keyword');
       $menus = Menu::where('parent_id',0)->get();
    $products = Product::where('name', 'LIKE', "%{$name}%")->get();
 return view('clients.products.search', compact('name', 'products', 'menus','sliders')) ;
}
 public function product($slug){
    $menus = Menu::where('parent_id',0)->get();
    $find_id = Menu::where('slug',$slug)->first();
    $products = Product::where('category_id',$find_id->id)->get();
    return view('clients.product.index',compact('menus','products','find_id'));
 }
}
