@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage News and Event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News and Event</li>
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
              <h3>Add News and Event
           <a class="btn btn-success float-right btn-sm" href="{{route('news_events.view')}}">
              <i class="fa-solid fa-circle-arrow-up"></i>
              News and Event List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               
            <form method="post" action="{{route('news_events.store')}}" id="myForm"
            enctype="multipart/form-data">
              @csrf
                 <div class="form-row">
                 <div class="form-group col-md-4">
                      <label for="date">Date</label>
                      <input type="text" name="date" id="datepicker" class="form-control"
                      placeholder="YYYY-MM-DD" readonly>
                    </div>

                 <div class="form-group col-md-8">
                      <label for="short_title">Short title</label>
                      <input type="text" name="short_title" class="form-control">
                    </div>
                      <div class="form-group col-md-12">
                      <label for="long_title">Long title</label>
                      <textarea name="long_title" class="form-control" rows="5"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="image">Image</label>
                      <input type="file" name="image" class="form-control"
                      id="image">
                    </div>
                    <div class="form-group col-md-2">
                        <img id="showImage" src="{{asset('upload/no_image.png')}}" 
                        style="width: 150px;height: 160px;
                        border:1px solid#000">
                     </div>
                      <div class="form-group col-md-6" style="padding-top:30px;">
                          <input type="submit" value="Submit"
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
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format :'yyyy-mm-dd'
     });
    </script>

  @endsection