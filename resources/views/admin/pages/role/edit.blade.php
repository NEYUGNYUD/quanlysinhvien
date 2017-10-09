@extends('admin.layout.master')
@section('title')
    Chức vụ giáo viên
@endsection

@section('menu-name')
    Chức vụ giáo viên
@endsection

@section('function-name')
    Chỉnh sửa chức vụ giáo viên
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('roles.update', ['role' => $role->slug]) }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" value="{{ $role->name }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary" type="submit">Cập nhập</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
