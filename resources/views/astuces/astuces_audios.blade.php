@extends('layouts.base')
@section('title')
    astuces audios | bgrfacile.com
@endsection

@section('baniere')
    <div class="w-full bg-gray-200 bg-cover bg-center flex items-center justify-center h-full w-full"
         style="height:25rem; ">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center">
            des potcast de vos cours
        </h2>
    </div>
@endsection

@section('content')
    <div class="container grid grid-cols-3 gap-4">
        <div>

        </div>
    </div>

    <section class="my-10">
        <div class="container mx-auto" style="max-width: 1166px;">
            <div class="flex  w-full" style="max-width: 1200px;">
                <div class="primary tw-flex-1 w-full" style="max-width: 1100px;">
                    <div class="">
                        <div class="h-2 bg-red-light"></div>
                        <div class="flex items-center justify-center h-screen bg-red-lightest">
                            <div class="bg-white shadow-lg rounded-lg" style="width: 45rem !important;">
                                <div class="flex">
                                    <div>
{{--                                        <img class="w-full rounded hidden md:block" src="https://tailwindcss.com/img/card-top.jpg" alt="Album Pic">--}}
                                    </div>
                                    <div class="w-full p-8">
                                        <div class="flex justify-between">
                                            <div>
                                                <h3 class="text-2xl text-grey-darkest font-medium">A Sky Full of Stars</h3>
                                                <p class="text-sm text-grey mt-1">Ghost Stories</p>
                                            </div>
                                            <div class="text-red-lighter">
                                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/></svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-8">
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"/></svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z"/></svg>
                                            </div>
                                            <div class="text-white p-8 rounded-full bg-red-light shadow-lg">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"/></svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z"/></svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4a2 2 0 0 0-2 2v6H0l4 4 4-4H5V6h7l2-2H5zm10 4h-3l4-4 4 4h-3v6a2 2 0 0 1-2 2H6l2-2h7V8z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-8 py-4">
                                    <div class="flex justify-between text-sm text-grey-darker">
                                        <p>0:40</p>
                                        <p>4:20</p>
                                    </div>
                                    <div class="mt-1">
                                        <div class="h-1 bg-grey-dark rounded-full">
                                            <div class="w-1/5 h-1 bg-red-light rounded-full relative">
                                                <span class="w-4 h-4 bg-red absolute pin-r pin-b -mb-1 rounded-full shadow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson-list">
                        <div class="ais-results">
                            <div
                                class="lesson-list-item tw-flex tw-items-center tw-block tw-border tw-border-solid tw-border-grey-light lg:tw-border-none tw-py-4 tw-px-6 tw-mb-4 lg:tw-mb-0 tw-rounded-xl lg:tw-px-6 lg:tw-py-4 lg:hover:tw-bg-grey-panel tw-rounded-lg incomplete incomplete">
                                <div class="tw-w-full tw-flex tw-items-center">
                                    <div
                                        class="lesson-list-item-thumbnail tw-mr-6 tw-relative tw-mb-0 tw-flex-shrink-0">
                                        <a href="/series/laravel-6-from-scratch" class="tw-block"><img
                                                src="https://laracasts.s3.amazonaws.com/series/thumbnails/laravel-6-from-scratch.png"
                                                width="40" height="40" alt="Laravel From Scratch"></a></div>
                                    <div
                                        class="lg:tw-flex lg:tw-justify-between lg:tw-items-start lg:tw-w-full tw-flex-1">
                                        <h5 class="tw-font-semibold lg:tw-mr-6 tw-mb-1 lg:tw-mb-0 phone:tw-pb-6"
                                            style="flex: 2.5 1 0%;"><a href="/series/laravel-6-from-scratch"
                                                                       class="lesson-list-title tw-text-black"><span
                                                    class="ais-highlight"><em>Laravel</em> From Scratch</span>
                                                <span
                                                    class="tw-hidden lg:tw-block tw-text-xs tw-text-grey-dark tw-mt-1">September 9, 2019</span></a>
                                        </h5> <!---->
                                        <div
                                            class="tw-hidden lg:tw-flex tw-justify-between tw-items-center lg:tw-block">
                                            <a href="/browse/Frameworks" data-color="#E05676"
                                               class="lesson-skill-button hover:tw-text-white lg:tw-w-28 lg:tw-ml-4 tw-btn tw-text-center tw-inline-block tw-px-5 tw-py-25 tw-font-muli tw-text-2xs tw-tracking-normal tw-font-bold is-frameworks">Frameworks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="lesson-list-item tw-flex tw-items-center tw-block tw-border tw-border-solid tw-border-grey-light lg:tw-border-none tw-py-4 tw-px-6 tw-mb-4 lg:tw-mb-0 tw-rounded-xl lg:tw-px-6 lg:tw-py-4 lg:hover:tw-bg-grey-panel tw-rounded-lg incomplete incomplete">
                                <div class="tw-w-full tw-flex tw-items-center">
                                    <div
                                        class="lesson-list-item-thumbnail tw-mr-6 tw-relative tw-mb-0 tw-flex-shrink-0">
                                        <a href="/series/spam-prevention-techniques/episodes/1"
                                           class="tw-block"><img
                                                src="https://laracasts.s3.amazonaws.com/series/thumbnails/techniques-default.png"
                                                width="40" height="40" alt="Initial Setup with Laravel Breeze"></a>
                                    </div>
                                    <div
                                        class="lg:tw-flex lg:tw-justify-between lg:tw-items-start lg:tw-w-full tw-flex-1">
                                        <h5 class="tw-font-semibold lg:tw-mr-6 tw-mb-1 lg:tw-mb-0"
                                            style="flex: 2.5 1 0%;"><a
                                                href="/series/spam-prevention-techniques/episodes/1"
                                                class="lesson-list-title tw-text-black"><span
                                                    class="ais-highlight">Initial Setup with <em>Laravel</em> Breeze</span>
                                                <span
                                                    class="tw-hidden lg:tw-block tw-text-xs tw-text-grey-dark tw-mt-1">November 20, 2020</span></a>
                                        </h5>
                                        <p class="tw-pb-0 tw-text-sm tw-mb-0 lg:tw-mr-4 lg:tw-px-8 tw-tracking-tight"
                                           style="flex: 2.2 1 0%;"><a href="/series/spam-prevention-techniques"
                                                                      class="tw-text-grey-dark lg:tw-text-black lg:tw-block hover:tw-text-blue tw-text-xs">
                                                Spam Prevention Techniques
                                            </a> <span class="lg:tw-hidden">—</span> <a
                                                href="/series/spam-prevention-techniques/episodes/1"
                                                class="tw-text-grey-dark tw-text-xs lg:tw-text-2xs hover:tw-text-blue lg:tw-uppercase lg:tw-font-semibold">
                                                Episode #1
                                            </a></p>
                                        <div
                                            class="tw-hidden lg:tw-flex tw-justify-between tw-items-center lg:tw-block">
                                            <a href="/browse/Techniques" data-color="#62A2F3"
                                               class="lesson-skill-button hover:tw-text-white lg:tw-w-28 lg:tw-ml-4 tw-btn tw-text-center tw-inline-block tw-px-5 tw-py-25 tw-font-muli tw-text-2xs tw-tracking-normal tw-font-bold is-techniques">Techniques</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="lesson-list-item tw-flex tw-items-center tw-block tw-border tw-border-solid tw-border-grey-light lg:tw-border-none tw-py-4 tw-px-6 tw-mb-4 lg:tw-mb-0 tw-rounded-xl lg:tw-px-6 lg:tw-py-4 lg:hover:tw-bg-grey-panel tw-rounded-lg incomplete incomplete">
                                <div class="tw-w-full tw-flex tw-items-center">
                                    <div
                                        class="lesson-list-item-thumbnail tw-mr-6 tw-relative tw-mb-0 tw-flex-shrink-0">
                                        <a href="/series/learn-laravel-scout" class="tw-block"><img
                                                src="https://laracasts.s3.amazonaws.com/series/thumbnails/learn-laravel-scout.png"
                                                width="40" height="40" alt="Learn Laravel Scout"></a></div>
                                    <div
                                        class="lg:tw-flex lg:tw-justify-between lg:tw-items-start lg:tw-w-full tw-flex-1">
                                        <h5 class="tw-font-semibold lg:tw-mr-6 tw-mb-1 lg:tw-mb-0 phone:tw-pb-6"
                                            style="flex: 2.5 1 0%;"><a href="/series/learn-laravel-scout"
                                                                       class="lesson-list-title tw-text-black"><span
                                                    class="ais-highlight">Learn <em>Laravel</em> Scout</span>
                                                <span
                                                    class="tw-hidden lg:tw-block tw-text-xs tw-text-grey-dark tw-mt-1">November 16, 2020</span></a>
                                        </h5> <!---->
                                        <div
                                            class="tw-hidden lg:tw-flex tw-justify-between tw-items-center lg:tw-block">
                                            <a href="/browse/Tooling" data-color="#946CD1"
                                               class="lesson-skill-button hover:tw-text-white lg:tw-w-28 lg:tw-ml-4 tw-btn tw-text-center tw-inline-block tw-px-5 tw-py-25 tw-font-muli tw-text-2xs tw-tracking-normal tw-font-bold is-tooling">Tooling</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded p-4 mr-8"
                     style="min-width: 275px;">
                    <ul>
                        <li class="">
                            <div class="pt-3 pb-2 pl-3 pr-4" style="min-height: 35px">

                                <div class="">
                                    <strong>Image</strong>
                                    Desciption du contenu lu
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




@endsection
