<!DOCTYPE html>
<html lang="en">
@include('Admin.partials.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

  <!-- Navbar -->
  @include('Admin.partials.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Admin.partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
  </div>
  <!-- /.content-wrapper -->
@include('Admin.partials.footer')