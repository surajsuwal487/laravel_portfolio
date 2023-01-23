<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div  style="text-align: center">
        <a href="{{ route('inquiry.index') }}" class="brand-link">
            {{-- <img src="{{ asset('img/logo.JPG') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light">Portfolio</span>
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          </div>
      </div> --}}

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('inquiry.index') }}" class="nav-link">
                        <i class="fa-solid fa-gauge fa-fw"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inquiry.index') }}" class="nav-link">
                        <i class="fa-sharp fa-solid fa-user fa-fw"></i>
                        <p>Inquries</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('project.index') }}" class="nav-link">
                        <i class="fa-solid fa-briefcase fa-fw"></i>
                        <p>Projects</p>
                    </a>
                </li>

                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Inquiry
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('inquiry.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>View Inquiry</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('inquiry.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>View Home</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
