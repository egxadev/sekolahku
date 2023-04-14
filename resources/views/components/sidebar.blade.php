<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">MAIN MENU</li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('posts.index')
                <li class="{{ Request::is('admin/post') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.post.index') }}"><i class="fas fa-book-open"></i>
                        <span>Berita</span></a></li>
            @endcan

            @can('tags.index')
                <li class="{{ Request::is('admin/tag') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.tag.index') }}"><i class="fas fa-tags"></i> <span>Tags</span></a>
                </li>
            @endcan

            @can('categories.index')
                <li class="{{ Request::is('admin/category') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.category.index') }}"><i class="fas fa-folder"></i>
                        <span>Kategori</span></a></li>
            @endcan

            @can('events.index')
                <li class="{{ Request::is('admin/event') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.event.index') }}"><i class="fas fa-bell"></i>
                        <span>Agenda</span></a></li>
            @endcan

            @if (auth()->user()->can('photos.index') ||
                    auth()->user()->can('videos.index'))
                <li class="menu-header">GALERI</li>
            @endif

            @can('photos.index')
                <li class="{{ Request::is('admin/photo') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.photo.index') }}"><i class="fas fa-image"></i>
                        <span>Foto</span></a></li>
            @endcan

            @can('videos.index')
                <li class="{{ Request::is('admin/video') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.video.index') }}"><i class="fas fa-video"></i>
                        <span>Video</span></a></li>
            @endcan

            @if (auth()->user()->can('roles.index') ||
                    auth()->user()->can('permission.index') ||
                    auth()->user()->can('users.index'))
                <li class="menu-header">PENGATURAN</li>
            @endif

            @can('sliders.index')
                <li class="{{ Request::is('admin/slider') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.slider.index') }}"><i class="fas fa-laptop"></i>
                        <span>Sliders</span></a></li>
            @endcan

            <li
                class="dropdown {{ Request::is('admin/role') || Request::is('admin/permission') || Request::is('admin/user') ? 'active' : '' }}">
                @if (auth()->user()->can('roles.index') ||
                        auth()->user()->can('permission.index') ||
                        auth()->user()->can('users.index'))
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users
                            Management</span></a>
                @endif

                <ul class="dropdown-menu">
                    @can('roles.index')
                        <li class="{{ Request::is('admin/role') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin.role.index') }}"><i class="fas fa-unlock"></i> Roles</a>
                        </li>
                    @endcan

                    @can('permissions.index')
                        <li class="{{ Request::is('admin/permission') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin.permission.index') }}"><i class="fas fa-key"></i>
                                Permissions</a></li>
                    @endcan

                    @can('users.index')
                        <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> Users</a>
                        </li>
                    @endcan
                </ul>
            </li>
        </ul>
    </aside>
</div>
