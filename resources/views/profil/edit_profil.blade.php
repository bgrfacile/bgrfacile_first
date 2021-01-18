@extends('layouts.base')

@section('title') Modifier mon compte @endsection

@section('baniere')
    @include('layouts.partials.baniere_profil')

@endsection

@section('content')
    @if(session('success'))
        <div class="bg-green-300 text-green-800">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('profil.edit.post',['user'=>$user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="py-10 bg-gray-100  bg-opacity-50">
            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="text-xl max-w-sm mx-auto md:w-full md:mx-0">
                        Mes informations
                    </div>
                </div>

                <div class="bg-white space-y-6">
                    <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                        <div class="md:w-1/3 max-w-sm mx-auto">
                            <div class="text-center">
                                <button type="submit"
                                        class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                                    <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                    </svg>
                                    Mettre à jour
                                </button>
                            </div>
                        </div>

                        <div class="md:w-2/3 max-w-sm mx-auto">
                            <div>
                                <label class="text-sm text-gray-400">Mon Nom</label>
                                <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input name="name" type="text" value="{{ $user->name }}"
                                           class="w-11/12 focus:outline-none focus:text-gray-600 p-2 border-2 @if($errors->has('name')) border-red-400 @endif">
                                </div>
                                @if($errors->has('name'))
                                    <div class="text-red-400">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label class="text-sm text-gray-400">Mon Prénom</label>
                                <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input name="prenom" type="text" value="{{ $user->prenom }}"
                                           class="w-11/12 focus:outline-none focus:text-gray-600 p-2 border-2 @if($errors->has('prenom')) border-red-400 @endif">
                                </div>
                                @if($errors->has('prenom'))
                                    <div class="text-red-400">
                                        {{ $errors->first('prenom') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label for="number_phone" class="text-sm text-gray-400">Mon numéro de téléphone</label>
                                <div class="w-full inline-flex border">
                                    <div class="pt-2 w-1/12 bg-gray-100">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <input name="telephone" type="tel" value="{{ $user->telephone }}"
                                           class="w-11/12 focus:outline-none focus:text-gray-600 p-2 border-2 @if($errors->has('telephone')) border-red-400 @endif"
                                           id="number_phone">
                                </div>
                                @if($errors->has('telephone'))
                                    <div class="text-red-400">
                                        {{ $errors->first('telephone') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label class="text-sm text-gray-400">
                                    Mon Email <span class="text-red-400">* connexion</span>
                                </label>
                                <div class="w-full inline-flex border">
                                    <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <input name="email" value="{{ $user->email }}" type="email"
                                           class="w-11/12 focus:outline-none focus:text-gray-600 p-2 border-2 @if($errors->has('email')) border-red-400 @endif">
                                </div>
                                @if($errors->has('email'))
                                    <div class="text-red-400">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label for="bio" class="text-sm text-gray-400">Quelque chose sur moi</label>
                                <div class="w-full inline-flex border">
                                    <textarea name="bio" class="h-full w-full p-3" id="bio" cols="30"
                                              rows="10">{{ $user->bio }}</textarea>
                                </div>
                                @if($errors->has('name'))
                                    <div class="text-red-400">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm">Informations secondaires</h2>
                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                            <div>
                                <label class="text-sm text-gray-400">image</label>
                                <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg class="w-6 text-gray-400 mx-auto" viewBox="0 0 512 512"
                                             style="enable-background:new 0 0 512 512;" stroke="currentColor">
                                            <g>
                                                <path d="M464,0H48C21.49,0,0,21.49,0,48v416c0,26.51,21.49,48,48,48h416c26.51,0,48-21.49,48-48V48C512,21.49,490.51,0,464,0z
				 M480,464c0,8.837-7.163,16-16,16H48c-8.837,0-16-7.163-16-16V48c0-8.837,7.163-16,16-16h416c8.837,0,16,7.163,16,16V464z"/>
                                                <path d="M347.36,276.64c-6.241-6.204-16.319-6.204-22.56,0l-36.8,36.8l-68.64-68.64c-6.241-6.204-16.319-6.204-22.56,0l-112,112
				c-6.186,6.31-6.087,16.44,0.223,22.626c2.935,2.878,6.866,4.516,10.977,4.574h320c8.836,0.051,16.041-7.07,16.093-15.907
				c0.025-4.299-1.681-8.426-4.733-11.453L347.36,276.64z"/>
                                                <circle cx="304" cy="176" r="48"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <input name="profile_photo_path" type="file" class="w-11/12 focus:outline-none focus:text-gray-600 p-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
