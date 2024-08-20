@extends('layouts.admin.index')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Update menu
        </div>
        <div class="card-body">
            <form action="{{route('update.menu', $menu->id)}}" method="post" class="new-added-form">
                @csrf
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Tên menu *</label>
                        <input type="text" placeholder="" value="{{$menu->name}}" name="menu_name" class="form-control">
                        @error('menu_name')
                        <small style="font-size: 16px; color:red !important;" class="form-text text-danger ">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Chọn Menu*</label>
                        <select name="parent_id" class="select2 form-control">
                            <option value="0">-----Chọn------</option>
                            {{!!$optionSelect!!}}
                        </select>
                    </div>
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Trạng thái*</label>
                        <div class="form-group d-flex mb-0">
                            @if ($menu->status=='0')
                            <div class="box d-flex">
                                <label for="ck">Xét Duyệt</label>
                                <input type="radio" name="status" checked value="{{$menu->status}}" id="ck" class="mb-3">
                            </div>
                            <div class="box d-flex">
                                <label for="cd">Chờ Duyệt</label>
                                <input type="radio" name="status" id="cd" class="mb-3">
                            </div>
                            @else
                            <div class="box d-flex">
                                <label for="cd">Xét Duyệt</label>
                                <input type="radio" name="status" id="cd" class="mb-3">
                            </div>
                            <div class="box d-flex">
                                <label for="cd">Chờ Duyệt</label>
                                <input type="radio" checked name="status" id="cd" class="mb-3">
                            </div>
                            @endif
                        </div>
                        @error('status')
                        <small style="font-size: 16px; color:red !important;" class="form-text text-danger ">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn btn-danger">Cập Nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection