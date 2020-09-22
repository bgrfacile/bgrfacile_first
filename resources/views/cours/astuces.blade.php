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
    <section class="bg-gray-200">
        <nav class="h-12 bg-black text-white flex items-center mb-5">
            <ul class="flex-1 flex justify-around items-center">
                <li>Astuces</li>
                <li>Cours</li>
                <li>Exercices</li>
                <li>Corrigés</li>
            </ul>
            <div>
                <form>
                    <input type="search" placeholder="recherche...">
                    <button>R</button>
                </form>
            </div>
        </nav>
        <div class="container w-full  mx-auto px-2">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-1">
                    <section class="mb-5 text-center">
                        <h3 class="w-full bg-white p-3 uppercase">formation</h3>
                        <div class="MS-bold w-full text-white bg-black uppercase p-3 cursor-pointer">collège</div>
                    </section>
                </div>
                <div class="col-span-3 flex flex-col">
                    <div class="mb-4">
                        <nav class="MS-item__matiere w-full  bg-white flex items-center relative overflow-hidden text-center">
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
{{--                                <div class="like">--}}
{{--                                    like--}}
{{--                                </div>--}}
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                {{--                                <div class="like">--}}
                                {{--                                    like--}}
                                {{--                                </div>--}}
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                {{--                                <div class="like">--}}
                                {{--                                    like--}}
                                {{--                                </div>--}}
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                {{--                                <div class="like">--}}
                                {{--                                    like--}}
                                {{--                                </div>--}}
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                {{--                                <div class="like">--}}
                                {{--                                    like--}}
                                {{--                                </div>--}}
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
                        <article class="bg-white">
                            <header class="flex p-2">
                                <div class="flex-1">
                                    <h4 class="MS-bold">Name du cours</h4>
                                    <small>name du prof</small>
                                </div>
                                <div>
                                    <small>favoris</small>
                                </div>
                            </header>
                            <div class="relative">
                                <img class="w-full" src="{{asset('assets/images/image_card.png')}}" alt="">
                                {{--                                <div class="like">--}}
                                {{--                                    like--}}
                                {{--                                </div>--}}
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
    </section>
@endsection
