@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row m-t-100">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Login</h3>
        </div>
        <div class="panel-body">
          <form class="form" action="{{route('login')}}" method="post">
            @csrf

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="youremail@example.com" autofocus>

              @if ($errors->has('email'))
                <span class="error-message" role="alert">
                    {{ $errors->first('email') }}
                </span>
              @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">

              @if ($errors->has('password'))
                <span class="error-message" role="alert">
                    {{ $errors->first('password') }}
                </span>
              @endif
            </div>

            <div class="checkbox">
              <label for="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? ' checked' : '' }}> Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Login</button>
          </form>
        </div>

      </div>
      <div class="text-center">
          <a href="{{route('password.request')}}">Forgot your password?</a>
      </div>

    </div>
  </div>
</div>
@endsection
