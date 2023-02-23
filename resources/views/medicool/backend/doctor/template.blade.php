<!DOCTYPE html>
<html lang="en">
@include('medicool.backend.doctor.partials.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('medicool.backend.doctor.partials.preloader')

  <!-- Navbar -->
  @include('medicool.backend.doctor.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('medicool.backend.doctor.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('medicool.backend.doctor.partials.footer')

</div>
<!-- ./wrapper -->

@include('medicool.backend.doctor.partials.scripts')
</body>
</html>
