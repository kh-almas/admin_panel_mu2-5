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
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link  collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#Task">
                  <span>
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="sidebar-text">Task</span>
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse {{ request()->routeIs('dashboard.category.index') || request()->routeIs('dashboard.tasks.index') || request()->routeIs('dashboard.tasks.create') || request()->routeIs('dashboard.tasks.edit') ? 'show' : '' }}" role="list" id="Task" aria-expanded="false">
                    <ul class="flex-column nav">
                        @can('task_category')
                            <li class="nav-item {{ request()->routeIs('dashboard.category.index') ? 'active' : '' }}">
                                <a href="{{ route('dashboard.category.index') }}" class="nav-link">
                                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                    <span class="sidebar-text">Category</span>
                                </a>
                            </li>
                        @endcan
                        @can('task')
                            <li class="nav-item {{ request()->routeIs('dashboard.tasks.index') || request()->routeIs('dashboard.tasks.create') || request()->routeIs('dashboard.tasks.edit') ? 'active' : '' }}">
                                <a href="{{ route('dashboard.tasks.index') }}" class="nav-link">
                                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                    <span class="sidebar-text">Task List</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#library">
                  <span>
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="sidebar-text">Library</span>
                  </span>
                  <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse {{ request()->routeIs('dashboard.images.index') || request()->routeIs('dashboard.videos.index') ? 'show' : '' }}" role="list" id="library" aria-expanded="false">
                    <ul class="flex-column nav">
                        @can('image_gallery')
                            <li class="nav-item {{ request()->routeIs('dashboard.images.index') ? 'active' : '' }}">
                                <a href="{{ route('dashboard.images.index') }}" class="nav-link">
                                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="sidebar-text">Image</span>
                                </a>
                            </li>
                        @endcan
                        @can('video_gallery')
                            <li class="nav-item {{ request()->routeIs('dashboard.videos.index') ? 'active' : '' }}">
                                <a href="{{ route('dashboard.videos.index') }}" class="nav-link">
                                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    <span class="sidebar-text">Video</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @can('web_settings')
                <li class="nav-item {{ request()->routeIs('dashboard.profile.settings') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.profile.settings') }}" class="nav-link">
                        <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="sidebar-text">Profile Settings</span>
                    </a>
                </li>
            @endcan

            @can('user_access')
            <li class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
                <a href="{{ route('dashboard.users') }}" class="nav-link">
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <span class="sidebar-text">Users</span>
                </a>
            </li>
            @endcan

            @can('view_access_information')
                <li class="nav-item {{ request()->routeIs('dashboard.accessInfo') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.accessInfo') }}" class="nav-link">
                        <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"></path></svg>
                        <span class="sidebar-text">Access Info</span>
                    </a>
                </li>
            @endcan

            @can('web_settings')
                <li class="nav-item {{ request()->routeIs('ddashboard.settings') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.settings') }}" class="nav-link">
                        <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="sidebar-text">settings</span>
                    </a>
                </li>
            @endcan

            <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'role.php'){ echo 'active'; } ?>">
                <a href="{{ route('dashboard.roles.index') }}" class="nav-link">
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
                    <span class="sidebar-text">Role</span>
                </a>
            </li>



            <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'role.php'){ echo 'active'; } ?>">
                <a href="{{ route('api-tokens.index') }}" class="nav-link">
                    <svg style="width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                    <span class="sidebar-text">Api Token</span>
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


