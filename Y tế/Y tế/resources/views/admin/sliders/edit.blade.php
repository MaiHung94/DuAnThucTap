@extends('layouts.admin.index')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhật slider 
            </div>
            <div class="card-body">
                <form action="{{ route('update.slider', $id->id) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Tiêu đề slider *</label>
                            <input type="text" placeholder="" value="{{ $id->title }}" name="title" class="form-control">
                            @error('title')
                                <small style="font-size: 16px; color:red !important;"
                                    class="form-text text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label for="">Hình ảnh slider</label>
                            <input type="file" name="slider_image">
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
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
