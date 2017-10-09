@extends('admin.layout.master')
@section('title')
    Lớp học
@endsection

@section('menu-name')
    Lớp học
@endsection
@section('function-name')
    Thêm lớp học
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('classes.store') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Khoa: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <select class="form-control" name="faculty">
                                @foreach($facultiesList as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
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
