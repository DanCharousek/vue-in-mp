<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bundle per page</title>
    </head>
    <body>
        <header>
            <h1>Bundle per page</h1>
        </header>
        
        <nav>
            <a href="/bundle-per-page/">Home</a>
            <a href="/bundle-per-page/about">About</a>
            <a href="/bundle-per-page/contact">Contact</a>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            &copy; John Doe 2018
        </footer>

        @stack('js')
    </body>
</html>