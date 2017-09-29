@extends('admin.layout.master')
@section('title')
    Quyền admin
@endsection

@section('menu-name')
    Level
@endsection
@section('function-name')
    Tạo quyền admin
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('levels.store') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Quyền: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{ old('name')  }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ghi chú:</label>
                        <div class="col-sm-6">
                            <textarea  rows="5" name="description" class="form-control">{{ old('description') }}</textarea>
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