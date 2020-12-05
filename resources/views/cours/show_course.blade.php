@extends('layouts.readCourse')

@section('main')
    <div class="w-full border-b flex flex-row flex-wrap items-center justify-center">
        <div class="flex flex-row flex-wrap">
            <a
                class="p-4 bg-blue-600 hover:bg-blue-300 flex items-center justify-center"
                href="#comments">
                <svg class="h-4 w-4" viewBox="-21 -47 682.66669 682" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m552.011719-1.332031h-464.023438c-48.515625 0-87.988281 39.464843-87.988281 87.988281v283.972656c0 48.414063 39.300781 87.816406 87.675781 87.988282v128.863281l185.191407-128.863281h279.144531c48.515625 0 87.988281-39.472657 87.988281-87.988282v-283.972656c0-48.523438-39.472656-87.988281-87.988281-87.988281zm50.488281 371.960937c0 27.835938-22.648438 50.488282-50.488281 50.488282h-290.910157l-135.925781 94.585937v-94.585937h-37.1875c-27.839843 0-50.488281-22.652344-50.488281-50.488282v-283.972656c0-27.84375 22.648438-50.488281 50.488281-50.488281h464.023438c27.839843 0 50.488281 22.644531 50.488281 50.488281zm0 0"/>
                    <path d="m171.292969 131.171875h297.414062v37.5h-297.414062zm0 0"/>
                    <path d="m171.292969 211.171875h297.414062v37.5h-297.414062zm0 0"/>
                    <path d="m171.292969 291.171875h297.414062v37.5h-297.414062zm0 0"/>
                </svg>
                <span class="px-1">123450</span>
            </a>
        </div>
        <div class="w-3/5 flex-1 text-center">
            <a
                href="/"
                class="text-3xl font-bold text-gray-800">
                bgrfacile
            </a>
        </div>
    </div>

    {{--    contenue--}}
    <div class="w-full md:w-7/12 mx-auto mt-6">
        {{--        titre--}}
        <div class="w-full h-72 rounded-lg border">
            <img
                src="{{ asset('assets/images/bgr dessin3.3.png') }}"
                alt="garçon qui étudie"
                title="#MyArt@Lb14"
                class="w-full h-full object-cover">
        </div>

        <div class="mx-5 my-3 text-sm">
            {{--            La <a href="" class="text-red-600 font-bold tracking-widest">matière du cours</a>--}}
        </div>
        <div class="w-full text-gray-800 text-4xl font-bold leading-none py-3">
            {{ $course->name }}
        </div>
        <div class="w-full mx-auto">
            {!! $course->content !!}
        </div>
{{--        commentaire--}}
    </div>
@endsection
