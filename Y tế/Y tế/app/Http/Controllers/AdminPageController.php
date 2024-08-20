<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Components\MenuRecusive;
use App\Menu;
class AdminPageController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive)
    {
        $this->menuRecusive = $menuRecusive;
    }
    public function index(){
        $pages = Page::paginate(10);
        $posts1 = Page::where('status',0)->count();
        $posts2 = Page::where('status',1)->count();

        return view('admin.pages.index', compact('pages', 'posts1','posts2'));
    }
    public function pageAdd(){
        $optionSelect = $this->menuRecusive->menurecusiveAdd();

        return view('admin.pages.add', compact('optionSelect'));
    }
    public function pageStore(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'post_image' => 'required',
                'exampleRadios' => 'required',
                'content' => 'required'
            ],
            [
                'required' => ':attribute không được để chống !'
            ],
            [
                'name' => 'Tiêu đề',
                'post_image' => 'Hình ảnh',
                'exampleRadios' => 'Trạng thái',
                'content' => 'Nội dung bài viết'
            ]

        );
        if ($request->hasFile('post_image')) {
            $slider1 =  $request->post_image;
            $name = $slider1->getClientOriginalName();
            $image = $slider1->move('public/upload', $name);
        }
        Page::create(
            [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'post_image' => $image,
                'content' => $request->content,
                'status' => $request->exampleRadios,
                'category_id' => $request->menu_id
            ]
        );
        return redirect()->route('lists')->with('status','Thêm bài biết thành công !');
    }
    public function pageEdit($id){
        $optionSelect = $this->menuRecusive->menurecusiveAdd();
        $id = Page::find($id);
        return view('admin.pages.edit', compact('id','optionSelect'));
    }
    public function pageUpdate(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'post_image' => 'required',
                'exampleRadios' => 'required',
                'content' => 'required'
            ],
            [
                'required' => ':attribute không được để chống !'
            ],
            [
                'name' => 'Tiêu đề',
                'post_image' => 'Hình ảnh',
                'exampleRadios' => 'Trạng thái',
                'content' => 'Nội dung bài viết'
            ]

        );
        if ($request->hasFile('post_image')) {
            $slider1 =  $request->post_image;
            $name = $slider1->getClientOriginalName();
            $image = $slider1->move('public/upload', $name);
        }
        Page::where('id',$id)->update(
            [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'post_image' => $image,
                'content' => $request->content,
                'status' => $request->exampleRadios,
                'category_id' => $request->menu_id
            ]
        );
        return redirect()->route('lists')->with('status','Cập nhật bài biết thành công !');
    }
    public function pageDelete($id){
        Page::find($id)->delete();
        return back();
    }
}
