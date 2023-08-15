<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="index.html">
                <img src="{{asset('assets/')}}/images/logo/logo.svg" alt="Logo"/>
            </a>
        </div>
        <div class="header-top-right">
            @if (Auth::check())
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">Pencari Kos</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{asset('assets/')}}/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">{{ Auth::user()->name }}</h6>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                Wallet</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                    </ul>
                </div>
            @else
                <div class="dropdown">
                    <a href="{{route('login')}}">
                        <button class="btn btn-lg btn-outline-primary">Masuk</button>
                    </a>
                    {{-- <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2">
                            <img src="{{asset('assets/')}}/images/faces/1.jpg" alt="Avatar" />
                        </div> 
                        <div class="text">
                            <h6 class="user-dropdown-name">Masuk</h6>
                            <p class="user-dropdown-status text-sm text-muted">
                            </p>
                        </div>
                        <button class="btn btn-lg btn-outline-primary">Masuk</button>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        <li><a class="dropdown-item" href="#">Pemilk</a></li>
                        <li><a class="dropdown-item" href="">Pencari Kos</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                        <a class="dropdown-item" href="auth-login.html">Logout</a>
                        </li>
                    </ul> --}}
                </div>
            @endif
            

            <!-- Burger button responsive -->
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </div>
    </div>
</div>