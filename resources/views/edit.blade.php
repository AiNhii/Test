@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa thông tin sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('sinhvien.update', $sinhvien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-froup">
                        <strong>ID Sinh viên</strong>
                        <input type="text" name="IDSV" value ="{{ $sinhvien->IDSV }}" id="" class="form-control" placeholder="Nhập ID sinh viên">
                    </div> 
                    <div class="form-group">
                        <strong>Tên Sinh viên</strong>
                        <input type="text" name="TenSV" value ="{{ $sinhvien->TenSV }}" id="" class="form-control" placeholder="Nhập tên sinh viên">
                    </div>
                    <div class="form-group">
                        <strong>Ngày sinh</strong>
                        <input type="date" name="Ngaysinh" value ="{{ $sinhvien->Ngaysinh }}" id="" class="form-control" placeholder="Chọn ngày sinh của sinh viên">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Giới tính</strong>
                        <select name="Gioitinh" class="form-select"> 
                            <option selected> Chọn giới tính</option>
                            <option value="Nam" value ="{{ $sinhvien->Gioitinh == "Nam" ? 'selected' : ''}}">Nam</option>
                            <option value="Nữ" value ="{{ $sinhvien->Gioitinh == "Nữ" ? 'selected' : ''}}">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Địa chỉ</strong>
                        <input type="text" name="Diachi" value ="{{ $sinhvien->Diachi}}" id="" class="form-control" placeholder="Nhập địa chỉ sinh viên">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
        </form>
        </div>
    </div>
@endsection