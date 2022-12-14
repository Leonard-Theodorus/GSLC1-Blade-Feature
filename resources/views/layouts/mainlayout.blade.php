<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
    @include('template.navbar')
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        @yield('body')

                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- <div class="container" mt-5>
        @yield('body')

    </div> --}}
    <div class="container">
        <div class="content1">
            @yield('content1')
        </div>
    </div>
    @include('template.footer')
</body>
</html>
