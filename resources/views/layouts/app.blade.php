<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>{{$title ?? config('app.name')}}</title>
        @include('includes.style');
    </head>
    <body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('includes.navbar')

            @include('includes.sidebar')
            <!-- Page Content -->
                @yield('content')
            
            @include('includes.footer')
        </div>
    </div>
    @include('includes.script')
        
    </body>
</html>
