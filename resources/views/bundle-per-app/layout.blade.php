<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bundle per app</title>
    </head>
    <body>
        <div id="app">
            <header>
                <h1>Bundle per app</h1>
            </header>
            <nav>
                <a href="/bundle-per-app/">Home</a>
                <a href="/bundle-per-app/about">About</a>
                <a href="/bundle-per-app/contact">Contact</a>
            </nav>

            <main>
                @yield('content')
            </main>

            <footer>
                &copy; John Doe 2018
            </footer>
        </div>

        <script src="/js/bundle-per-app/app.js"></script>
    </body>
</html>