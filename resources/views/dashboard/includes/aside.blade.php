<div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/user/img/books.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href={{route("dashboard.index")}} class="simple-text logo-normal">
            Library Management
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('dashboard') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/users') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('dashboard.users.index') }}">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/admins') ? 'nav-item active' : 'nav-item' }}">
                {{-- <a class="nav-link" href="{{ route('listAdmins') }}"> --}}
                    <i class="material-icons">content_paste</i>
                    <p>Posts</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/books') ? 'nav-item active' : 'nav-item' }}">
                {{-- <a class="nav-link" href={{ url('/admin/books') }}> --}}
                    <i class="material-icons"> pages</i>
                    <p>Pages</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/books') ? 'nav-item active' : 'nav-item' }}">
                {{-- <a class="nav-link" href={{ url('/admin/books') }}> --}}
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>