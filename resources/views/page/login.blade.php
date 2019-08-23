@extends('master')
@section('tieudetrang')
    Đăng nhập
@endsection
@section('content')

<form class="form-signin" action="showlogin/login" method="POST">
    {{csrf_field()}}
        <h2 class="form-signin-heading">Đăng nhập</h2>
        <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="passlogin" placeholder="Password" required=""/>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
      </form>
@endsection
