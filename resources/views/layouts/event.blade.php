<!doctype html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.includes.htmlheader')
@show

<body class="layout-event @hasSection('page_id')event-page-@yield('page_id')@endif">
    <div class="container">
        @hasSection('htmlheader_title')
            <h2 class="title">@yield('htmlheader_title')</h2>
        @endif

        @hasSection('content_header')
            <div class="content-header">@yield('content_header')</div>
        @endif

        @yield('content')
    </div>
@section('scripts')
    @include('layouts.includes.scripts')
@show
</body>
</html>
