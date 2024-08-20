@extends('layouts.admin.index')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm menu
        </div>
        <div class="card-body">
            <form action="{{route('store.menu')}}" method="post" class="new-added-form">
                @csrf
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Tên menu *</label>
                        <input type="text" placeholder="" name="menu_name" class="form-control">
                        @error('menu_name')
                        <small style="font-size: 16px; color:red !important;" class="form-text text-danger ">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Đường dẫn (không bắt buộc)</label>
                        <input type="text" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Chọn Menu Cha*</label>
                        <select name="parent_id" class="select2 form-control">
                            <option value="0">-----Chọn------</option>
                            {{!!$optionSelect!!}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Công khai
                            </label>
                        </div>
                        @error('status')
                            <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection