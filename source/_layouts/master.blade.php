<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:site_name" content="{{ $page->siteName }}"/>
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:image" content="/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:image:alt" content="{{ $page->siteName }}">
    <meta name="twitter:card" content="summary_large_image">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <meta name="generator" content="tighten_jigsaw_doc">
    @endif

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : ' | ' . $page->siteDescription }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

    @stack('meta')

    @if ($page->production)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163421121-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-163421121-1');
        </script>

    @endif

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css"/>
    @endif
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
<header class="flex items-center shadow bg-white border-b h-16 mb-4 py-6" role="banner">
    <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                <h1 class="text-6xl text-gray-600 font-cursive pt-10 pr-4">
                    <span class="text-5xl">{{ $page->emojiName }}</span> {{ $page->siteName }}
                </h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center text-right md:pl-10">
            @if ($page->docsearchApiKey && $page->docsearchIndexName)
                @include('_nav.search-input')
            @endif
        </div>

        <div class="hidden lg:flex lg:items-center lg:justify-between xl:w-1/4 px-12">
            <div class="flex justify-start items-center">
                <a class="block flex items-center text-gray-500 hover:text-gray-700 mr-5"
                   href="https://github.com/phonyland/phony">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>GitHub</title>
                        <path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/>
                    </svg>
                </a>
                <a class="block flex items-center text-gray-500 hover:text-gray-700 mr-5" href="https://twitter.com/phonyphp">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Twitter</title>
                        <path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    </div>

    @yield('nav-toggle')
</header>

<main role="main" class="w-full flex-auto">
    @yield('body')
</main>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

@stack('scripts')

<footer class="bg-white text-center text-sm mt-12 py-4 text-gray-600" role="contentinfo">
    <ul class="flex flex-col md:flex-row justify-center list-none">
        <li class="md:mr-2">
            &copy; <a href="{{ $page->baseUrl }}" class="tracking-wider" title="Phony PHP Website">phony.land</a> {{ date('Y') }}.
        </li>

        <li>
            Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
            and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
        </li>
    </ul>
</footer>
</body>
</html>
