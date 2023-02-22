@section('title', 'Medicool | Login')
<!DOCTYPE html>
<html lang="en">
@include('medicool.backend.common_pages.partials.head')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('index') }}"><b>Medi</b>Cool</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to your account</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @if(Route::has('password.request'))
      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      @endif
      <p class="mb-0">
        <a href="{{ route('doctor.register') }}" class="text-center">Register a new membership</a>
      </p>
        @error('email')<span class="text-danger sm">{{ $message }}@enderror
        @error('password')<span class="text-danger sm">{{ $message }}@enderror
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@include('medicool.backend.common_pages.partials.scripts')
</body>
</html>
