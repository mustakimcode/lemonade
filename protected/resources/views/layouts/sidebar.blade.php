<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{auth::user()->name}}</p>
        <!-- Status -->
      
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>

      <li class="active"><a href="{{ url('admin/event') }}"><i class="fa fa-calendar-check-o"></i> <span>Event</span></a></li>
      <li class="active"><a href="{{ url('admin/gedung') }}"><i class="fa fa-building"></i> <span>Gedung</span></a></li>
      <li class="active"><a href="{{ url('admin/kostum') }}"><i class="fa fa-black-tie"></i> <span>Kostum</span></a></li>
      <li class="active"><a href="{{ url('admin/paket') }}"><i class="fa fa-dropbox"></i> <span>Paket</span></a></li>
      <li class="active"><a href="{{ url('admin/youtube') }}"><i class="fa fa-forward"></i> <span>Youtube</span></a></li>


    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>