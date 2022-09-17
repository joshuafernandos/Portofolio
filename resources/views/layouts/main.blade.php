<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <title>Joshua Fernando</title>
</head>

<body>
    @include('partials.navbar')

    @yield('body')


    {{-- icons --}}
    <script>
        feather.replace()
    </script>
</body>

</html>
