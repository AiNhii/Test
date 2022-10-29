@extends('layout')

@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end">Thêm mới<img src="" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has(('thongbao')))
                    <div class="alert alert-success">
                        {{ Session::get('thongbao') }}
                    </div>
                @endif
                <table class ="table table-bordered" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID Sinh viên</th>
                            <th>Tên Sinh viên</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Ngày sinh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $sv->IDSV }}</td>
                                <td>{{ $sv->TenSV }}</td>
                                <td>{{ $sv->Gioitinh }}</td>
                                <td>{{ $sv->Diachi }}</td>
                                <td>{{ $sv->Ngaysinh }}</td>
                                <td>
                                    <form action="{{ route('sinhvien.destroy', $sv->id) }}" method="POST">
                                        <a href="{{ route('sinhvien.edit', $sv->id) }}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection