  @extends('layouts.backend')

  @section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3><br><br>
                <a href="{{ route('server_information.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button></a>

                @if(session()->has('message'))
                <br><br>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i>  {{ session()->get('message') }}              
                </div>              
                @endif
                @if($errors->any())
                  <div class="alert alert-dismissible alert-fill-danger" role="alert">
                      @foreach ($errors->all() as $error)
                          {{$error}}<br/>
                      @endforeach

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif 
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>                                    
                    <th>Server Name</th>
                    <th>Server IP</th>
                    <th>Server URL</th>
                    <th>Server Type</th>
                    <th>Laravel Version</th>
                    <th>PHP Version</th>                                      
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; foreach ($server_information as $key => $value) { $no++; ?>
  	                <tr>
                      <td>{{ $no }}</td>  	                                 
                      <td>{{ $value->server_name }}</td>                                        
                      <td>{{ $value->server_ip }}</td>                                        
                      <td><u><b><a href="{{ $value->server_url }}" target="_blank">SER-00{{$value->id}}</a></b></u></td>                                                              
                      <td>
                        <?php if ($value->server_type == 1) { ?>
                          <small class="label label-info">Development</small>
                        <?php } elseif ($value->server_type == 2) { ?>
                          <small class="label label-success">Staging</small>                          
                        <?php }elseif ($value->server_type == 3) { ?>
                          <small class="label label-danger">Production</small>                          
                        <?php }else{ ?>
                          <small class="label label-info">Wrong Configuration</small>                          
                        <?php } ?>
                      </td>                                                              
                      <td>{{ $value->laravel_verison }}</td>                                        
                      <td>{{ $value->php_version }}</td>                                                             	                 	                  
  	                </tr>                   	
                  <?php } ?>          
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  @endsection