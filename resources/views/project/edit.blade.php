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
              <form role="form" method="POST" action="{{route('update_project.postcreate', $project->id )}}">              
                @csrf
                <div class="form-group">
                  <label>Project Name</label>
                  <input type="text" class="form-control" name="project_name" value="{{ $project->project_name }}" placeholder="Enter ..." disabled="">
                </div> 
                <div class="form-group">
                  <label>Start Date</label>
                  <input type="date" class="form-control" name="start_date" value="{{ $project->start_date }}" placeholder="Enter ..." disabled="">
                </div> 
                <div class="form-group">
                  <label>Due Date</label>
                  <input type="date" class="form-control" name="due_date" value="{{ $project->due_date }}" placeholder="Enter ...">
                </div>                                                                
                <div class="form-group">
                  <label>Finish Date</label>
                  <input type="date" class="form-control" name="finish_date" value="{{ $project->finish_date }}" placeholder="Enter ...">
                </div>           
                <div class="form-group">
                  <label>Project Status</label>
                  <select class="form-control" name="project_status" required>
                    <option>Select</option>                    
                      <option value="1">Requirements</option>                          
                      <option value="2">Analysis</option>                          
                      <option value="3">Design</option>                          
                      <option value="4">Implementation</option>                          
                      <option value="5">Testing</option>                          
                      <option value="6">Maintanance</option>                          
                  </select>
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