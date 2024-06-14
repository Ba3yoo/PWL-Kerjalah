<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('name')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/2875035409.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="antialiased dark:bg-gray-900 text-white" style="margin: 0">

    <login-component :passed_data="'wow'"></login-component>

        @inertia

{{--        <div id="app" data-user="{{ json_encode($userData) }}"></div>--}}
        <script>
            function shout() {
                alert(getSessionEmail());
            }

            function getSessionEmail() {
                return "{{Session::get('email')}}{{Session::get('user_id')}}";
            }
        </script>

    </body>
</html>
