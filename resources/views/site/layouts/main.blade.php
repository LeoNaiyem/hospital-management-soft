@include('site.layouts.master-header')
@include('site.layouts.header')
@yield('page')
@include('site.layouts.footer')
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>
@include('site.layouts.master-footer')