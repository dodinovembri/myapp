  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('tmp/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <?php  
            if (session()->get('project_now')) {
              $id = session()->get('project_now');
              $project = App\Model\ProjectModel::where('id', $id)->first(); ?>
              <a href="#"><i class="fa fa-circle text-success"></i> {{ isset($project->project_name) ? $project->project_name : '' }}</a>
           <?php }
          ?>          
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>          
          </a>        
        </li>
        <li>
          <a href="{{ route('requirement') }}">
            <i class="fa fa-files-o"></i>
            <span>Requirements</span>           
          </a>          
        </li>
        <li>
          <a href="{{ route('analysis') }}">
            <i class="fa fa-th"></i> <span>Analysis</span>          
          </a>
        </li>
        <li>
          <a href="{{ route('design') }}">
            <i class="fa fa-pie-chart"></i>
            <span>Design</span>            
          </a>         
        </li>
        <li>
          <a href="{{ route('implementation') }}">
            <i class="fa fa-laptop"></i>
            <span>Implementation</span>            
          </a>         
        </li>
        <li>
          <a href="{{ route('testing') }}">
            <i class="fa fa-edit"></i> <span>Testing</span>           
          </a>        
        </li>
        <li>
          <a href="{{ route('maintanance') }}">
            <i class="fa fa-table"></i> <span>Maintanance</span>          
          </a>         
        </li>     
        <li>
          <a href="{{ route('project') }}">
            <i class="fa fa-pie-chart"></i>
            <span>Projects</span>            
          </a>         
        </li>
        <li>
          <a href="{{ route('server_information') }}">
            <i class="fa fa-laptop"></i>
            <span>Server Information</span>            
          </a>         
        </li>  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Document</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('account') }}"><i class="fa fa-circle-o"></i> Accounts</a></li>           
            <li><a href="{{ route('bast') }}"><i class="fa fa-circle-o"></i> Berita Acara Serah Terima</a></li>           
            <li><a href="{{ route('transfer_knowledge') }}"><i class="fa fa-circle-o"></i> Transfer Knowledge</a></li>           
          </ul>
        </li>               
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('account_type') }}"><i class="fa fa-circle-o"></i> Account Type</a></li>            
            <li><a href="{{ route('design_type') }}"><i class="fa fa-circle-o"></i> Design Type</a></li>
            <li><a href="{{ route('developer') }}"><i class="fa fa-circle-o"></i> Developers</a></li>
            <li><a href="{{ route('environment') }}"><i class="fa fa-circle-o"></i> Environment</a></li>
            <li><a href="{{ route('project_status') }}"><i class="fa fa-circle-o"></i> Project Status</a></li>            
            <li><a href="{{ route('testing_document_type') }}"><i class="fa fa-circle-o"></i> Testing Document Type</a></li>            
            <li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>        
        <li>         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>