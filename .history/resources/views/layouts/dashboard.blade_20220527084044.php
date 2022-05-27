<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Developia Software Engineer">

        <title>Bing Hr </title>

        <link rel="stylesheet" href="{{ asset('/vendor/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body>
        <div class="bhr__app d-flex">

           

            <div class="bhr__content flex-fill">
                <div class="bhr__content-wrapper">
                    {{-- @include('partials._topNav') --}}

                    {{-- Content here --}}
                    @yield('content')

                    {{-- @include('partials._footer') --}}
                </div>
            </div>
        </div>

        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>
    </body>

</html>
