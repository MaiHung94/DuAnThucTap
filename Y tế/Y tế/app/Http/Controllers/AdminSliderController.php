<?php

namespace App\Http\Controllers;

use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSliderController extends Controller
{
    public function index(){
 $sliders = Slider::paginate(10);
 $count1 = Slider::where('status',0)->count();
 $count2 =Slider::where('status',1)->count();
        return view('admin.sliders.index', compact('sliders','count2','count1'));
    }
    public function sliderAdd(){
        return view('admin.sliders.add');
    }
    public function sliderStore(Request $request){
        $request->validate(
            [
                'title' => 'required',
                'status' => 'required',
            ],
            [
                'required' => ':attribute slider không được để trống !'
            ],
            [
                'title' => 'Tiêu đề',
                'status' => 'Trạng Thái'
            ]
        );
        if ($request->hasFile('slider_image')) {
            $slider1 =  $request->slider_image;
            $name = $slider1->getClientOriginalName();
            $image = $slider1->move('public/upload', $name);
        }
        Slider::insert(
            [
'title' => $request->title,
'slider_image' => $image,
'slug' => Str::slug($request->title),
'status' => $request->status
            ]
            );
            return redirect()->route('list.slider')->with('status', 'Thêm Slider thành công !');

    }
    public function  sliderEdit($id) {
        $id = Slider::find($id);
        return view('admin.sliders.edit', compact('id'));
    }
    public function  sliderUpdate(Request $request,$id) {
        $request->validate(
            [
                'title' => 'required',
                'status' => 'required',
            ],
            [
                'required' => ':attribute slider không được để trống !'
            ],
            [
                'title' => 'Tiêu đề',
                'status' => 'Trạng Thái'
            ]
        );
        if ($request->hasFile('slider_image')) {
            $slider1 =  $request->slider_image;
            $name = $slider1->getClientOriginalName();
            $image = $slider1->move('public/upload', $name);
        }
        Slider::where('id',$id)->update(
            [
'title' => $request->title,
'slider_image' => $image,
'slug' => Str::slug($request->title),
'status' => $request->status
            ]
            );
            return redirect()->route('list.slider')->with('status', 'Cập nhật Slider thành công !');

    }

    public function  sliderDelete(Request $request,$id) {
       Slider::find($id)->delete();
    }
 public function indexSlider(){
  
    $users = User::paginate(10);
    return view('admin.users.index', compact('users'));
 }
    public function userAdd(){
        return view('admin.users.add');
    }
    public function userStore(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'required' => ':attribute user không được để trống !'
            ],
            [
                'name' => 'Tên',
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );
       
        User::insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
            ]
            );
            return redirect()->route('list.user')->with('status', 'Thêm Người dùng thành công !');

    }
    public function  userEdit($id) {
        $id = User::find($id);
        return view('admin.users.edit',compact('id'));
    }
    public function  userUpdate(Request $request,$id) {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'required' => ':attribute user không được để trống !'
            ],
            [
                'name' => 'Tên',
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );
       
        User::where('id',$id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
            ]
            );
            return redirect()->route('list.user')->with('status', 'Cập nhật người dùng thành công !');

    }
    public function  userDelete(Request $request,$id) {
       User::find($id)->delete();
      return back();
    }
}
