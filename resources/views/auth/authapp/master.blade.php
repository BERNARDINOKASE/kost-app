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
                <div class="section">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{{asset('assets/')}}/js/bootstrap.js"></script>
        <script src="{{asset('assets/')}}/js/app.js"></script>
        <script src="{{asset('assets/')}}/js/pages/horizontal-layout.js"></script>

        <script src="{{asset('assets/')}}/extensions/apexcharts/apexcharts.min.js"></script>
        <script src="{{asset('assets/')}}/js/pages/dashboard.js"></script>
    </body>
</html>
