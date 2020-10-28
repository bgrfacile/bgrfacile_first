@extends('layouts.front')

@section('baniere')
@endsection

@section('content')
    {{--presentation--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-20 px-4 pt-40 text-center pb-10">
            <h1 class="text-6xl font-bold">écoles en ligne</h1>
            <p class="text-xl mb-8">
                l'école en ligne que propose <strong>bgrfacile</strong>
                est tout simplement la présence d'une école traditionnelle de la place sur la toile internet et
                accessible à tous avec des avantages
                <a href="#fonctionnalite">décrites ici</a>
            </p>
            <p class="flex justify-center">
                <a href="#"
                   class="mx-auto lg:mx-0 hover:underline font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48 bg-black text-white">
                    cree votre école
                </a>
                <a href="#"
                   class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8">
                    Acceder à votre école
                </a>
            </p>
            <div class="w-11/12 mx-auto">
                <iframe class="w-full" width="560" height="315" src="https://www.youtube.com/embed/fS5SyhuIusM"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </section>
    {{--etape de creation--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto px-4 text-center">
            <h2>étape de la creation d'une école</h2>
            <p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="flex mb-4">
                <div class="w-1/3 h-12">
                    <svg class="h-4 w-4 mx-auto" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <rect class="fj text-purple-600" width="64" height="64" rx="32"></rect>
                        <path class="fq wv" stroke-width="2" stroke-linecap="square" d="M21 23h22v18H21z" fill="none"
                              fill-rule="evenodd"></path>
                        <path class="fq wp" d="M26 28h12M26 32h12M26 36h5" stroke-width="2"
                              stroke-linecap="square"></path>
                    </svg>
                    <h4 class=""><span class="lu">1</span>. Acquisition</h4>
                    <p class="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur.</p>
                </div>
                <div class="w-1/3 h-12">
                    <svg class="h-4 w-4 mx-auto" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <rect class="fj text-purple-600" width="64" height="64" rx="32"></rect>
                        <g fill="none" fill-rule="evenodd">
                            <path class="fq wv" d="M40 22a2 2 0 012 2v16a2 2 0 01-2 2H24a2 2 0 01-2-2V24a2 2 0 012-2"
                                  stroke-width="2" stroke-linecap="square"></path>
                            <path class="fq wp" stroke-width="2" stroke-linecap="square"
                                  d="M36 32l-4-3-4 3V22h8z"></path>
                        </g>
                    </svg>
                    <h4 class=""><span class="lu">2</span>. Activation</h4>
                    <p class="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur.</p>
                </div>
                <div class="w-1/3 h-12">
                    <svg class="h-4 w-4 mx-auto" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <rect class="fj text-purple-600" width="64" height="64" rx="32"></rect>
                        <path class="fq wv" stroke-width="2" stroke-linecap="square" d="M21 35l4 4 12-15" fill="none"
                              fill-rule="evenodd"></path>
                        <path class="fq wp" d="M42 29h-3M42 34h-7M42 39H31" stroke-width="2"
                              stroke-linecap="square"></path>
                    </svg>
                    <h4 class=""><span class="lu">3</span>. Retention</h4>
                    <p class="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- etudiant--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-20 px-4">
            <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-10">
                <div class="w-full px-3">

                    <p class="mb-2 text-gray-700">
                        ce que les etudiants peuvent faire
                    </p>

                </div>
                <div class="w-full px-3">
                    <img
                        src="{{ asset('assets/images/dessin1_homePage.png') }}"
                        alt="garçon qui étudie"
                        title="#MyArt@Lb14">
                </div>
            </div>
        </div>
    </section>
    {{--prof --}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-20 px-4">
            <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-10">
                <div class="w-full px-3">
                    <img
                        src="{{ asset('assets/images/dessin1_homePage.png') }}"
                        alt="garçon qui étudie"
                        title="#MyArt@Lb14">
                </div>
                <div class="w-full px-3">

                    <p class="mb-2 text-gray-700">
                        ce que les professeurs peuvent faire
                    </p>

                </div>
            </div>
        </div>
    </section>
    {{--fonctionnalite--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-20 px-4">
            <h2 class="text-center">Les fonctionnalites offre</h2>
            <ul class="nv cx mi _p _a">
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
                <li><h4 class="rz ro sa">Publishing industries for previewing layouts?</h4>
                    <p class="rq lu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p></li>
            </ul>
        </div>
    </section>
    {{--price--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-20 px-4">
        <div class="flex mb-4">
            <div class="w-1/3 h-12">
                <div class="fa np ng rw uv _ aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
                    <div class="sm af na tj">
                        <div class="h4 text-purple-600 si">Essential</div>
                        <div class="nd nx sa"><span x-text="priceOutput.plan1[value][0]" class="bf xm ro lu">$</span> <span
                                x-text="priceOutput.plan1[value][1]" class="h2">49</span> <span
                                x-text="priceOutput.plan1[value][2]" class="ro lu">/mo</span></div>
                        <div class="lu">Better insights for growing businesses that want more customers.</div>
                    </div>
                    <div class="ro sh">Features include:</div>
                </div>
            </div>
            <div class="w-1/3 h-12">
                <div class="fa np ng rw uv _ aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <div class="fu fl fc bp ol">
                        <div class="nd r_ bi uy uk bg lv ye nr">Most Popular</div>
                    </div>
                    <div class="sm af na tj">
                        <div class="h4 text-purple-600 si">Premium</div>
                        <div class="nd nx sa"><span x-text="priceOutput.plan2[value][0]" class="bf xm ro lu">$</span> <span
                                x-text="priceOutput.plan2[value][1]" class="h2">79</span> <span
                                x-text="priceOutput.plan2[value][2]" class="ro lu">/mo</span></div>
                        <div class="lu">Better insights for growing businesses that want more customers.</div>
                    </div>
                    <div class="ro sh">All features of Essential plus:</div>

                </div>
            </div>
            <div class="w-1/3 h-12">
                <div class="fa np ng rw uv _ aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <div class="sm af na tj">
                        <div class="h4 text-purple-600 si">Premium</div>
                        <div class="nd nx sa"><span x-text="priceOutput.plan3[value][0]" class="bf xm ro lu">$</span> <span
                                x-text="priceOutput.plan3[value][1]" class="h2">129</span> <span
                                x-text="priceOutput.plan3[value][2]" class="ro lu">/mo</span></div>
                        <div class="lu">Better insights for growing businesses that want more customers.</div>
                    </div>
                    <div class="ro sh">All features of Essential plus:</div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{--acceder aux ecole--}}
    <section class="gradient w-full mx-auto text-center pt-6 pb-12">
        <h3 class="my-4 text-3xl font-extrabold">
            Acceder à votre école
        </h3>

        <button
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
            Action!
        </button>
    </section>
@endsection
