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
                <a href="{{ route('implementation.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button></a>

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
                    <th>Developer</th>
                    <th>Task Name</th>
                    <th>Task Detail</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Finish Date</th>
                    <th>Status</th>
                    <th>Ket</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; foreach ($implementation as $key => $value) { $no++; ?>
  	                <tr>
                      <td>{{ $no }}</td>  	                                 
                      <td>{{ $value->full_name }}</td>                                        
                      <td>{{ $value->task_name }}</td>                                        
                      <td>{{ $value->task_detail }}</td>                                        
                      <td>{{ $value->start_date }}</td>                                        
                      <td>{{ $value->due_date}}</td>                                        
                      <td>{{ $value->finish_date }}</td>                                        
                      <td>{{ $value->status }}</td>                                        
  	                  <td>{{ $value->ket }}</td>	
                      <td>
                        <a href=""><i class="fa fa-search"></i></a> - 
                        <a href="{{ route('update_project.update', $value->id ) }}"><i class="fa fa-edit"></i></a> - 
                        <a href=""><i class="fa fa-trash-o"></i></a>
                      </td>                  	                  
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