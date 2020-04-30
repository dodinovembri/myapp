@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Widgets
        <small>{{ isset($date_all->project_name) ? $date_all->project_name : '' }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Start Date</span>
              <span class="info-box-number">{{ isset($date_all->start_date) ? $date_all->start_date : '' }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Due Date</span>
              <span class="info-box-number">{{ isset($date_all->due_date) ? $date_all->due_date : '-' }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Finish Date</span>
              <span class="info-box-number">{{ isset($date_all->finish_date) ? $date_all->finish_date : '-' }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Remaining Days</span>
              <span class="info-box-number">93,139</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Project Progress</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Progress This Week</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="progress-group">
                <span class="progress-text">New</span>
                <span class="progress-number"><b>160</b>/200</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">On Progress</span>
                <span class="progress-number"><b>310</b>/400</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Fixed</span>
                <span class="progress-number"><b>480</b>/800</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Testing</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <div class="progress-group">
                <span class="progress-text">Fine Tuning</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <div class="progress-group">
                <span class="progress-text">Finish</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>                            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection