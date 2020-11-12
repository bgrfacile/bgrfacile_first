@extends('layouts.readCourse')

@section('main')
    <div x-data="{ open: true }" class="w-full border-b flex flex-row flex-wrap items-center p-1">
        <div class="flex flex-row flex-wrap">
            <a
                class="px-4"
                href="">
                <i class="fa fa-search"></i>
            </a>
            <a
                class="px-4"
                href="">
                <i class="fa fa-share"></i>
            </a>
        </div>

        <div class="w-3/5 p-1 flex-1 text-center">
            <a
                href="/"
                class="text-3xl font-bold text-gray-800">
                bgrfacile
            </a>
        </div>
        <div
            class="p-1 cursor-pointer">
            <button @click="open = false;" aria-label="Close panel"
                    class="text-gray-300 hover:text-white transition ease-in-out duration-150">
                <i class="fa fa-bars h-6 w-6"></i>
            </button>
        </div>
    </div>
    <div class="w-full md:w-7/12 mx-auto" xmlns:x-transition="http://www.w3.org/1999/xhtml">
        <div class="mx-5 my-3 text-sm">
            La <a href="" class=" text-red-600 font-bold tracking-widest">matière du cours</a>
        </div>
        <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none">
            {{ $course->name }}
        </div>

        <div class="w-full text-gray-500 px-5 pb-5 pt-2">
            {{ $course->description }}
        </div>

        <div class="px-5 w-full mx-auto">
            {!! $course->content !!}
        </div>
    </div>
@endsection
