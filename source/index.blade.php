@extends('_layouts.master')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <div class="flex flex-col-reverse lg:flex-row">
            <div class="">
                <div class="text-center lg:text-left xl:text-left">
                    <h1 id="intro-phony">{{ $page->siteName }}</h1>

                    <h2 id="intro-phony-description" class="font-light mt-4">{{ $page->siteDescription }}</h2>

                    <p class="text-2xl">Generate massive amount of realistic fake data in multiple locales.</p>
                </div>

                <div class="flex my-16 justify-center sm:justify-center md:justify-center lg:justify-start xl:justify-start">
                    <a href="/docs/fake"
                       title="{{ $page->siteName }} fakes"
                       class="bg-blue-500 hover:bg-blue-600 font-normal text-lg text-white hover:text-white rounded mr-4 py-2 px-6"
                    >
                        Get Started
                    </a>

                    <a href="https://github.com/phony-php/phony"
                       title="Phony PHP Source Code"
                       class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal text-lg hover:text-white rounded py-2 px-6"
                    >
                        Source Code
                    </a>
                </div>
            </div>

            <img
                    src="/assets/img/logo-large.svg"
                    alt="{{ $page->siteName }} large logo"
                    class="mx-auto mb-2 sm:w-1/2 md:mb-0 md:w-1/3 lg:-mt-24 lg:m-0 lg:w-1/2 xl:-mt-24 xl:m-0 xl:w-1/2"
            >
        </div>

        @include('_partials._homepage_example')

    </section>
@endsection

@push('scripts')
    <script>
        hljs.initHighlightingOnLoad();
        kadın
    </script>
@endpush
