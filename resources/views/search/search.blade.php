@extends('layouts.base')

@section('content')
    <div x-data="imageGallery()"
         x-init="fetch('https://pixabay.com/api/?key=15819227-ef2d84d1681b9442aaa9755b8&q=woman+girl+food&image_type=all&per_page=52&')
      .then(response => response.json())
      .then(response => { images = response.hits })"
         class="bg-white">

        <div class="main">
            <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

                <!-- hero -->
                <div class="hero">
                    <!-- hero headline -->
                    <div class="hero-headline flex flex-col items-center justify-center pt-24 text-center">
                        <h1 class=" font-bold text-3xl text-gray-900">Recherche sur l'ensemble du site</h1>
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
                                       placeholder="search for images" x-model="q"
                                       class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                                <div class="select">
                                    <select name="" id="" x-model="image_type"
                                            class="text-sm outline-none focus:outline-none bg-transparent">
                                        <option value="all" selected>All</option>
                                        <option value="photo">Photo</option>
                                        <option value="illustration">Illustration</option>
                                        <option value="vector">Vector</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
        <script>
            function imageGallery() {
                return {
                    images: [],
                    api_key: "15819227-ef2d84d1681b9442aaa9755b8",
                    q: "",
                    image_type: "",
                    page: "",
                    per_page: 52,
                    getImages: async function () {
                        console.log("params", this.q, this.image_type);
                        const response = await fetch(
                            `https://pixabay.com/api/?key=${this.api_key}&q=${
                                this.q
                            }&image_type=${this.image_type}&per_page=${this.per_page}&page=${this.page}`
                        );
                        const data = await response.json();
                        this.images = data.hits;
                    }
                };
            }
        </script>
    </div>

    <section class="my-10">
        <div class="container mx-auto" style="max-width: 1166px;">
            <div class="flex  w-full" style="max-width: 1200px;">
                <div class="border rounded p-4 mr-8"
                     style="min-width: 275px;">
                    <ul>
                        <li class="">
                            <div class="pt-3 pb-2 pl-3 pr-4" style="min-height: 35px">

                                <div class="">
                                    <label class="">
                                        <span class="">Cours</span>
                                        <span class="">1</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="primary tw-flex-1 w-full" style="max-width: 1100px;">
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
            </div>
        </div>
    </section>
@endsection
