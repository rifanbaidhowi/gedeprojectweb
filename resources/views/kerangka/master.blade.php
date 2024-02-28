<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gede Distro Sablon</title>
    @include('include.style')
</head>
<body>
    <div id="app">
        @include('include.header')
    <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<div class="page-heading">
</div>
@yield('content')
        @include('include.footer')
        </div>
    </div>
    @include('include.script')
</body>
</html>

