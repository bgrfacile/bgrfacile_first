@extends('layouts.front')

@section('baniere')
    <div class="h-64">
        <div class="MS-b_astuces h-full bg-gray-100 flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="MS-b_h1">section cours</h1>
                <p class=" MS-b_text mb-9">Découvrer des millions de cours rédiger par les professeurs qualifiés</p>
                <button
                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">
                    visiter
                </button>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="bg-gray-200">
        <nav
            class="flex flex-wrap items-center bg-gray-200 sticky top-0 z-50 shadow mb-5">
            <ul class="flex-1 flex items-center">
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="inline-flex justify-center items-center w-full h-full bg-black text-white">
                        Astuces
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="inline-flex justify-center items-center w-full h-full text-black hover:text-white hover:bg-black">
                        Cours
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="inline-flex justify-center items-center w-full h-full text-black hover:text-white hover:bg-black">
                        Exercices
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="inline-flex justify-center items-center w-full h-full text-black hover:text-white hover:bg-black">
                        Corrigés
                    </a>
                </li>
            </ul>
            <form class="flex items-center h-12">
                <input
                    class="appearance-none w-full h-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username"
                    type="search" placeholder="recherche...">
                <button type="submit" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 h-12 w-full">
                    <svg class="inline-block h-4" viewBox="0 0 12 12" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z"
                            fill="white"/>
                    </svg>
                </button>
            </form>
        </nav>

        <div class="container w-full  mx-auto px-12">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-1">
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">formation</h3>
                        <div class="MS-bold w-full text-white bg-black uppercase p-3 cursor-pointer">collège</div>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">niveau</h3>
                        <div class="MS-bold w-full uppercase p-3 cursor-pointer">
                            <form action="#">
                                <div class="flex">
                                    <input type="checkbox" id="3">
                                    <label for="3">3eme</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="4">
                                    <label for="4">4eme</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="5">
                                    <label for="5">5eme</label>
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
                </div>

                <div class="col-span-3 flex flex-col">
                    <div class="mb-4">
                        <nav
                            class="MS-item__matiere w-full  bg-white flex items-center relative overflow-hidden text-center">
                            <a href="#" class="w-full py-4"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="w-full py-4">Mathematiques</a>
                            <a href="#" class="w-full py-4">Histoire</a>
                            <a href="#" class="w-full py-4">Géàgraphe</a>
                            <a href="#" class="w-full py-4">Géàgraphe</a>
                            <a href="#" class="w-full py-4">Géàgraphe</a>
                            <a href="#" class="w-full py-4">Géàgraphe</a>
                            <a href="#" class="w-full py-4">Physique</a>
                            <a href="#" class="w-full py-4">Chimie</a>
                            <a href="#" class="w-full py-4"><i class="fas fa-chevron-right"></i></a>
                            <div class="bar"></div>
                        </nav>
                    </div>

                    <div class="grid md:grid-cols-3 gap-3">
                        <article class="bg-white rounded">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-2">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z" fill="black" fill-opacity="0.87"/>
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
        const like = document.querySelector('.like');

        let countLike = 0;
        like.addEventListener('click', () => {

            if(countLike === 0) {
                like.classList.toggle('anim-like');
                countLike = 1;
                like.style.backgroundPosition = 'right';
            } else {
                countLike = 0;
                like.style.backgroundPosition = 'left';
            }

        });

        like.addEventListener('animationend', () => {
            like.classList.toggle('anim-like');
        })

    </script>
@endsection
