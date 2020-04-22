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
              <form role="form" method="POST" action="{{route('account.postcreate')}}">              
                @csrf
                <div class="form-group">
                  <label>Account Type</label>
                  <select class="form-control" name="id_account_type" required>
                    <option>Select</option>
                    <?php foreach ($account_type as $key => $value) { ?>
                      <option value="{{ $value->id }}">{{ $value->account_type_name}}</option>
                    <?php } ?>                    
                  </select>
                </div>                
                <div class="form-group">
                  <label>URL Link</label>
                  <input type="text" class="form-control" name="link_url" placeholder="Enter ..." required>
                </div> 
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter ..." required>
                </div> 
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Enter ..." required>
                </div>  
                <div class="form-group">
                  <label>Ket</label>
                  <textarea name="ket" class="form-control" rows="7" placeholder="Enter ..." required></textarea>
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