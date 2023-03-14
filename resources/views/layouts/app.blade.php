<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('common.partials.meta')

    @include('common.partials.styles')

</head>
<body>
    <div id="app">

        @include('common.partials.navbar')

        @include('common.main')

    </div>
</body>
    @include('common.partials.scripts')

</html>
