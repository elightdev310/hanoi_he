<!doctype html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.includes.htmlheader')
@show

<body class="@hasSection('page_id')simple-page-@yield('page_id')@endif">
<div class="container pb-4">
    @yield('content')
</div>

@section('scripts')
    @include('layouts.includes.scripts')
@show
</body>
</html>
