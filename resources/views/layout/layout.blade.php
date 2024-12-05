@include('layout.header')

@if (!isset($noNavBar))
    @include('layout.navbar')
@endif

@yield('content')

@if (!isset($noNavBar))
    @include('layout.FooterNav')
@endif
@include('layout.footer')
