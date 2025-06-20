@include('layouts.master-header')
<div class="wrapper">
    @include('layouts.left-sidebar')
    <div class="main-panel">
        @include('layouts.header')
        <div class="container">
            @yield('page-content')
        </div>
        @include('layouts.footer')
    </div>
</div>
@include('layouts.master-footer')