<!doctype html>
<html lang="en">
@include('partials.header')

<body class="vertical  dark  ">
    <div class="wrapper">
        @include('partials.navbar')
        @include('partials.sidebar')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @yield('content')
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            @include('partials.modal.notif')
            @include('partials.modal.shortcut')
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('partials.footer')
</body>

</html>
