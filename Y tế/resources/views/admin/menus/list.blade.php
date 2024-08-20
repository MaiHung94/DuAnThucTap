@extends('layouts.admin.index')
@section('content')

    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Danh sách menus
            </div>
            <div class="card-body">
                <table>
                    <tbody>
                        @if ($list_menus->count() > 0)
                            <form class="mg-b-20">
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label ps-2 pt-0 pb-0 ps-3">Stt</label>
                                                    </div>
                                                </th>
                                                <th>Tên menu</th>
                                                <th>Đường link </th>
                                                <th>Thời gian thêm</th>
                                                <th>Người thêm</th>
                                                <th>Trạng thái</th>
                                               
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $stt = 0;
                                            @endphp
                                            @foreach ($list_menus as $key => $value)
                                                @php
                                                    $stt++;
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                name="list_check[]" value="{{ $value->id }}">
                                                            <label
                                                                class="form-check-label ps-2 pt-0 pb-0">#{{ $value->id }}</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->slug }}</td>
                                                    <td>{{ $value->created_at }}</td>
                                                    <td style="font-weight: 700;color: #83182c;">{{ $value->user_create }}
                                                    </td>

                                                    @if ($value->status == '0')
                                                        <td style="line-height: 2;"><span class="badge-success badge">Đã
                                                                duyệt</span></td>
                                                    @else
                                                        <td class="d-block mg-t-8"><span
                                                                class="badge badge-pill badge-danger">Chờ
                                                                duyệt</span></td>
                                                    @endif
                                                   
                                                    <td><a href="{{ route('edit.menu', $value->id) }}"
                                                            class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ route('delete.menu', $value->id) }}"
                                                            class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            {!! $list_menus->links('pagination::bootstrap-4') !!}
                        @else
                            <p class="alert alert-danger">Chưa có menu trên trang này !</p>
                        @endif
            </div>
        </div>
    </div>
@endsection
