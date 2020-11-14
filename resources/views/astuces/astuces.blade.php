@extends('layouts.front')

@section('baniere')
{{--    <div class="w-full bg-cover bg-center"--}}
{{--         style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">--}}
{{--        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">--}}
{{--            <div class="text-center">--}}
{{--                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section astuces <span--}}
{{--                        class="underline text-blue-400"></span></h1>--}}
{{--                <a href="#bar"--}}
{{--                   class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                    visiter--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection


@section('content')
{{--    <div id="bar" class="flex justify-center items-center min-h-screen w-full text-bold text-5xl" >--}}
{{--        Cette section est encours de construction--}}
{{--    </div>--}}
    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
            <h2 class="text-3xl leading-9 font-extrabold text-gray-900">
                Les catégories de nos astuces
            </h2>
            <div class="mt-6 border-t-2 border-gray-100 pt-10">
                <dl class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <div>
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                What's the best thing about Switzerland?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                How do you make holy water?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                What do you call someone with no body and no nose?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <div>
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                What is the least spoken language in the world?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Sign language. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Why can't you hear a pterodactyl go to the bathroom?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Why did the invisible man turn down the job offer?
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    He couldn't see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

@endsection


@section('script')

@endsection
