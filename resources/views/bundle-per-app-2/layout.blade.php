<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bundle per app - More instances</title>
    </head>
    <body>
        <header>
            <h1>Bundle per app - Multiple instances</h1>
        </header>
        <nav>
            <a href="/bundle-per-app-2/">Home</a>
            <a href="/bundle-per-app-2/about">About</a>
            <a href="/bundle-per-app-2/contact">Contact</a>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            &copy; John Doe 2018
        </footer>

        <script src="/js/bundle-per-app-2/app.js"></script>
    </body>
</html>