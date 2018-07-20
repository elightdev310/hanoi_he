<!doctype html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.includes.htmlheader')
@show

<body class="layout-event @hasSection('page_id')event-page-@yield('page_id')@endif">
    <div class="container pb-4">
        @hasSection('content_header')
            <div class="content-header">@yield('content_header')</div>
        @endif
        @hasSection('title')
            <h2 class="title color-red">@yield('title')</h2>
        @endif

        @yield('content')
    </div>
    <div class="footer container">
        @include('layouts.includes.footer')
    </div>
@section('scripts')
    @include('layouts.includes.scripts')
@show
</body>
</html>
