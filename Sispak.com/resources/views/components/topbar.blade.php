<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    @auth
        @if(Auth::user()->hasRole('Admin'))
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        @endif
    @endauth

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            @guest
            <!-- Tombol login jika pengguna belum login -->
            <a class="nav-link" href="{{ route('login') }}">
                <i class="fa fa-sign-in-alt"></i>
                Login
            </a>
            @endguest
        </li>
        <div class="d-none d-sm-block"></div>
        
        @auth
        @if(Auth::user()->hasRole('Admin'))
        <!-- Menampilkan avatar profil dan nama pengguna hanya jika admin sudah login -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('dist/img/boy.png') }}" alt="" style="max-width: 40px;">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ubah Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
        @endif
        @endauth
    </ul>
</nav>
