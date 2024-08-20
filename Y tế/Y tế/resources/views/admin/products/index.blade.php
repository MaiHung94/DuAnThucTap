@extends('layouts.admin.index')
@section('content')

    <div id="content" class="container-fluid">
        <div class="card">
            @if (session('status'))
                <div class="alert alert-success mt-2 mb-2">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0 ">Danh sách sản phẩm</h5>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="" class="text-primary">Còn hàng<span class="text-muted">({{ $posts1 }})</span></a>
                    <a href="" class="text-primary">Hết hàng<span class="text-muted">({{ $posts2 }})</span></a>
                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $item)
                            <tr class="">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{ $item->id }}</td>
                                <td><img  style="height: 41px;
                                    width: 85%;"  src="{{ url($item->product_image) }}" alt=""></td>
                                <td><a href="#">{{ $item->name }}</a></td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->menus->name }}</td>
                                <td> 2023-09-18 19:24:56</td>
                                <td><span class="badge badge-success">Còn hàng</span></td>
                                <td>
                                    <a href="{{ route('edit.product', $item->id) }}" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ route('delete.product', $item->id) }}" class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
