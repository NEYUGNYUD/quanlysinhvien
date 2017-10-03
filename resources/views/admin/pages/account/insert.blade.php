@extends('admin.layout.master')
@section('title')
    Account admin
@endsection

@section('menu-name')
    Account Admin
@endsection
@section('function-name')
    Tạo account admin
@endsection

@section('content')
    <div class="col-md-12">
        @include('error_notification.error')
        <form id="summary-form" action=" {{ route('register') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Họ tên: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{ old('name')  }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" value="{{ old('email')  }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ảnh đại điện: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            @include('ckfinder.ckfinder', ['fileId' => '1', 'fileName' => 'avatar'])
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mật khẩu: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" value="{{ old('password')  }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Xác nhận mật khẩu: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            <input type="password" name="re-password" class="form-control" value="{{ old('re-password')  }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Quyền: <span class="required" style="color: #ff0000;">*</span></label>
                        <div class="col-sm-6">
                            <select name="level" class="form-control">
                                @if(isset($levelsList))
                                    @foreach($levelsList as $level)
                                    <option value="{{ $level->id }}"> {{ $level->name }}</option>
                                    @endforeach
                                @endif
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