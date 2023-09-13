<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">


<!-- Navigation starts -->
<!-- Mobile -->
<div id="mobile-nav" class="w-full h-full xl:hidden absolute z-40">
    <div class="bg-gray-800 opacity-50 inset-0 fixed w-full h-full" onclick="sidebarHandler(false)"></div>
    <div
        class="w-64 z-20 absolute left-0 z-40 top-0 bg-gray-800 shadow flex-col justify-between transition duration-150 ease-in-out h-full">
        <div class="flex flex-col justify-between h-full">
            <div class="px-6 pt-4 overflow-y-auto">
                <div class="flex items-center justify-between">
                    <div aria-label="Home" role="img" class="flex items-center">
                        <x-application-logo />
                        <p class="text-bold md:text2xl text-base pl-3 text-white">Brand</p>
                    </div>
                    <button id="cross"
                            class="hidden text-white focus:outline-none focus:ring-2 focus:ring-gray-300 rounded"
                            onclick="sidebarHandler(false)">
                        <img
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg1.svg"
                            alt="cross">
                    </button>
                </div>
                <ul class="f-m-m">
                    <li class="text-white pt-8">
                        <div class="flex items-center">
                            <div class="md:w-6 md:h-6 w-5 h-5">
                                <img
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg2.svg"
                                    alt="Dashboard">
                            </div>
                            <a href="javascript:void(0)"
                               class="text-indigo-400 ml-3 text-lg focus:ring-2 focus:ring-white focus:outline-none">Dashboard</a>
                        </div>
                    </li>
                    <li class="text-white pt-8">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <div class="md:w-6 md:h-6 w-5 h-5">
                                    <img
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg3.svg"
                                        alt="products">
                                </div>

                                <a href="javascript:void(0)"
                                   class="text-white ml-3 text-lg focus:ring-2 focus:ring-white focus:outline-none">Products</a>
                            </div>
                            <button id="chevronup" onclick="listHandler(true)"
                                    class="ml-4 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                <img
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg4.svg"
                                    alt="products">
                            </button>
                            <button id="chevrondown" onclick="listHandler(false)"
                                    class="hidden ml-4 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                <img class="transform rotate-180"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg4.svg"
                                     alt="products">
                            </button>
                        </div>
                        <div id="list" class="hidden">
                            <ul class="my-3">
                                <li class="text-sm text-indigo-400 py-2 px-6"><a href="javascript:void(0)"> Best
                                        Sellers</a></li>
                                <li class="text-sm text-white hover:text-indigo-400 py-2 px-6"><a
                                        href="javascript:void(0)"> Out of Stock</a></li>
                                <li class="text-sm text-white hover:text-indigo-400 py-2 px-6"><a
                                        href="javascript:void(0)"> New Products</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-white pt-8">
                        <div class="flex items-center">
                            <div class="md:w-6 md:h-6 w-5 h-5">
                                <img
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg5.svg"
                                    alt="Performance">
                            </div>
                            <a href="javascript:void(0)"
                               class="text-white ml-3 text-lg focus:ring-2 focus:ring-white focus:outline-none">Performance</a>
                        </div>
                    </li>
                    <li class="text-white pt-8 mb-1">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <div class="md:w-6 md:h-6 w-5 h-5">
                                    <img
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg6.svg"
                                        alt="deliverables">
                                </div>
                                <a href="javascript:void(0)"
                                   class="text-white ml-3 text-lg focus:ring-2 focus:ring-white focus:outline-none">Deliverables</a>
                            </div>
                            <div>
                                <button id="chevronup2" onclick="listHandler2(true)"
                                        class="ml-4 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                    <img
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg4.svg"
                                        alt="deliverables">
                                </button>
                                <button id="chevrondown2" onclick="listHandler2(false)"
                                        class="hidden ml-4 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                    <img class="transform rotate-180"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg4.svg"
                                         alt="deliverables">
                                </button>
                            </div>
                        </div>
                        <div id="list2" class="hidden">
                            <ul class="my-3">
                                <li class="text-sm text-indigo-400 py-2 px-6"><a href="javascript:void(0)"> Best
                                        Sellers</a></li>
                                <li class="text-sm text-white hover:text-indigo-400 py-2 px-6"><a
                                        href="javascript:void(0)"> Out of Stock</a></li>
                                <li class="text-sm text-white hover:text-indigo-400 py-2 px-6"><a
                                        href="javascript:void(0)"> New Products</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-full">
                <div class="flex justify-center mb-4 w-full px-6">
                    <div class="relative w-full">
                        <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                            <img
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg7.svg"
                                alt="search">
                        </div>
                        <input
                            class="bg-gray-700 focus:outline-none rounded w-full text-sm text-gray-500 bg-gray-100 pl-10 py-2"
                            type="text" placeholder="Search"/>
                    </div>
                </div>
                <div class="border-t border-gray-700">
                    <div class="w-full flex items-center justify-between px-6 pt-1">
                        <div class="flex items-center">
                            <img alt="display avatar" role="img"
                                 src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png"
                                 class="w-8 h-8 rounded-md"/>
                            <p class="text-white text-base leading-4 ml-2">Jane Doe</p>
                        </div>
                        <ul class="flex">
                            <li class="cursor-pointer text-white pt-5 pb-3">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg8.svg"
                                        alt="message">
                                </a>
                            </li>
                            <li class="cursor-pointer text-white pt-5 pb-3 pl-3">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg9.svg"
                                        alt="notifications">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<nav class="w-full bg-gray-800 shadow">
    <div class="container px-6 h-16 flex justify-between items-center xl:items-stretch mx-auto">
        <div class="flex items-center">
            <div aria-label="Home" role="img" class="xl:mr-10 flex items-center">
                <x-application-logo />

                <h3 class="text-base text-white font-bold tracking-normal leading-tight ml-3 hidden xl:block">
                    BRAND
                </h3>
            </div>
            <ul class="hidden xl:flex items-center h-full">
                <li class="hover:text-indigo-500 cursor-pointer h-full flex items-center text-sm text-indigo-400 tracking-normal">

                    <a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-white">
                        Dashboard
                    </a>
                </li>
                <li class="hover:text-indigo-400 cursor-pointer h-full flex items-center text-sm text-white mx-10 tracking-normal">

                    <a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-white">
                        Item 2
                    </a>
                </li>
                <li class="hover:text-indigo-400 cursor-pointer h-full flex items-center text-sm text-white mr-10 tracking-normal">

                    <a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-white">
                        Item 3
                    </a>
                </li>
                <li class="hover:text-indigo-400 cursor-pointer h-full flex items-center text-sm text-white tracking-normal">

                    <a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-white">
                        Item 4
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full xl:w-auto h-full flex items-center justify-end">
            <div class="h-full flex">
                <div
                    class="px-5 h-full hidden xl:flex items-center justify-center xl:border-l border-gray-700 text-gray-400">
                    <input id="search" type="text"
                           class="bg-transparent focus:outline-none text-xs transition duration-150 ease-in-out"
                           placeholder="Type something..."/>
                    <button aria-label="search" role="button" onclick="searchHandler(this)"
                            class="pl-4 focus:outline-none focus:ring-2 focus:ring-white rounded">
                        Search
                    </button>
                </div>

                <div aria-haspopup="true" class="cursor-pointer hidden xl:flex items-center pl-8 relative"
                     onclick="dropdownHandler(this)">

                    @if (Route::has('login'))
                        <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="visible xl:hidden flex items-center">
            <div>
                <button id="menu" class="text-white focus:outline-none focus:ring-2 focus:ring-gray-300 rounded"
                        onclick="sidebarHandler(true)">
                    <img class=""
                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/dark_with_white_page_title_and_grey_bg-svg12.svg"
                         alt="toggler">
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- Navigation ends -->
<!-- Page title starts -->

@if (isset($header))
    <header
        class=" my-6 lg:my-8 container px-6 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between">
        {{ $header }}
    </header>
@endif
<!-- Page title ends -->
<div class="h-screen w-full h-full py-12 bg-gray-200">
    <!-- Remove class [ h-64 ] when adding a card block -->
    <div class="container mx-auto px-6 ">
        <div class="mb-12 p-6 bg-white text-black shadow-md overflow-hidden sm:rounded-lg flex flex-col">
            {{ $slot }}
        </div>
    </div>
</div>

<footer class="w-full bg-indigo-700 pt-14 xl:pt-14 px-4">
        <div class="container mx-auto py-20">
            <div class="lg:flex items-center justify-between">
                <div tabindex="0" role="banner" aria-label="BRAND" class="focus:outline-none lg:w-1/4 text-white text-3xl">
                    BRAND
                </div>
                <div class="lg:w-3/4 lg:flex items-center justify-end">
                    <ul class="lg:flex f-m-m justify-end">
                        <li class="text-2xl font-bold text-white pr-8 lg:mb-0 mb-6 lg:mt-0 mt-6 focus:outline-none focus:underline"><a href="{{ route('static.home') }}" class="focus:outline-none focus:ring-2 focus:ring-white">Home</a></li>

                        <li class="text-2xl font-medium text-white pr-8 lg:mb-0 mb-6 focus:outline-none focus:underline"><a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-white">Another Link</a></li>

                        <li class="text-2xl font-medium lg:mb-0 mb-6 text-white pr-8 focus:outline-none focus:underline"><a href="{{ route('static.privacy') }}" class="focus:outline-none focus:ring-2 focus:ring-white">Privacy</a></li>

                        <li class="text-2xl font-medium lg:mb-0 mb-6 text-white pr-8 focus:outline-none focus:underline"><a href="{{ route('static.about') }}" class="focus:outline-none focus:ring-2 focus:ring-white">About Us</a></li>

                        <li class="text-2xl font-medium lg:mb-0 mb-6 text-white focus:outline-none focus:underline"><a href="{{ route('static.contact') }}" class="focus:outline-none focus:ring-2 focus:ring-white">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>

</body>
</html>



