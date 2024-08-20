@extends('layouts.admin.index')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm sản phẩm
            </div>
            <div class="card-body">
                <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" id="name">
                                @error('name')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Giá</label>
                                <input class="form-control" type="text" name="price" id="name">
                                @error('price')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Giá cũ</label>
                                <input class="form-control" type="text" name="old_price" id="name">
                                @error('old_price')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="intro">Mô tả sản phẩm</label>
                                <textarea name="description" class="form-control" id="intro" cols="30" rows="5"></textarea>
                                @error('description')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="intro">Chi tiết sản phẩm</label>
                        <textarea name="detail" class="form-control" id="intro" cols="30" rows="5"></textarea>
                        @error('detail')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                    </div>

                    <div class="form-group">
                        <input type="file" name="product_image">
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
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Công khai
                            </label>
                        </div>
                        @error('status')
                                <small style="font-size: 16px; color:red !important;"
                                class="form-text text-danger ">{{ $message }}</small>
                                @enderror
                    </div>



                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
