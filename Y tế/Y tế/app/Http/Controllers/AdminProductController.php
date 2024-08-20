<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use App\Menu;
use Illuminate\Support\Str;

use App\Product;
use DateTime;

class AdminProductController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive)
    {
        $this->menuRecusive = $menuRecusive;
    }
    public function index(){
        $ldate = new DateTime('today');
        $products = Product::paginate(10);
        $posts1 = Product::where('status',0)->count();
        $posts2 = Product::where('status',1)->count();
        return view('admin.products.index', compact('products','ldate','posts1','posts2'));
    }
    public function productAdd(){
        $optionSelect = $this->menuRecusive->menurecusiveAdd();
        return view('admin.products.add', compact('optionSelect'));
    }
    public function productEdit($id){
        $id = Product::find($id);
        $optionSelect = $this->menuRecusive->menurecusiveAdd();
        return view('admin.products.edit', compact('optionSelect','id'));
    }
    public function productDelete($id){
        Product::find($id)->delete();
        return redirect()->route('list.product')->with('status','Xóa sản phẩm thành công!');

    }
    public function productUpdate(Request $request, $id){
        $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'old_price' => 'required',
                'description' => 'required',
                'detail' => 'required',
                'menu_id' => 'required',
                'status' => 'required'
            ]
            );
            if ($request->hasFile('product_image')) {
                $slider1 =  $request->product_image;
                $name = $slider1->getClientOriginalName();
                $image = $slider1->move('public/upload', $name);
            }
            Product::where('id',$id)->update(
                [
            'name' => $request->name,
            'price' => $request->price,
            'price_old' => $request->old_price,
            'product_image' => $image,
            'content' => $request->description,
            'content_detail' => $request->detail,
            'category_id' => $request->menu_id,
            'slug' => Str::slug($request->name),
            'status' => $request->status
                ]
                );
                return redirect()->route('list.product')->with('status','Thêm sản phẩm thành công!');
            }
    public function productStore(Request $request){
$request->validate(
    [
        'name' => 'required',
        'price' => 'required',
        'old_price' => 'required',
        'description' => 'required',
        'detail' => 'required',
        'menu_id' => 'required',
        'status' => 'required'
    ]
    );
    if ($request->hasFile('product_image')) {
        $slider1 =  $request->product_image;
        $name = $slider1->getClientOriginalName();
        $image = $slider1->move('public/upload', $name);
    }
    Product::insert(
        [
            'name' => $request->name,
            'price' => $request->price,
            'price_old' => $request->old_price,
            'product_image' => $image,
            'content' => $request->description,
            'content_detail' => $request->detail,
            'category_id' => $request->menu_id,
            'slug' => Str::slug($request->name),
            'status' => $request->status
        ]
        );
        return redirect()->route('list.product')->with('status','Thêm sản phẩm thành công!');
    }
}
