@extends('layouts.base')
@section('title')
    recherche
@endsection

@section('content')
    <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
        <nav class="bg-gray-200 p-3 rounded font-sans w-full m-4">
            <ol class="list-reset flex text-grey-dark">
                @if(Breadcrumbs::has())
                    @foreach (Breadcrumbs::current() as $crumbs)
                        @if ($crumbs->url() && !$loop->last)
                            <li class="breadcrumb-item text-blue font-bold">
                                <a href="{{ $crumbs->url() }}">
                                    {{ $crumbs->title() }}
                                </a>
                            </li>
                            <li><span class="mx-2">/</span></li>
                        @else
                            <li class="breadcrumb-item active">
                                {{ $crumbs->title() }}
                            </li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>
        <div class="bg-white">
            <div class="main">
                <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                    <!-- hero -->
                    <div class="hero">
                        <!-- hero headline -->
                        <div class="hero-headline flex flex-col items-center justify-center pt-8 text-center">
                            {{--                            <h1 class=" font-bold text-3xl text-gray-900">Recherche sur l'ensemble du site</h1>--}}
                        </div>

                        <!-- image search box -->
                        <div class="box pt-6">
                            <div class="box-wrapper">
                                <div
                                        class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-gray-200">
                                    <button @click="getImages()" class="outline-none focus:outline-none">
                                        <svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                    <input type="search" name="" id="" @keydown.enter="getImages()"
                                           placeholder="recherche sur le site" x-model="q"
                                           class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                                    <div class="select">
                                        <select name="" id="" x-model="image_type"
                                                class="text-sm outline-none focus:outline-none bg-transparent">
                                            <option value="all" selected>Tout</option>
                                            <option value="photo">Cours</option>
                                            <option value="illustration">Exercice</option>
                                            <option value="illustration">Corriger</option>
                                            <option value="vector">Astuces</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
