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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                  <a href="/article">Article</a>
                </li>
                <li class="p-4 border-b-2 border-accent border-opacity-0 hover:border-opacity-100 hover:text-accent duration-200 cursor-pointer">
                  <a href="/">Challange</a>
                </li>
                <li class="p-4 border-b-2 border-accent border-opacity-0 hover:border-opacity-100 hover:text-accent duration-200 cursor-pointer">
                  <a href="/thread">Thread</a>
                </li>
            </ul>
        </nav>
    
        <!-- buttons --->
        <div class="w-3/12 flex justify-end">
            <x-bladewind::dropmenu>
            <x-slot:trigger>
                <div class="flex space-x-2 items-center shadow px-4 rounded-md">
                    <div class="grow">
                        <x-bladewind::avatar image="/assets/...png" />
                    </div>
                    <div>
                        <x-bladewind::icon name="chevron-down"
                            class="!h-4 !w-4" />
                    </div>
                </div>
            </x-slot:trigger>
            <x-bladewind::dropmenu-item>
                Deactivate my account
            </x-bladewind::dropmenu-item>
        </x-bladewind::dropmenu>
        </div>
    </header>
</body>