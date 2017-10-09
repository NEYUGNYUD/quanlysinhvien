@extends('admin.layout.master')
@section('title')
    Chỉnh sửa thông tin khoa
@endsection

@section('menu-name')
    Khoa
@endsection
@section('function-name')
    Chỉnh sửa thông tin khoa
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('faculties.update', ['faculty' => $faculty->slug]) }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{ $faculty->name }}"required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mã khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="code" class="form-control" value="{{ $faculty->faculty_code }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary">Cập nhập</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
