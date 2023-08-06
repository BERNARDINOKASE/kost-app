<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="index.html">
                <img src="{{asset('assets/')}}/images/logo/logo.svg" alt="Logo"/>
            </a>
        </div>
        <div class="header-top-right">
            <div class="dropdown">
                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend " data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <div class="avatar avatar-md2">
                        <img src="{{asset('assets/')}}/images/faces/1.jpg" alt="Avatar" />
                    </div> 
                    <div class="text">
                        <h6 class="user-dropdown-name">Masuk</h6>
                        <p class="user-dropdown-status text-sm text-muted">
                        </p>
                    </div>--}}
                    <button class="btn btn-lg btn-outline-primary">Masuk</button>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                    <li><a class="dropdown-item" href="#">Pemilk</a></li>
                    <li><a class="dropdown-item" href="{{route('pencari.login')}}">Pencari Kos</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                    {{-- <a class="dropdown-item" href="auth-login.html">Logout</a> --}}
                    </li>
                </ul>
            </div>

            <!-- Burger button responsive -->
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </div>
    </div>
</div>