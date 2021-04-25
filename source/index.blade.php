@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 pb-5 md:py-2">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-2">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>
            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
            <p class="text-lg">
                Create a web under laravel power. It’s easy and free. <br>
                Demo is also <a href="https://octo.a2insights.com.br" target="_blank" rel="noopener">linked</a> to a Laravel project that shows how this package can be integrated.
            </p>
            <div class="flex my-10">
                <a href="docs/introduction" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Documentation</a>
                <a href="#" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About</a>
            </div>
        </div>
        <img width="500px" src="/assets/img/logo-full-without-bg.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 hidden md:block">
    </div>
    <hr class="block my-8 border lg:hidden">
    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">
            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">... <br>...</h3>
            <p>...</p>
        </div>
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">
            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">... <br>...</h3>
            <p>...</p>
        </div>
        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">
            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">... <br>...</h3>
            <p>...</p>
        </div>
    </div>
</section>
@endsection
