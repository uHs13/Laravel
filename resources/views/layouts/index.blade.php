<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/alert.css')}}">
    <link rel="stylesheet" href="{{asset('css/options.css')}}">
</head>

<body>
    <main>

        <div class="row">
            <div class="col1">
                <div class='menu'>
                    <ul>
                        <li><a class="{{request()->routeIs('resources.*') ? 'active' : ''}}" href="{{ route('resources.index') }}">Person List</a></li>
                        <li><a class="{{request()->routeIs('products') ? 'active' : ''}}" href="{{ route('products') }}">Product List</a></li>
                        <li><a class="{{request()->routeIs('countries') ? 'active' : ''}}" href="{{ route('countries') }}">Country List</a></li>
                        <li><a class="{{request()->routeIs('options') ? 'active' : ''}}" href="{{ route('options') }}">Options</a></li>
                    </ul>
                </div>
            </div>
            <div class='col2'>
                @yield('content')
            </div>
        </div>

        <footer>
            <div>
                <span class='date'></span> - <span class='time'></span>
            </div>
        </footer>
    </main>

    <script>
        document.querySelector('.date').innerHTML =
            new Date().toLocaleDateString('pt-br', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });

        setInterval(() => {

            document.querySelector('.time').innerHTML =
                getTime();

        }, 1000);

        function getTime() {
            return new Date().toLocaleTimeString('pt-br');
        }
    </script>

</body>

</html>