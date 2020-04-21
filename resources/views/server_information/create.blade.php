@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="{{route('server_information.postcreate')}}">              
                @csrf
                <div class="form-group">
                  <label>Server Name</label>
                  <input type="text" class="form-control" name="server_name" placeholder="Enter ..." required>
                </div>              
                <div class="form-group">
                  <label>Server IP</label>
                  <input type="text" class="form-control" name="server_ip" placeholder="Enter ..." required>
                </div>        
                <div class="form-group">
                  <label>Server URL</label>
                  <input type="text" class="form-control" name="server_url" placeholder="Enter ..." required>
                </div> 
                <div class="form-group">
                  <label>Server Type</label>
                  <select class="form-control" name="server_type" required>
                    <option>Select</option>                    
                      <option value="1">Development</option>                  
                      <option value="2">Staging</option>                  
                      <option value="3">Production</option>                  
                  </select>
                </div>    
                <div class="form-group">
                  <label>Laravel Version</label>
                  <input type="text" class="form-control" name="laravel_verison" placeholder="Enter ..." required>
                </div>                                                                                                                           
                <div class="form-group">
                  <label>PHP Version</label>
                  <input type="text" class="form-control" name="php_version" placeholder="Enter ..." required>
                </div>                                                                            
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection