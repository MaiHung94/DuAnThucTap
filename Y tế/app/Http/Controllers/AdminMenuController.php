<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use App\Menu;
use Illuminate\Support\Str;


class AdminMenuController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive)
    {
        $this->menuRecusive = $menuRecusive;
    }
    public function index(){
        $list_menus = Menu::paginate(10);
        return view('admin.menus.list', compact('list_menus'));
    }
    public function menuEdit($id)
    {
        $menu = Menu::find($id);
        $optionSelect = $this->menuRecusive->menurecusiveEdit($menu->parent_id);
        return view('admin.menus.edit', compact('menu', 'optionSelect'));
    }
    public function menuDelete(Request $request, $id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('list.menu')->with('status', 'Đã xóa menu thành công !');
    }
    public function menuUpdate(Request $request, $id)
    {
        $request->validate(
            [
                'menu_name' => 'required',
                'status' => 'required'
            ],
            [
                'required' => ':attribute menu không được để trống !'
            ],
            [
                'menu_name' => 'Tên',
                'status' => 'Trạng Thái'
            ]
        );
        Menu::where('id', $id)->update(
            [
                'name' => $request->menu_name,
                'slug' => Str::slug($request->menu_name),
                'parent_id' => $request->parent_id,
            ]
        );
        return redirect()->route('list.menu')->with('status', 'Cập nhật menu thành công !');
    }
    public function menuAdd()
    {
        $optionSelect = $this->menuRecusive->menurecusiveAdd();
        return view('admin.menus.add', compact('optionSelect'));
    }
    public function menuStore(Request $request)
    {
        $request->validate(
            [
                'menu_name' => 'required',
                'status' => 'required'
            ],
            [
                'required' => ':attribute menu không được để trống !'
            ],
            [
                'menu_name' => 'Tên',
                'status' => 'Trạng Thái'
            ]
        );
        Menu::create(
            [
                'name' => $request->menu_name,
                'slug' => Str::slug($request->menu_name),
                'parent_id' => $request->parent_id,
                'user_create' => 'Admin',

            ]
        );
        return redirect()->route('list.menu')->with('status', 'Thêm menu thành công !');
    }
}
