@extends('layouts.admin.index')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Update người dùng
        </div>
        <div class="card-body">
            <form action="{{ route('store.user') }}" method="POST">
                 @csrf
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" value="{{ $id->name }}" id="name">
                    @error('name')
                    <small style="font-size: 16px; color:red !important;"
                        class="form-text text-danger ">{{ $message }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="text-danger">(Lưu ý Email không được trùng)</span></label>
                    <input class="form-control" type="text" value="{{ $id->email }}" name="email" id="email">
                    @error('email')
                    <small style="font-size: 16px; color:red !important;"
                        class="form-text text-danger ">{{ $message }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" value="{{ $id->password }}" name="password" id="password">
                    @error('password')
                    <small style="font-size: 16px; color:red !important;"
                        class="form-text text-danger ">{{ $message }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection