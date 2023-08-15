<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') | Beta Kos</title>

        <link rel="stylesheet" href="{{asset('assets/')}}/css/main/app.css" />
        <link
        rel="shortcut icon"
        href="{{asset('assets/')}}/images/logo/favicon.svg"
        type="image/x-icon"
        />
        <link
        rel="shortcut icon"
        href="{{asset('assets/')}}/images/logo/favicon.png"
        type="image/png"
        />

        <link rel="stylesheet" href="{{asset('assets/')}}/css/shared/iconly.css" />
    </head>

    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <header class="mb-5">
                    @include('app.layout.header')
                    <nav class="main-navbar">
                        <div class="container">
                            @include('app.layout.navbar')
                        </div>
                    </nav>
                </header>

                <div class="content-wrapper container">
                    <div class="page-heading">
                        <h3>@yield('headertitle')</h3>
                    </div>
                    <div class="page-content">
                        @yield('content')
                    </div>
                </div>

                <footer>
                    <div class="container">
                        <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>
                            Crafted with
                            <span class="text-danger"><i class="bi bi-heart"></i></span>
                            by <a href="https://saugi.me">Saugi</a>
                            </p>
                        </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @yield('script')
        <script src="{{asset('assets/')}}/js/bootstrap.js"></script>
        <script src="{{asset('assets/')}}/js/app.js"></script>
        <script src="{{asset('assets/')}}/js/pages/horizontal-layout.js"></script>

        <script src="{{asset('assets/')}}/extensions/apexcharts/apexcharts.min.js"></script>
        <script src="{{asset('assets/')}}/js/pages/dashboard.js"></script>
    </body>
</html>
