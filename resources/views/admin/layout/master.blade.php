
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Beta Kos Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{asset('assets/')}}/css/main/app.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/main/app-dark.css">
    <link rel="shortcut icon" href="{{asset('assets/')}}/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/')}}/images/logo/favicon.png" type="image/png">

    @yield('links')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('admin.layout.sidebar')
        </div>
        <div id="main" class='layout-navbar'>
            @include('admin.layout.header')
            <div id="main-content">
                
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>@yield('title')</h3>
                                {{-- <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p> --}}
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Beta Kos</a></li> --}}
                                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    @yield('content')
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                                by <a href="https://ahmadsaugi.com">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/')}}/js/bootstrap.js"></script>
    <script src="{{asset('assets/')}}/js/app.js"></script>
    {{-- @include('sweetalert::alert') --}}

    @yield('scripts')
    
</body>

</html>
