@extends('admin.layout.master')
@section('title')
    Giáo viên
@endsection

@section('menu-name')
    Giáo viên
@endsection
@section('function-name')
    Thêm giáo viên
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('teachers.store') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mã giáo viên: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="code" value="{{ old('code') }}" class="form-control" placeholder="KTGVXXXX" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Họ: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Địa chỉ: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ngày sinh: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Giới tính: <span class="required">*</span></label>
                        <div class="col-sm-6">

                            <span class="radio-custom radio-primary">
                                <input id="male" name="gender" type="radio" value="1" title="nam" checked>
                                <label for="male">Nam</label>
                            </span>&nbsp; &nbsp;
                            <span class="radio-custom radio-primary">
                                <input id="female" name="gender" type="radio" value="0" title="nữ">
                                <label for="female">Nữ</label>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Số CMT: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="passport" value="{{ old('passport') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Số ĐT: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <select class="form-control" name="faculty">
                                @foreach($facultiesList as $faculty)
                                    <option value="{{ $faculty->id }}"> {{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Chức vụ: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <select class="form-control" name="role">
                                @foreach($rolesList as $role)
                                    <option value="{{ $role->id }}"> {{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
