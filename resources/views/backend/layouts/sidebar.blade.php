<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('backend/assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand" height="20"/>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @can('home')
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endcan
                
                @canany(['role-create', 'role-edit', 'role-delete', 'role-view', 'role-list'])
                    <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                        <h4 class="text-section">Role & Permission</h4>
                    </li>
                    <li class="nav-item {{ Request::is('roles') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" href="#submenu">
                            <i class="fas fa-bars"></i>
                            <p>Role & Permission</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu">
                            <ul class="nav nav-collapse">
                                @can('role-list')
                                    <li class="nav-item {{ Request::is('roles') ? 'active' : '' }}">
                                        <a data-bs-toggle="collapse" href="#subnav1">
                                            <span class="sub-item">Role</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="{{ route('roles.index') }}">
                                                        <span class="sub-item">List</span>
                                                    </a>
                                                </li>
                                                @can('role-create')
                                                    <li>
                                                        <a href="{{ route('roles.create') }}">
                                                            <span class="sub-item">Create</span>
                                                        </a>
                                                    </li>
                                                @endcan
                                            </ul>
                                        </div>
                                    </li>
                                @endcan
                                
                                @can('permission-list')
                                    <li>
                                        <a data-bs-toggle="collapse" href="#subnav2">
                                            <span class="sub-item">Permission</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav2">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="{{ route('permissions.index') }}">
                                                        <span class="sub-item">List</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcanany
                
                <!-- Add other sections in a similar manner based on permissions -->
            
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->