{{--lecture du cours: <br>--}}
{{--<strong>--}}
{{--    {{ $course->name }}--}}
{{--</strong>--}}
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
            Cours de <a href="" class=" text-red-600 font-bold tracking-widest">matière du cours</a>
        </div>
        <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none">
            {{ $course->name }}
        </div>

        <div class="w-full text-gray-500 px-5 pb-5 pt-2">
            {{ $course->description }}
        </div>

        <div class="mx-5">
            <img
                src="https://cdn.dribbble.com/users/1804127/screenshots/14134443/dribbble-01.png">
        </div>

        <div class="w-full text-gray-600 text-normal mx-5">
            <p class="border-b py-3">Georgia Gov. Brian Kemp speaks to the media during a press conference. | Kevin C.
                Cox/Getty Images</p>
        </div>

        <div class="w-full text-gray-600 font-thin italic px-5 pt-3">
            By <strong class="text-gray-700">Quint Forgey</strong><br>
            07/17/2020 09:57 AM EDT<br>
            Updated: 07/17/2020 10:33 AM EDT
        </div>

        <div class="px-5 w-full mx-auto">
            {{ $course->content }}
        </div>
    </div>

    {{--    <div class="bg-gray-100 h-screen" style="min-height: 500px;">--}}
    <div
         @keydown.window.escape="open = false" class="fixed inset-0 overflow-hidden">
        <div class="absolute overflow-hidden">
            <div x-show="open" x-description="Background overlay, show/hide based on slide-over state."
                 x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                 x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                 class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <section {{--@click.away="open = false"--}}
                     class="absolute inset-y-0 right-0 {{--pl-10--}} max-w-full flex">
                <div class="relative w-screen max-w-md"
                     x-description="Slide-over panel, show/hide based on slide-over state." x-show="open"
                     x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                     x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                     x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                     x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                    <div x-description="Close button, show/hide based on slide-over state." x-show="open"
                         x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                         class="absolute top-0 right-0 {{--left-0--}} -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                        <button @click="open = false;" aria-label="Close panel"
                                class="text-gray-300 hover:text-white transition ease-in-out duration-150">
                            <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    {{--                        contenue--}}
                    <div class="h-full flex flex-col space-y-6 py-6 bg-white shadow-xl overflow-y-scroll">
                        <header class="px-4 sm:px-6">
                            <h2 class="text-lg leading-7 font-medium text-gray-900">
                                Option sur le cours
                            </h2>
                        </header>
                        <div class="relative flex-1 px-4 sm:px-6">
                            <!-- Replace with your content -->
                            <div class="absolute inset-0 px-4 sm:px-6">
                                <div class="h-full {{--border-2 border-dashed border-gray-200--}}">
                                    <div class="border-b pb-2">
                                        Ce cours est écris par
                                    </div>
                                </div>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{--    </div>--}}
@endsection
