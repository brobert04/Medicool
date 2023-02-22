@section('title', 'Medicool | Register')
<!DOCTYPE html>
<html lang="en">
@include('medicool.backend.common_pages.partials.head')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('index') }}"><b>Medi</b>Cool</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new account</p>

      <form action="{{ route('doctor.register.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" id="name" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="password_confirmation" name="password_confirmation" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="col-lg-12" style="padding:0">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Documents</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile1" title="Upload your ID to prove your identity" name='documents[]' multiple>
                  <label class="custom-file-label" for="customFile1">Document 1</label>
                </div>
                {{-- <div class="custom-file mt-3">
                  <input type="file" class="custom-file-input" id="customFile2"  accept="image/*" title="Upload your graduation diploma to prove you finished Med School" name='document2'>
                  <label class="custom-file-label" for="customFile2">Document 2</label>
                </div>
                <div class="custom-file mt-3">
                  <input type="file" class="custom-file-input" id="customFile3"  accept="image/*" title="Upload your medical document" name='document3'>
                  <label class="custom-file-label" for="customFile3">Document 3</label>
                </div> --}}
              </div>
              <div class="preview-image" id="preview-image">
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="form-group">
            
          </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
    </form>
      <a href="{{ route('login') }}" class="text-center mt-3">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@include('medicool.backend.common_pages.partials.scripts')
</body>
</html>