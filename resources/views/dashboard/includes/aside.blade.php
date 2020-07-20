<div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/user/img/books.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href={{route("index")}} class="simple-text logo-normal">
            Blog Management
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('dashboard') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/users') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/posts') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Posts</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/pages') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href={{ route('pages.index') }}>
                    <i class="material-icons"> pages</i>
                    <p>Pages</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/settings') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href={{ route('settings.edit') }}>
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>