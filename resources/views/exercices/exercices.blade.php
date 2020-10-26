@extends('layouts.front')

@section('baniere')
    <div class="w-full bg-cover bg-center"
         style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section exercices <span
                        class="underline text-blue-400"></span></h1>
                <a href="#bar"
                   class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    visiter
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div id="bar" class="flex justify-center items-center min-h-screen w-full text-bold text-5xl" >
        Cette section est encours de construction.
    </div>
@endsection


@section('script')
@endsection
