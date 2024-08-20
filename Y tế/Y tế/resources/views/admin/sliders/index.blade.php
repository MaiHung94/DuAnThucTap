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
                <h5 class="m-0 ">Danh sách Slider</h5>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="" class="text-primary">Công khai<span class="text-muted">({{ $count1 }})</span></a>
                    <a href="" class="text-primary">chờ duyệt<span class="text-muted">({{ $count2 }})</span></a>
                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tiêu đề slider</th>
                            <th scope="col">đường dẫn</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $key => $item)
                            <tr class="">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{ $key }}</td>
                                <td><img style="height: 41px;
                                    width: 85%;"
                                        src="{{ url($item->slider_image) }}" alt=""></td>
                                <td><a href="#">{{ $item->title }}</a></td>
                                <td>{{ $item->slug }}</td>
                                <td> 2023-09-18 19:24:56</td>
                                <td><span class="badge badge-success">Đã Duyệt</span></td>
                                <td>
                                    <a href="{{ route('edit.slider', $item->id) }}"
                                        class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ route('delete.slider', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
{{ $sliders->links() }}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
