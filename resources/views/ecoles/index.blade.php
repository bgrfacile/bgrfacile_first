@extends('layouts.front')

@section('baniere')
    <div class="container">
        <div class="text-center px-3 lg:px-0">
            <h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight">
                L'espace école
            </h1>
            <p class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8">
                acceder à un espace reserver aux écoles
            </p>

            <button class="mx-auto lg:mx-0 hover:underline font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48 bg-black text-white">
                cree votre école
            </button>
            <a href="#" class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8">
                Acceder à votre école
            </a>
        </div>

        <div class="flex items-center w-full mx-auto content-end">
            <div class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl"></div>
        </div>
    </div>
@endsection

@section('content')

    <section class="bg-gray-100 border-b py-8">
        <div class="grid grid-cols-2 lg:grid-cols-3"><div class="text-center mb-10 md:mb-20 lg:border-l-0 lg:border-r lg:border-baby-blue"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(64, 184, 132, 0.2);"><img style="width: 72px;" class="lazyLoad isLoaded" src="/images/sales/tech/vue.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    Vue.js
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    Access a huge catalog of Vue.js courses to help you with anything from setting up your first Vue application to developing advanced user interfaces.
                </div></div><div class="text-center mb-10 md:mb-20 lg:border-l-0 md:border-l md:border-baby-blue lg:border-r lg:border-baby-blue"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(64, 184, 132, 0.2);"><img style="width: 73px;" class="lazyLoad isLoaded" src="/images/sales/tech/nuxt.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    Nuxt.js
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    Starting with the Fundamentals of the framework we guide you from scaffolding to deploying your Nuxt.js applications.
                </div></div><div class="text-center mb-10 md:mb-20 lg:border-l-0"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(93, 214, 191, 0.2);"><img style="width: 58px;" class="lazyLoad isLoaded" src="/images/sales/tech/vuex.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    Vuex
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    Vuex is a state management pattern + library for Vue.js applications. Learn all the Vuex best practices with Vue School.
                </div></div><div class="text-center mb-10 md:mb-20 lg:border-l-0 md:border-l md:border-baby-blue lg:border-r lg:border-baby-blue"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(199, 59, 0, 0.2);"><img style="width: 55px;" class="lazyLoad isLoaded" src="/images/sales/tech/jest.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    Testing &amp; Jest
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    Ready to improve your daily life by writing better tests? We’ll teach you all the testing jargon and techniques you need to know to test your Vue apps with confidence.
                </div></div><div class="text-center mb-10 md:mb-20 lg:border-l-0 lg:border-r lg:border-baby-blue"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(231, 44, 172, 0.2);"><img style="width: 55px;" class="lazyLoad isLoaded" src="/images/sales/tech/graphql.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    GraphQL
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    GraphQL is a query language for APIs and a runtime to execute said queries. At Vue School you will learn GraphQL and how to use it with Vue.js using Vue Apollo.
                </div></div><div class="text-center mb-10 md:mb-20 lg:border-l-0 md:border-l md:border-baby-blue"><div class="w-24 h-24 inline-flex items-center justify-center rounded mb-5" style="background-color: rgba(138, 201, 64, 0.2);"><img style="width: 55px;" class="lazyLoad isLoaded" src="/images/sales/tech/js.png"></div> <div class="mb-4 text-2xl font-bold font-circular">
                    JavaScript
                </div> <div class="px-5 text-sm leading-relaxed text-iron-dark md:text-base">
                    Javascript is a prerequisite in order to start learning Vue.js. We will teach you modern JavaScript, starting with ES6.
                </div></div></div>
    </section>

    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Pricing
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Free
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            £0 <span class="text-base">for one user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 gradient shadow hover:shadow-lg z-10">
                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden">
                        <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                        <ul class="w-full text-center text-base font-bold">
                            <li class="py-4">Thing</li>
                            <li class="py-4">Thing</li>
                            <li class="py-4">Thing</li>
                            <li class="py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden p-6">
                        <div class="w-full pt-6 text-4xl font-bold text-center">
                            £x.99 <span class="text-base">/ per user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Pro
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            £x.99 <span class="text-base">/ per user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gradient w-full mx-auto text-center pt-6 pb-12">
        <h3 class="my-4 text-3xl font-extrabold">
            Acceder à votre école
        </h3>

        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
            Action!
        </button>
    </section>

    <section class="container" id="creeSonEcole">
        <h3>Parmi les professeurs sur le site</h3>
        <div class="grid">
            <div>
                i
            </div>

            <div class="landing-v4-ads-wrapper"><div class="landing-v4-ads-pic"><div class="img" data-src="/images/annonces/professeur-home-prof-francais-litterature-lycee-college-donne-cours-particuliers-preparation-bac-francais-brevet.jpg" style="background-image: url(&quot;/images/annonces/professeur-home-prof-francais-litterature-lycee-college-donne-cours-particuliers-preparation-bac-francais-brevet.jpg&quot;);"></div><div class="landing-v4-ads-pic-mask"></div><div class="landing-v4-ads-pic-text-container"><p class="landing-v4-ads-pic-firstname">Julie</p><div class="landing-v4-ads-pic-location">
                            <span class="landing-v4-ads-pic-icon geolocation"></span>
                            <span class="landing-v4-ads-pic-text">Six-Fours-les-Plages</span></div></div></div><div class="landing-v4-ads-badge"><span class="landing-v4-ads-badge-chips landing-v4-ads-badge-pricing"><span>75€/h</span> <span class="dot">·</span> <span class="landing-v4-ads-badge-free-lesson">1<sup>er</sup> cours offert</span></span>
                    <div class="landing-v4-ads-badge-chips landing-v4-ads-badge-rating">
                        <span class="landing-v4-ads-badge-rating-text">5,0</span>
                        <span class="landing-v4-ads-badge-rating-icon star-fullV2"></span>
                        <span class="landing-v4-ads-badge-rating-view-count">77 avis</span></div>
                </div><h3 class="landing-v4-ads-text">Prof de français et de littérature en lycée et collège donne cours particuliers. préparation au bac de français et au brevet des collèges.</h3></div>

        </div>
    </section>
@endsection
