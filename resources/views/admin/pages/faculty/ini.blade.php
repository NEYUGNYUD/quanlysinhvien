@extends('admin.layout.master')
@section('title')
    Khởi tạo thông tink khoa toán
@endsection

@section('menu-name')
    Khoa toán
@endsection
@section('function-name')
    Khởi tạo thông tin khoa toán
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('faculties.store') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mã khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="code" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary">Khởi tạo</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
