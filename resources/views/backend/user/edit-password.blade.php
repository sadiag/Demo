@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
              <h3>Edit password
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
          <form method="post" action="{{route('profiles.password.update')}}" id="myForm">
              @csrf
                   <div class="form-row">
                   <div class="form-group col-md-4">
                      <label for="current_password">Current Password</label>
                      <input type="password" name="current_password" id="current_password" class="form-control" required>
                      
                      </div>
                      <div class="form-group col-md-4">
                      <label for="new_password">New Password</label>
                      <input type="new_password" name="new_password" id="new_password" class="form-control" required>
                      
                      </div>

                      <div class="form-group col-md-4">
                      <label for="again_new_password">Again new Password</label>
                      <input type="again_new_password" name="again_new_password" class="form-control" required>
                      
                      </div>
                      <div class="form-group col-md-6">
                          <input type="submit" value="Update"
                          class="btn btn-primary">

                      </div>
                    </div>
         </form>            
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection