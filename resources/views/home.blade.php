<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            @include('partials._sidebar')
        </div>
        <div class="main-panel">
            @include('partials._nav')
            <div class="content">
                <div class="container-fluid">
                    {{-- @include('partials._message') --}}
                    @yield('content')
                </div>
            </div> 
            @include('partials._footer')
            {{ Auth::check() ? "Te has Logeado Correctamente" : "Has Salido" }}       
        </div>  
    </div>         
</body>
@include('partials._javascript')
@yield('scripts')
</html>
