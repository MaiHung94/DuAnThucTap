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
                <h5 class="m-0 ">Danh sách bài viết Trang</h5>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="" class="text-primary">Công khai<span class="text-muted">({{ $posts1 }})</span></a>
                    <a href="" class="text-primary">Chờ duyệt<span class="text-muted">({{ $posts2 }})</span></a>
                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Người tạo</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pages as $item)
                        <tr>

                            <td scope="row">{{ $item->id }}</td>
                            <td><img style="height: 41px;
                                width: 85%;" src="{{ url($item->post_image) }}" alt=""></td>
                            <td><a href="">{{ $item->name }}</a>
                            </td>
                            <td>{{ $item->menus->name }}</td>
                            <td class=""><span class="btn btn-warning">Admin</span></td>
                            <td>{{ $item->created_at }}</td>
                            <td><a href="{{ route('edit.page', $item->id) }}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete.page', $item->id) }}" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                       
                    </tbody>
                </table>
             {{ $pages->links() }}
            </div>
        </div>
    </div>
@endsection
