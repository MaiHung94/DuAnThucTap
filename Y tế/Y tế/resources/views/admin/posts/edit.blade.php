@extends('layouts.admin.index')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhật bài viết
            </div>
            <div class="card-body">
                <form action="{{ route('update',$id->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $id->name }}">
                        @error('name')
                            <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5">{{ $id->content }}</textarea>
                        @error('content')
                            <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                        <label>Nội dung này thuộc menu nào ? *</label>
                        <select name="menu_id" class="select2 form-control">
                            <option value="0">-----Chọn------</option>
                            {{!!$optionSelect!!}}
                        </select>
                        @error('menu_id')
                        <small style="font-size: 16px; color:red !important;"
                        class="form-text text-danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" name="post_image">
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Công khai
                            </label>
                        </div>
                        @error('exampleRadios')
                            <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
