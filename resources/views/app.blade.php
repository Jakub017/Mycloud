<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <script
            src="https://kit.fontawesome.com/77b0ecbb1c.js"
            crossorigin="anonymous"
        ></script> -->
        <title inertia>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @routes @vite(['resources/js/app.js',
        "resources/js/Pages/{$page['component']}.vue"]) @inertiaHead

        <script
            src="https://kit.fontawesome.com/c68b62b983.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>