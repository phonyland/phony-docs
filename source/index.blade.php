@extends('_layouts.master')

@section('body')
    <section class="container max-w-screen-xl items-center mx-auto px-6 py-10">
        <div class="text-center">
            <h1 id="intro-phony" class="font-cursive text-8xl text-gray-600">
                <span class="opacity-75 text-emoji">{{ $page->emojiName }}</span>
                <span class="inline sm:hidden md:hidden lg:hidden xl:hidden"><br/></span>
                {{ $page->siteName }}
            </h1>

            <h2 id="intro-phony-description" class="font-light text-center mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-2xl text-center">Generate massive amount of realistic fake data in multiple locales.</p>
        </div>

        <div class="flex my-16 justify-center">
            <a href="/docs/fake"
               title="{{ $page->siteName }} fakes"
               class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded text-sm md:text-base lg:text-lg xl:text-lg mr-4 py-3 px-8"
            >
                Get Started
            </a>

            <a href="https://github.com/phony-php/phony"
               title="Phony PHP Source Code"
               class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded text-sm md:text-base lg:text-lg xl:text-lg py-3 px-8"
            >
                Source Code
            </a>
        </div>

        @include('_partials._homepage_example')
    </section>
@endsection