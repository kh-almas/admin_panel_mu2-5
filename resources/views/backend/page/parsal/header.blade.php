<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="../../index.php">
        <img class="navbar-brand-dark" src="./backend/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="./backend/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar me-4">
                    <img src="{{ asset('storage/'.auth()->user()->profile_photo_path) }}" class="card-img-top rounded-circle border-white" alt="{{ auth()->user()->name }}">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, {{ auth()->user()->name }}</h2>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-secondary text-dark btn-xs" type="submit"><span class="fas fa-sign-out-alt text-danger"></span>Sign Out</button>
                    </form>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                   aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item d-none d-lg-block">
                <a href="{{ route('dashboard.index') }}" class="nav-link d-flex align-items-center">
                  <span class="sidebar-icon">
                    <i class="fas fa-signature"></i>
                  </span>
                    <span class="mt-1 ms-1 sidebar-text">{{ auth()->user()->name }}</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link  collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#Task">
                  <span>
                    <span class="sidebar-icon"><i class="fas fa-photo-video"></i></span>
                    <span class="sidebar-text">Task</span>
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse {{ request()->routeIs('dashboard.category.index') || request()->routeIs('dashboard.tasks.index') || request()->routeIs('dashboard.tasks.create') || request()->routeIs('dashboard.tasks.edit') ? 'show' : '' }}" role="list" id="Task" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ request()->routeIs('dashboard.category.index') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.category.index') }}" class="nav-link">
                                <span class="sidebar-icon"><i class="fas fa-image"></i></span>
                                <span class="sidebar-text">Category</span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('dashboard.tasks.index') || request()->routeIs('dashboard.tasks.create') || request()->routeIs('dashboard.tasks.edit') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.tasks.index') }}" class="nav-link">
                                <span class="sidebar-icon"><i class="fas fa-video"></i></span>
                                <span class="sidebar-text">Task List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#library">
                  <span>
                    <span class="sidebar-icon"><i class="fas fa-photo-video"></i></span>
                    <span class="sidebar-text">Library</span>
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse {{ request()->routeIs('dashboard.images.index') || request()->routeIs('dashboard.videos.index') ? 'show' : '' }}" role="list" id="library" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ request()->routeIs('dashboard.images.index') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.images.index') }}" class="nav-link">
                                <span class="sidebar-icon"><i class="fas fa-image"></i></span>
                                <span class="sidebar-text">Image</span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('dashboard.videos.index') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.videos.index') }}" class="nav-link">
                                <span class="sidebar-icon"><i class="fas fa-video"></i></span>
                                <span class="sidebar-text">Video</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ request()->routeIs('dashboard.profile.settings') ? 'active' : '' }}">
                <a href="{{ route('dashboard.profile.settings') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-user"></span></span>
                    <span class="sidebar-text">Profile Settings</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
                <a href="{{ route('dashboard.users') }}" class="nav-link">
                    <span class="sidebar-icon"><i class="fas fa-users"></i></span>
                    <span class="sidebar-text">Users</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('dashboard.accessInfo') ? 'active' : '' }}">
                <a href="{{ route('dashboard.accessInfo') }}" class="nav-link">
                    <span class="sidebar-icon"><i class="fas fa-users"></i></span>
                    <span class="sidebar-text">Access Info</span>
                </a>
            </li>





            <li class="nav-item {{ request()->routeIs('ddashboard.settings') ? 'active' : '' }}">
                <a href="{{ route('dashboard.settings') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                    <span class="sidebar-text">settings</span>
                </a>
            </li>



            <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'role.php'){ echo 'active'; } ?>">
                <a href="{{ route('dashboard.roles.index') }}" class="nav-link">
                    <span class="sidebar-icon"><i class="fas fa-user-tag"></i></span>
                    <span class="sidebar-text">Role</span>
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <span class="nav-link  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">--}}
{{--                    <span>--}}
{{--                        <span class="sidebar-icon"><span class="fas fa-table"></span></span>--}}
{{--                        <span class="sidebar-text">Tables</span>--}}
{{--                    </span>--}}
{{--                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>--}}
{{--                </span>--}}
{{--                <div class="multi-level collapse  show "--}}
{{--                     role="list" id="submenu-app" aria-expanded="false">--}}
{{--                    <ul class="flex-column nav">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.bootstrap-tables')}}">--}}
{{--                                <span class="sidebar-text">Bootstrap Tables</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.data-tables')}}">--}}
{{--                                <span class="sidebar-text">Data Tables</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-pages">--}}
{{--                    <span>--}}
{{--                        <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>--}}
{{--                        <span class="sidebar-text">Page examples</span>--}}
{{--                    </span>--}}
{{--                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>--}}
{{--                </span>--}}
{{--                <div class="multi-level collapse " role="list"--}}
{{--                     id="submenu-pages" aria-expanded="false">--}}
{{--                    <ul class="flex-column nav">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.sign-in')}}">--}}
{{--                                <span class="sidebar-text">Sign In</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.sign-up')}}">--}}
{{--                                <span class="sidebar-text">Sign Up</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.forgot-password')}}">--}}
{{--                                <span class="sidebar-text">Forgot password</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.reset-password')}}">--}}
{{--                                <span class="sidebar-text">Reset password</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.lock')}}">--}}
{{--                                <span class="sidebar-text">Lock</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.404')}}">--}}
{{--                                <span class="sidebar-text">404 Not Found</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('demo.500')}}">--}}
{{--                                <span class="sidebar-text">500 Not Found</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-components">--}}
{{--                  <span>--}}
{{--                    <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>--}}
{{--                    <span class="sidebar-text">Components</span>--}}
{{--                  </span>--}}
{{--                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>--}}
{{--                </span>--}}
{{--                <div class="multi-level collapse " role="list"--}}
{{--                     id="submenu-components" aria-expanded="false">--}}
{{--                    <ul class="flex-column nav">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" target="_blank"--}}
{{--                               href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">--}}
{{--                                <span class="sidebar-text">All Components</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('demo.buttons')}}">--}}
{{--                                <span class="sidebar-text">Buttons</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('demo.notifications')}}">--}}
{{--                                <span class="sidebar-text">Notifications</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('demo.forms')}}">--}}
{{--                                <span class="sidebar-text">Forms</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('demo.modals')}}">--}}
{{--                                <span class="sidebar-text">Modals</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('demo.typography')}}">--}}
{{--                                <span class="sidebar-text">Typography</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/dashboard.php" target="_blank"--}}
{{--                   class="nav-link d-flex align-items-center">--}}
{{--                    <span class="sidebar-icon"><span class="fas fa-book"></span></span>--}}
{{--                    <span class="sidebar-text">Documentation <span--}}
{{--                            class="badge badge-md bg-secondary ms-1 text-dark">v1.3</span></span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">--}}
{{--                  <span class="sidebar-icon">--}}
{{--                    <img src="{{asset('backend/assets/img/themesberg.svg')}}" height="20" width="20" alt="Themesberg Logo">--}}
{{--                  </span>--}}
{{--                    <span class="sidebar-text">Themesberg</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </div>
</nav>


