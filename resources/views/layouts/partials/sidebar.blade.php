<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <i class="bi bi-inboxes"></i><a href="{{ route('about') }}"><span> SI Arsip</span></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('arsip.*') ? 'active' : '' }}">
                    <a href="{{ route('arsip.index') }}" class='sidebar-link'>
                        <i class="bi bi-postage-fill"></i>
                        <span>Arsip</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                    <a href="{{ route('kategori.index') }}" class='sidebar-link'>
                        <i class="bi bi-bookmarks-fill"></i>
                        <span>Kategori Surat</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('about*') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class='sidebar-link'>
                        <i class="bi bi-file-person-fill"></i>
                        <span>About</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>