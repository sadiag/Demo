@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Service</li>
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
              <h3>Edit Service
           <a class="btn btn-success float-right btn-sm" href="{{route('services.view')}}">
              <i class="fa-solid fa-circle-arrow-up"></i>
              Service List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               
            <form method="post" action="{{route('services.update',$editData->id)}}" id="myForm"
            enctype="multipart/form-data">
              @csrf
                 <div class="form-row">

                 <div class="form-group col-md-12">
                      <label for="short_title">Short title</label>
                      <input type="text" name="short_title" value="{{$editData->short_title}}"
                       class="form-control">
                    </div>
                      <div class="form-group col-md-12">
                      <label for="long_title">Long title</label>
                      <textarea name="long_title" class="form-control" rows="5">{{$editData->long_title}}</textarea>
                    </div>

                      <div class="form-group col-md-6">
                          <input type="submit" value="update"
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