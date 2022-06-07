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
              <li class="breadcrumb-item active">Service</li>
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
              <h3>Service List
                
            <a class="btn btn-success float-right btn-sm" href="{{route('services.add')}}">
              <i class="fa-solid fa-circle-arrow-up"></i>
               Add Service</a>
               
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>SL.</th>
                    <th>Short Title</th>
                    <th>Long Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allData as $key => $service)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$service->short_title}}</td>
                    <td>{{$service->long_title}}</td>
                    <td>
                       <a title="Edit" class="btn btn-sm btn-primary" href=
                       "{{route('services.edit',$service->id)}}">
                        <i class="fas fa-edit"></i></a>
                        <a title="delete" id="delete" class="btn btn-sm btn-danger" 
                        href="{{route('services.delete',$service->id)}}">
                        <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

             </table>

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