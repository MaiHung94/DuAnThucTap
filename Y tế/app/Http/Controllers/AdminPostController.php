<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Components\MenuRecusive;
use App\Menu;
class AdminPostController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive)
    {
        $this->menuRecusive = $menuRecusive;
    }
    public function index(){
        $posts = Post::paginate(10);
        $posts1 = Post::where('status',0)->count();
        $posts2 = Post::where('status',1)->count();

        return view('admin.posts.index', compact('posts', 'posts1','posts2'));
    }
    public function add(){
        $optionSelect = $this->menuRecusive->menurecusiveAdd();

        return view('admin.posts.add', compact('optionSelect'));
    }
    public function store(Request $request){
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
        Post::create(
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
    public function edit($id){
        $optionSelect = $this->menuRecusive->menurecusiveAdd();
        $id = Post::find($id);
        return view('admin.posts.edit', compact('id','optionSelect'));
    }
    public function update(Request $request, $id)
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
        Post::where('id',$id)->update(
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
    public function delete($id){
   Post::find($id)->delete();
   return back();
    }
}
