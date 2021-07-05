<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Налаштування</div>
                <a class="nav-link" href="{{route('admin.main')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                    Контент на головній сторінці
                </a>
                <div class="sb-sidenav-menu-heading">Контент</div>
                <a class="nav-link" href="{{route('posts.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Пости
                </a>
                <a class="nav-link" href="{{route('battery-system.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                    Батарейна система (картки)
                </a>
                <a class="nav-link" href="{{route('petitions.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                    Контакти
                </a>
                <a class="nav-link" href="{{route('petitions.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-mail-bulk"></i></div>
                    Петиції
                </a>

            </div>
        </div>
    </nav>
</div>
