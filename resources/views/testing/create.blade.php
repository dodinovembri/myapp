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
              <form role="form" method="POST" action="{{route('testing.postcreate')}}">              
                @csrf
                <div class="form-group">
                  <label>Testing Document Type</label>
                  <select class="form-control" name="testing_document_type" required>
                    <option>Select</option>
                    <?php foreach ($testing_document_type as $key => $value) { ?>
                      <option value="{{ $value->document_code }}">{{ $value->document_type}}</option>
                    <?php } ?>                    
                  </select>
                </div>                
                <div class="form-group">
                  <label>Testing Name</label>
                  <input type="text" class="form-control" name="testing_name" placeholder="Enter ..." required>
                </div>              
                <div class="form-group">
                  <label>Testing URL</label>
                  <input type="text" class="form-control" name="testing_url" placeholder="Enter ..." required>
                </div>       
                <div class="form-group">
                  <label>Ket</label>
                  <textarea name="ket" class="form-control" rows="7" placeholder="Enter ..."></textarea>
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