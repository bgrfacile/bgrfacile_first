@extends('layouts.front')

@section('baniere')
{{--    <div class="h-64">--}}
{{--        <div class="MS-b_astuces h-full bg-gray-100 flex items-center justify-center">--}}
{{--            <div class="text-white text-center">--}}
{{--                <h1 class="MS-b_h1">section cours</h1>--}}
{{--                <p class=" MS-b_text mb-9">Découvrer des millions de cours rédiger par les professeurs qualifiés</p>--}}
{{--                <button--}}
{{--                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">--}}
{{--                    visiter--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
        <div class="text-center">
            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section cours <span class="underline text-blue-400"></span></h1>
            <a href="#bar" class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                visiter
            </a>
        </div>
    </div>
@endsection


@section('content')
    <div class="bg-gray-200">
        <nav id="bar"
            class="flex flex-wrap items-center bg-gray-200 sticky top-0 z-50 shadow mb-5">
            <ul class="flex-1 flex items-center">
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Astuces
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section MS-nav-active inline-flex justify-center items-center w-full h-full">
                        Cours
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Exercices
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Corrigés
                    </a>
                </li>
            </ul>
            <form class="flex items-center h-12 w-full sm:w-auto md:w-auto lg:w-auto">
                <input
                    class="appearance-none w-full h-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username"
                    type="search" placeholder="recherche...">
                <button type="submit" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 h-12 w-12">
                    <svg class="inline-block h-4" viewBox="0 0 12 12" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z"
                            fill="white"/>
                    </svg>
                </button>
            </form>
        </nav>

        <div class="container w-full mx-auto px-2 sm:px-4 md:px-8 lg:px-12">
            <div
                class="block sm:block md:block lg:grid xl:grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div class="col-span-4 sm:col-span-1 md:col-span-1 lg:col-span-1 ">
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">formation</h3>
                        <a href="#modal_formation" data-modal="1"
                           class="MS-js-modal MS-bold block w-full text-white bg-black uppercase p-3 cursor-pointer">collège</a>
                        <aside id="modal_formation" class="modal z-50 " style="display: none" aria-hidden="true"
                               role="dialog" aria-labelledby="titleModal">
                            <div class="MS-js-modal-stop modal-wrapper z-50 h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                                <button class="MS-js-modal-close">close</button>
                                <h1 id="titleModal">liste de nos formations</h1>
                                <p>There's one way and only one way to determine if an animal is intelligent. Dissect
                                    its brain! So, how 'bout them Knicks? Michelle, I don't regret this, but I both rue
                                    and lament it. I'm a thing. We can't compete with Mom! Her company is big and evil!
                                    Ours is small and neutral!</p>
                                <p>It's okay, Bender. I like cooking too. <strong> Michelle, I don't regret this, but I
                                        both rue and lament it.</strong> <em> I decline the title of Iron Cook and
                                        accept the lesser title of Zinc Saucier, which I just made up.</em> Uhh… also,
                                    comes with double prize money.</p>
                                <h2>Noooooo!</h2>
                                <a href="#" style="color: red">coucou</a>
                                <p>There's one way and only one way to determine if an animal is intelligent. Dissect
                                    its brain! Fry! Quit doing the right thing, you jerk! A true inspiration for the
                                    children. The alien mothership is in orbit here. If we can hit that bullseye, the
                                    rest of the dominoes will fall like a house of cards. Checkmate.</p>
                                <ol>
                                    <li>
                                        <input type="text" placeholder="coucouc">
                                    </li>
                                    <li>Your best is an idiot!</li>
                                    <li>Bender, quit destroying the universe!</li>
                                    <li>Would you censor the Venus de Venus just because you can see her spewers?</li>

                                </ol>

                                <h3>Soothe us with sweet lies.</h3>
                                <p>We need rest. The spirit is willing, but the flesh is spongy and bruised. Wow, you
                                    got that off the Internet? In my day, the Internet was only used to download
                                    pornography. The alien mothership is in orbit here. If we can hit that bullseye, the
                                    rest of the dominoes will fall like a house of cards. Checkmate.</p>
                                <ul>

                                    <li>Say it in Russian!</li>
                                    <li>Shut up and get to the point!</li>
                                    <li>Tell her you just want to talk. It has nothing to do with mating.</li>

                                </ul>

                                <p>Ummm…to eBay? Well, thanks to the Internet, I'm now bored with sex. Is there a place
                                    on the web that panders to my lust for violence? I just want to talk. It has nothing
                                    to do with mating. Fry, that doesn't make sense.</p>
                                <p>Moving along… Oh, I think we should just stay friends. Hey, guess what you're
                                    accessories to. Ah, the 'Breakfast Club' soundtrack! I can't wait til I'm old enough
                                    to feel ways about stuff!</p>
                                <input type="text" placeholder="coucouc">
                                <p>Maybe I love you so much I love you no matter who you are pretending to be. Look,
                                    everyone wants to be like Germany, but do we really have the pure strength of
                                    'will'? How much did you make me? Are you crazy? I can't swallow that.</p>
                                <p>Hey, you add a one and two zeros to that or we walk! Fatal. Can I use the gun? I
                                    usually try to keep my sadness pent up inside where it can fester quietly as a
                                    mental illness.</p>
                                <p>Yes! In your face, Gandhi! Oh, I think we should just stay friends. Oh, but you can.
                                    But you may have to metaphorically make a deal with the devil. And by "devil", I
                                    mean Robot Devil. And by "metaphorically", I mean get your coat.</p>
                                <p>Kif might! Daddy Bender, we're hungry. You can see how I lived before I met you. Tell
                                    them I hate them. You guys aren't Santa! You're not even robots. How dare you lie in
                                    front of Jesus?</p>
                                <p>Do a flip! Hey, what kinda party is this? There's no booze and only one hooker. I
                                    haven't felt much of anything since my guinea pig died. With a warning label this
                                    big, you know they gotta be fun! Hey, guess what you're accessories to.</p>
                                <p>Isn't it true that you have been paid for your testimony? Why did you bring us here?
                                    Hey, you add a one and two zeros to that or we walk! No! The kind with looting and
                                    maybe starting a few fires!</p>
                                <p>Now, now. Perfectly symmetrical violence never solved anything. Now that the, uh,
                                    garbage ball is in space, Doctor, perhaps you can help me with my sexual
                                    inhibitions? Yes. You gave me a dollar and some candy.</p>
                                <p>Now what? Yes, I saw. You were doing well, until everyone died. I guess if you want
                                    children beaten, you have to do it yourself. Switzerland is small and neutral! We
                                    are more like Germany, ambitious and misunderstood!</p>
                                <p>Who am I making this out to? A sexy mistake. But existing is basically all I do! Fry,
                                    you can't just sit here in the dark listening to classical music. Who's brave enough
                                    to fly into something we all keep calling a death sphere?</p>
                            </div>
                        </aside>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">niveau</h3>
                        <div class="MS-bold w-full uppercase p-3 cursor-pointer">
                            <form action="#">
                                <div class="bg-gray-200">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="flex flex-col">
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                                                <span class="ml-2 text-gray-700">3eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">4eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">5eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">6eme</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">programe</h3>
                        <div class="w-full uppercase p-3">
                            pas de programme trouvé.
                        </div>
                    </section>
                    <section class="mb-5 text-center">
                        <button onclick="document.getElementById('myModal').showModal()" id="btn" class="py-3 px-10 bg-gray-800 text-white rounded text shadow-xl">
                            Open
                        </button>
                        <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">

                            <div class="flex flex-col w-full h-auto ">
                                <!-- Header -->
                                <div class="flex w-full h-auto justify-center items-center">
                                    <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                                        Modal Header
                                    </div>
                                    <div onclick="document.getElementById('myModal').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                    <!--Header End-->
                                </div>
                                <!-- Modal Content-->
                                <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                                    This is a text inside the modal. You can add your content here.
                                </div>
                                <!-- End of Modal Content-->



                            </div>
                        </dialog>
                    </section>
                </div>

                <div class="flex flex-col grid-cols-1 sm:col-span-3 md:col-span-3 lg:col-span-3">
                    <div class="flex mb-4 items-center justify-between bg-white">
                        <div class="flex h-full items-center justify-center w-7">
                            <a href="#"><i class="fas fa-chevron-left"></i></a>
                        </div>
                        <nav
                            class="MS-item__matiere flex-1 bg-white flex items-center relative overflow-hidden text-center">
                            <a href="#" class="w-full py-4">Mathematiques</a>
                            <a href="#" class="w-full py-4">Histoire</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Physique</a>
                            <a href="#" class="w-full py-4">Chimie</a>
                            <div class="bar"></div>
                        </nav>
                        <div class="flex h-full items-center justify-center w-7">
                            <a href="#" class="bg-white"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 px-2 xl:px-0 md:px-0">
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3 pt-5">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"
                                              fill="black" fill-opacity="0.87"/>
                                    </svg>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                <div class="like">
                                </div>
                            </div>
                            <div class="MS-content__article min-h-4 p-3">
                                lorem ipsums lorem ipsums lorem ipsums
                            </div>
                            <footer class="flex justify-between p-4">
                                <a href="#">LIRE</a>
                                <div>
                                    124 likes
                                </div>
                            </footer>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        const like = document.querySelectorAll('.like');
        like.forEach(link=>{
            let countLike = 0;
            link.addEventListener('click', () => {
                if (countLike === 0) {
                    link.classList.toggle('anim-like');
                    countLike = 1;
                    link.style.backgroundPosition = 'right';
                } else {
                    countLike = 0;
                    link.style.backgroundPosition = 'left';
                }
            });
            link.addEventListener('animationend', () => {
                link.classList.toggle('anim-like');
            })
        });
    </script>
    <script>
        let modal = null;
        const focusableSelector = 'button, a, input, textarea';
        let focusables = [];
        let previouslyFocusedElement = null;
        const openModal = function (e) {
            e.preventDefault();
            e.stopPropagation();
            modal = document.querySelector(e.target.getAttribute('href'));
            focusables = Array.from(modal.querySelectorAll(focusableSelector));
            previouslyFocusedElement = document.querySelector(':focus');
            modal.style.display = null;
            focusables[0].focus();
            modal.removeAttribute('aria-hidden');
            modal.setAttribute('aria-modal', 'true');
            modal.addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-stop').addEventListener('click', stopPropagation);
        };

        const closeModal = function (e) {
            if (modal === null) return
            if (previouslyFocusedElement !== null) {
                previouslyFocusedElement.focus()
            }
            e.preventDefault();
            e.stopPropagation();
            window.setTimeout( function () {
                modal.style.display = "none";
                modal = null;
                }, 500);
            // modal.style.display = "none";
            modal.setAttribute('aria-hidden', 'true');
            modal.removeAttribute('aria-modal');
            modal.removeEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').removeEventListener('click', closeModal)
            modal.querySelector('.MS-js-modal-stop').removeEventListener('click', stopPropagation);
            // modal = null;
        };

        const stopPropagation = function (e) {
            e.stopPropagation()
        };

        const focusInModal = function (e) {
            e.preventDefault();
            let index = focusables.findIndex(f => f === modal.querySelector(':focus'))
            if (e.shitkey === true) {
                index--;
            } else {
                index++;
            }
            if (index >= focusables.length) {
                index = 0
            }
            if (index < 0) {
                index = focusables.length - 1
            }
            focusables[index].focus()
        };

        document.querySelectorAll('.MS-js-modal').forEach(a => {
            a.addEventListener('click', openModal)
        });
        window.addEventListener('keydown', function (e) {
            if (e.key === "Escape" || e.key === "Esc") {
                closeModal(e)
            }
            if (e.key === "Tab" && modal != null) {
                focusInModal(e);
            }
        })
    </script>
@endsection
