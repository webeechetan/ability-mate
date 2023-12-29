<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('webiste') }}/assets/css/responsive.css">
    @livewireStyles

    <link rel="shortcut icon" href="{{ asset('webiste') }}/assets/images/favicon.png" type="image/x-icon">

    <title>{{ $title ?? env('APP_NAME').' - Home' }}</title>


</head>

<body>
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <livewire:website.header />

    {{ $slot }}

    <livewire:website.footer />

    @livewireScripts
    <script src="{{ asset('webiste') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('webiste') }}/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('webiste') }}/assets/js/bootstrap.min.js"></script>
</body>

</html>