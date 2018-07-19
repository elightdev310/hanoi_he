<!doctype html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.includes.htmlheader')
@show

<body class="layout-modal @hasSection('page_id')modal-page-@yield('page_id')@endif">
<div class="container">
    <div class="modal-wrapper">
        @include('layouts.includes.status_message')
        @yield('content')
    </div>
</div>
@section('scripts')
    @include('layouts.includes.scripts')
    <script>
        $(function() {
            $(window).on("resize", function (e) {
                HeApp.UI.fitModalWindow();
            });
        });
    </script>
@show
</body>
</html>
