<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/login/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/login/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/login/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>User</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign In</p>
            @include('message_info')
            <form action="{{route('user.updateUserPass',['id'=>\Illuminate\Support\Facades\Auth::user()->id])}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="New password" name="newPass">
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4 mt-1 mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets')}}/Admin/login/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/Admin/login/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/Admin/login/adminlte.min.js"></script>
</body>
</html>

