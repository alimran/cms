@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row m-t-100">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3>Reset Password</h3>
          </div>
          <div class="panel-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form" action="{{ route('password.email') }}" method="post">
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

              <button type="submit" class="btn btn-primary pull-right">Send Password Reset Link</button>
            </form>
          </div>

        </div>
        <div class="text-center">
            <a href="{{route('login')}}">Back to Login</a>
        </div>

      </div>
    </div>
  </div>
@endsection
