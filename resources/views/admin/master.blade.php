@include('admin.header.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin.templates.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @yield('content')
  <!-- /.content-wrapper -->
 @include('admin.footer.footer')
