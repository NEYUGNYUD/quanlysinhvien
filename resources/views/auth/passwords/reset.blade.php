<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reset Password</title>
    <!-- Bootstrap core CSS-->
    <link href=" {{ asset('/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href=" {{ asset('/admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href=" {{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login - Students Management System</div>
        <div class="card-body">
            <form method="post" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"
                           value="{{ old('email') }}" name="email" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="help-block small" style="font-size: small; color: #ff0000;">
                            *{{ $errors->first('email') }}
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password"
                           value="{{ old('password') }}" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block small" style="color: #ff0000;">
                            *{{ $errors->first('password') }}
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password"
                           value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block small" style="color: #ff0000;">
                            *{{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </form>

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src=" {{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src=" {{ asset('/admin/vendor/popper/popper.min.js') }}"></script>
<script src=" {{ asset('/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src=" {{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>

</html>
