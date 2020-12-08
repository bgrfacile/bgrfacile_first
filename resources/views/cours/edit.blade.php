@extends('layouts.templateCreateCourse')


@section('content')
    <form action="{{ route('course.update',['course'=>$course->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="w-full h-full flex flex-wrap">
            {{--        content course--}}
            <div class="w-2/3 bg-gray-100 p-4">
                <div class="md:w-full px-3">
                    <textarea id="myeditor"
                              class="appearance-none block w-full h-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                              name="content">{{ $course->content }}</textarea>
                </div>
            </div>
            {{--        info supplementaire sur le course--}}
            <div class="w-1/3 bg-gray-200">
                {{--submit cours--}}
                <div class="flex justify-center items-center p-4">
                    <button
                        type="submit"
                        name="brouillon"
                        class="py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg">
                        Enregistrer le brouillon
                    </button>
                    <button
                        type="submit"
                        name="publier"
                        class="ml-2 py-2 px-4 bg-gray-50 text-sm text-blue-600 rounded-md">
                        Publier
                    </button>
                </div>
                {{--    info du cours--}}
                <div class="px-4">
                    <div class="flex flex-col mb-4 pt-4">
                        <label for="name" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                            Nom du cours
                        </label>
                        <div class="relative">
                            <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                <div
                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                    <svg
                                        width="24" height="24"
                                        viewBox="0 0 458.018 458.018"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <g>
                                            <path d="M307.631,425.737h0.002c0,1.551-1.262,2.813-2.814,2.813H36.111c-1.552,0-2.814-1.262-2.814-2.813V32.282
				c0-1.552,1.262-2.814,2.814-2.814h268.708c1.552,0,2.814,1.262,2.814,2.814v27.411l29.442-28.412
				C336.543,13.943,322.283,0,304.819,0H36.111C18.311,0,3.829,14.481,3.829,32.282v393.455c0,17.799,14.481,32.281,32.281,32.281
				h268.708c17.8,0,32.281-14.481,32.281-32.281V287.234l-29.468,29.467V425.737z"/>
                                            <path d="M55.319,345.509c0,8.137,6.597,14.734,14.734,14.734h51.527c-5.48-8.721-7.756-19.103-6.32-29.467H70.053v-0.001
				C61.916,330.775,55.319,337.372,55.319,345.509z"/>
                                            <path
                                                d="M131.134,256.828H70.053c-8.137,0-14.734,6.597-14.734,14.734s6.597,14.734,14.734,14.734h54.697L131.134,256.828z"/>
                                            <path d="M184.444,182.882H70.053c-8.137,0-14.734,6.597-14.734,14.734c0,8.137,6.597,14.734,14.734,14.734h84.923
				L184.444,182.882z"/>
                                            <path d="M258.39,108.936H70.053c-8.137,0-14.734,6.597-14.734,14.734c0,8.137,6.597,14.734,14.734,14.734h158.869L258.39,108.936
				z"/>
                                            <path d="M436.809,60.304c-24.123-24.836-63.396-24.718-87.457-0.657c-13.58,13.58-174.931,174.931-182.482,182.483
				c-1.947,1.946-3.375,4.5-3.982,7.299l-18.249,84.244c-1.045,4.823,0.389,9.944,3.982,13.538c3.569,3.57,8.682,5.034,13.538,3.982
				l84.244-18.249c2.772-0.601,5.386-2.066,7.299-3.982l182.482-182.483C460.105,122.56,460.065,84.236,436.809,60.304z
				 M178.283,317.548l7.686-35.482l27.796,27.796L178.283,317.548z M415.347,125.642L243.283,297.706l-45.158-45.159L370.188,80.483
				c12.872-12.873,33.93-12.445,46.257,1.154C427.758,94.102,427.506,113.483,415.347,125.642z"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <input name="name" id="name" type="text" placeholder="Nom du cours"
                                   value="{{ $course->name }}"
                                   class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12">
                        </div>
                        {{--                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">--}}
                        {{--			                Invalid username field !--}}
                        {{--		                </span>--}}
                    </div>
                    <select name="subject">
                        @foreach($subjects as $subject)
                            @if($subject->id === $course->subject_id)
                                <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                            @endif
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    <div class="flex flex-col mb-4 pt-4">
                        <label
                            class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                            for="desription">résumer du cours</label>
                        <textarea
                            class="appearance-none block w-full h-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            name="description" id="desription">{{ $course->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <style>
        .tox-tinymce {
            min-height: 500px;
        }
    </style>
@endsection

@section('script')

    <script src="https://cdn.tiny.cloud/1/sxpjfz3gpsjci8uw1ppw8lzx2bnuijb4hr8d1j8uvppgfy8u/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#myeditor'
        });
    </script>
@endsection
