@include('layouts.partials.header')

<body>
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
    @include('layouts.partials.sidebar')
</div>
</div>
    <div id="main">
        <div class="page-content">
            @yield('contents')
        </div>
        @include('layouts.partials.footer')
    </div>
</body>