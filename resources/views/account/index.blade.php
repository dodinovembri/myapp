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
                <a href="{{ route('account.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button></a>

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
                    <th>Environment</th>                                                       
                    <th>Account Type Name</th>                    
                    <th>URL</th>                    
                    <th>Username</th>                    
                    <th>Password</th>                    
                    <th>Ket</th>                    
                    <th>Created At</th>                                                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; foreach ($account as $key => $value) { $no++; ?>
  	                <tr>
                      <td>{{ $no }}</td>                                                    
                      <td>{{ $value->environment_name }}</td>  	                                                
                      <td>{{ $value->account_type_name }}</td>                                                              
                      <td>{{ $value->link_url }}</td>                                                              
                      <td>{{ $value->username }}</td>                                                              
                      <td>{{ $value->password }}</td>                                                              
                      <td>{{ $value->ket }}</td>                                                              
                      <td>{{ $value->created_at }}</td> 
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