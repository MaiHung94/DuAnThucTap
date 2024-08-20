@extends('layouts.admin.index')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách thành viên</h5>
            
        </div>
        <div class="card-body">
           
           
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="checkall">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Quyền</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td><b class="btn btn-danger">Quản trị hệ thống</b></td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                            <a href="{{ route('edit.user', $value->id) }}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('delete.user', $value->id) }}" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>     
                    @endforeach
                   
                   
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection