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
            <form class="form" action="{{ route('password.update') }}" method="post">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">

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

              <button type="submit" class="btn btn-primary pull-right">Reset Password</button>
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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
