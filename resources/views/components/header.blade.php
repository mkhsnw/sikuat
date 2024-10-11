<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sikuat</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>
<body class="">
    <header class="header top-0 shadow-md flex items-center justify-between px-8 py-02 bg-test">
        <!-- logo -->
        <h1 class="w-3/12">
            <a href="" class="font-bold hover:text-accent duration-200 text-2xl">siKuat</a>
              
        </h1>
    
        <!-- navigation -->
        <nav class="nav font-semibold text-lg ">
            <ul class="flex items-center">
                <li class="p-4 border-b-2 border-accent border-opacity-0 hover:border-opacity-100 hover:text-accent duration-200 cursor-pointer active">
                  <a href="">Article</a>
                </li>
                <li class="p-4 border-b-2 border-accent border-opacity-0 hover:border-opacity-100 hover:text-accent duration-200 cursor-pointer">
                  <a href="">Challange</a>
                </li>
                <li class="p-4 border-b-2 border-accent border-opacity-0 hover:border-opacity-100 hover:text-accent duration-200 cursor-pointer">
                  <a href="">Thread</a>
                </li>
            </ul>
        </nav>
    
        <!-- buttons --->
        <div class="w-3/12 flex justify-end">
            <a href="">
                <svg class="h-8 p-1 hover:text-accent duration-200" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
            </a>
        </div>
    </header>
</body>