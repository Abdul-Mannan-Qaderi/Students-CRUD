<!DOCTYPE html>
<html lang="en">
    <head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<title>
    @hasSection  ('title')
        Students | @yield('title')
    @else
        {{ config('app.name') }}
    @endif

</title>
    </head>

<body class="bg-dark">
    <div class="container">
        <div class="app">
            <main class="py-4">
                <nav class="mb-3 navbar navbar-expand-lg bg-dark text-info border rounded">
                    <div class="container-fluid">
                        <a class="navbar-brand text-light" href="{{ route('students.index') }}">{{ config('app.name') }}</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>

                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
