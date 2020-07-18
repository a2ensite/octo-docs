@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">Octo Docs</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Nossa filosofia é o foco na extensão dos recursos do framework, provendo interfaces para agilizar a implementação de novos recursos.</p>

            <div class="flex my-10">
                <a href="docs/core/iniciando" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Iniciar</a>

                <a href="#" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Sobre o OCTO</a>
            </div>
        </div>

        <img width="500em" src="/assets/img/logo-full-without-bg.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Suporte completo para <br>temas</h3>

            <p>Temos uma api fluente para você construir sua interface de usuário ultilizado o blade e o desing de componentes do laravel.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Artisan  <br>Wrapper</h3>

            <p>Extendemos algumas funcionalidades do artisan para prover uma infinidade de comandos.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Abstrações de <br>camadas</h3>

            <p>Não duplique o mesmo código em vários projetos, utilize abstrações de camadas para compor o comportamento.</p>
        </div>
    </div>
</section>
@endsection
