@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row m-t-100">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Join the Community</h3>
        </div>
        <div class="panel-body">
          <form class="form" action="{{route('login')}}" method="post">
            @csrf

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Name</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="John Doe" autofocus>

              @if ($errors->has('name'))
                <span class="error-message" role="alert">
                    {{ $errors->first('name') }}
                </span>
              @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="youremail@example.com">

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

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="confirm_password">Confirm Password</label>
              <input id="confirm_password" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">

              @if ($errors->has('password_confirmation'))
                <span class="error-message" role="alert">
                    {{ $errors->first('password_confirmation') }}
                </span>
              @endif
            </div>

            <button type="submit" class="btn btn-primary pull-right">Register</button>
          </form>
        </div>

      </div>
      <div class="text-center">
          <a href="{{route('login')}}">Already have an Account?</a>
      </div>

    </div>
  </div>
</div>
@endsection
