<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('assets/dist/img/logo-xs.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Side Menu </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="{{route('home_all_details')}}" class="d-block">Home  All Diesels </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <div class="input-group-append">

                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{route('add_event')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Add Events
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('view_event')}}" class="nav-link">
                        <i class="nav-icon fas fa-map"></i>
                        <p>
                            View Events
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('home_all_details')}}" class="nav-link">
                        <i class="nav-icon fas fa-eye"></i>
                        <p>
                            Views
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('add_event_details')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Add Events Details
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('view_event_details')}}" class="nav-link">
                        <i class="nav-icon fas fa-map"></i>
                        <p>
                            View Events Details
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
