@extends('admin.layout.master')
@section('title')
    Năm học
@endsection

@section('menu-name')
    Năm học
@endsection
@section('function-name')
    Chỉnh sửa năm học
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('years.update', ['year' => $year->year]) }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Năm: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <select class="form-control" name="year">
                                @for($listYear = 2000; $listYear <= 2050; $listYear++)
                                    <option value="{{ $listYear }}" {{ $year->year == $listYear?'selected':"" }}>
                                        {{ $listYear }}
                                    </option>
                                @endfor
                            </select>
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
