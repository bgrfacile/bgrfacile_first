@extends('layouts.templateCreateCourse')


@section('content')
    <form action="{{ route('course.store') }}" method="post">
        @csrf
        @method('post')
        <div class="w-full h-full flex flex-wrap">
            {{--        content course--}}
            <div class="w-2/3 bg-gray-100 p-4">
                <div class="md:w-full px-3">
                    <textarea id="myeditor"
                              class="appearance-none block w-full h-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                              name="content"></textarea>
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
                            <input name="name" id="name" type="text" placeholder="Nom du cours" value=""
                                   class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12">
                        </div>
                        {{--                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">--}}
                        {{--			                Invalid username field !--}}
                        {{--		                </span>--}}
                    </div>
                    <select name="subject">
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    <div class="flex flex-col mb-4 pt-4">
                        <label
                            class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                            for="desription">résumer du cours</label>
                        <textarea
                            class="appearance-none block w-full h-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            name="description" id="desription"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <style>
        .tox-tinymce{
            min-height:500px;
        }
    </style>
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Add New Post</h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <div class="dropdown mr-2">
                    <button class="dropdown-toggle button box text-gray-700 dark:text-gray-300 flex items-center">
                        English <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 ml-2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="dropdown-box w-40">
                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity w-4 h-4 mr-2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                <span class="truncate">English</span>
                            </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity w-4 h-4 mr-2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                <span class="truncate">Indonesian</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button type="button" class="button box text-gray-700 dark:text-gray-300 mr-2 flex items-center ml-auto sm:ml-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-4 h-4 mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> Preview
                </button>
                <div class="dropdown">
                    <button class="dropdown-toggle button text-white bg-theme-1 shadow-md flex items-center">
                        Save <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 ml-2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="dropdown-box w-40">
                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> As New Post
                            </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> As Draft
                            </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to PDF
                            </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to Word
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Post Content -->
            <div class="intro-y col-span-12 lg:col-span-8">
                <input type="text" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Title">
                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-200 dark:bg-dark-2 text-gray-600">
                        <a data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Content
                        </a>
                        <a data-toggle="tab" data-target="#meta-title" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code w-4 h-4 mr-2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> Meta Title
                        </a>
                        <a data-toggle="tab" data-target="#keywords" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left w-4 h-4 mr-2"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg> Keywords
                        </a>
                    </div>
                    <div class="post__content tab-content">
                        <div class="tab-content__pane p-5 active" id="content">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 mr-2"><polyline points="6 9 12 15 18 9"></polyline></svg> Text Content
                                </div>
                                <div class="mt-5">
                                    <div class="editor" name="editor" style="display: none;">
                                        <p>Content of the editor.</p>
                                    </div><div class="ck ck-reset ck-editor ck-rounded-corners" role="application" dir="ltr" lang="en" aria-labelledby="ck-editor__label_e7b2bddc84e0f09ee012005262dfcf9de"><label class="ck ck-label ck-voice-label" id="ck-editor__label_e7b2bddc84e0f09ee012005262dfcf9de">Rich Text Editor</label><div class="ck ck-editor__top ck-reset_all" role="presentation"><div class="ck ck-sticky-panel"><div class="ck ck-sticky-panel__placeholder" style="display: none;"></div><div class="ck ck-sticky-panel__content"><div class="ck ck-toolbar ck-toolbar_grouping" role="toolbar" aria-label="Editor toolbar"><div class="ck ck-toolbar__items"><div class="ck ck-dropdown ck-font-size-dropdown"><button class="ck ck-button ck-off ck-dropdown__button" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e298aa12b985a552c82b7a2c65aebea47" aria-haspopup="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M9.816 11.5L7.038 4.785 4.261 11.5h5.555zm.62 1.5H3.641l-1.666 4.028H.312l5.789-14h1.875l5.789 14h-1.663L10.436 13zm7.55 2.279l.779-.779.707.707-2.265 2.265-2.193-2.265.707-.707.765.765V4.825c0-.042 0-.083.002-.123l-.77.77-.707-.707L17.207 2.5l2.265 2.265-.707.707-.782-.782c.002.043.003.089.003.135v10.454z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Font Size</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e298aa12b985a552c82b7a2c65aebea47">Font Size</span><svg class="ck ck-icon ck-dropdown__arrow" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path></svg></button><div class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"><ul class="ck ck-reset ck-list"><li class="ck ck-list__item"><button class="ck ck-button ck-fontsize-option text-tiny ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ef6113494a3bcfccb3f4c414095aa29c1"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ef6113494a3bcfccb3f4c414095aa29c1">Tiny</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-fontsize-option text-small ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e741c9c2c5468316d023fb7c030c18035"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e741c9c2c5468316d023fb7c030c18035">Small</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-fontsize-option ck-on ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e380d6328a5d568556b5595c8d8298971"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e380d6328a5d568556b5595c8d8298971">Default</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-fontsize-option text-big ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e0a67ebd31ed478c5211844062e106dd4"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e0a67ebd31ed478c5211844062e106dd4">Big</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-fontsize-option text-huge ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e5d640aceedef4939e781fe042ebff4aa"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e5d640aceedef4939e781fe042ebff4aa">Huge</span></button></li></ul></div></div><div class="ck ck-dropdown ck-font-family-dropdown"><button class="ck ck-button ck-off ck-dropdown__button" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ec65e2b1c549f33852fae9d8ec7084a68" aria-haspopup="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M11.03 3h6.149a.75.75 0 1 1 0 1.5h-5.514L11.03 3zm1.27 3h4.879a.75.75 0 1 1 0 1.5h-4.244L12.3 6zm1.27 3h3.609a.75.75 0 1 1 0 1.5h-2.973L13.57 9zm-2.754 2.5L8.038 4.785 5.261 11.5h5.555zm.62 1.5H4.641l-1.666 4.028H1.312l5.789-14h1.875l5.789 14h-1.663L11.436 13z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Font Family</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ec65e2b1c549f33852fae9d8ec7084a68">Font Family</span><svg class="ck ck-icon ck-dropdown__arrow" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path></svg></button><div class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"><ul class="ck ck-reset ck-list"><li class="ck ck-list__item"><button class="ck ck-button ck-on ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e7b0b74670e72fab8e628ecac090bf190"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e7b0b74670e72fab8e628ecac090bf190">Default</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e169c4cdc6321ae547ad7c63535c3f4fb"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: Arial, Helvetica, sans-serif" id="ck-editor__aria-label_e169c4cdc6321ae547ad7c63535c3f4fb">Arial</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_eb1f65f5c8196c8d8dbd44be98f616df6"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: 'Courier New', Courier, monospace" id="ck-editor__aria-label_eb1f65f5c8196c8d8dbd44be98f616df6">Courier New</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e70924bc05d0cc8fe094f29ba7324417d"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: Georgia, serif" id="ck-editor__aria-label_e70924bc05d0cc8fe094f29ba7324417d">Georgia</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ef5379b7664a12cd5b854e4ffabb80a7f"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif" id="ck-editor__aria-label_ef5379b7664a12cd5b854e4ffabb80a7f">Lucida Sans Unicode</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ec5efbd2a7d0e794be56558933e671c47"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: Tahoma, Geneva, sans-serif" id="ck-editor__aria-label_ec5efbd2a7d0e794be56558933e671c47">Tahoma</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e2d59fe3746be7a95fafef2dfe611f8b9"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: 'Times New Roman', Times, serif" id="ck-editor__aria-label_e2d59fe3746be7a95fafef2dfe611f8b9">Times New Roman</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e5f4e6c0b4f3d51499b6bc38fffad1039"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: 'Trebuchet MS', Helvetica, sans-serif" id="ck-editor__aria-label_e5f4e6c0b4f3d51499b6bc38fffad1039">Trebuchet MS</span></button></li><li class="ck ck-list__item"><button class="ck ck-button ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e89d598261bf699ba8ca20bdaa7d531b3"><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" style="font-family: Verdana, Geneva, sans-serif" id="ck-editor__aria-label_e89d598261bf699ba8ca20bdaa7d531b3">Verdana</span></button></li></ul></div></div><div class="ck ck-dropdown ck-color-ui-dropdown"><button class="ck ck-button ck-off ck-dropdown__button" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e7401992783d3701780b99eff760bf2ed" aria-haspopup="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M12.4 10.3L10 4.5l-2.4 5.8h4.8zm.5 1.2H7.1L5.7 15H4.2l5-12h1.6l5 12h-1.5L13 11.5zm3.1 7H4a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Font Color</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e7401992783d3701780b99eff760bf2ed">Font Color</span><svg class="ck ck-icon ck-dropdown__arrow" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path></svg></button><div class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"><div class="ck ck-color-table"><button class="ck ck-button ck-color-table__remove-color ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e0db97f276bf74d0f4744e90bea418af1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M8.636 9.531l-2.758 3.94a.5.5 0 0 0 .122.696l3.224 2.284h1.314l2.636-3.736L8.636 9.53zm.288 8.451L5.14 15.396a2 2 0 0 1-.491-2.786l6.673-9.53a2 2 0 0 1 2.785-.49l3.742 2.62a2 2 0 0 1 .491 2.785l-7.269 10.053-2.147-.066z"></path><path d="M4 18h5.523v-1H4zm-2 0h1v-1H2z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Remove color</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e0db97f276bf74d0f4744e90bea418af1">Remove color</span></button></div></div></div><div class="ck ck-dropdown ck-color-ui-dropdown"><button class="ck ck-button ck-off ck-dropdown__button" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ef0c86b94990533292201052c689e2c31" aria-haspopup="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M4 2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm8.38 9.262H7.62L10 5.506l2.38 5.756zm.532 1.285L14.34 16h1.426L10.804 4H9.196L4.234 16H5.66l1.428-3.453h5.824z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Font Background Color</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ef0c86b94990533292201052c689e2c31">Font Background Color</span><svg class="ck ck-icon ck-dropdown__arrow" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path></svg></button><div class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"><div class="ck ck-color-table"><button class="ck ck-button ck-color-table__remove-color ck-off ck-button_with-text" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ea2fd18d9609cfc8afb96292e3020d4bc"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M8.636 9.531l-2.758 3.94a.5.5 0 0 0 .122.696l3.224 2.284h1.314l2.636-3.736L8.636 9.53zm.288 8.451L5.14 15.396a2 2 0 0 1-.491-2.786l6.673-9.53a2 2 0 0 1 2.785-.49l3.742 2.62a2 2 0 0 1 .491 2.785l-7.269 10.053-2.147-.066z"></path><path d="M4 18h5.523v-1H4zm-2 0h1v-1H2z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Remove color</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ea2fd18d9609cfc8afb96292e3020d4bc">Remove color</span></button></div></div></div><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e6189ee01889585508b2bb294c30ebfa5" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M10.187 17H5.773c-.637 0-1.092-.138-1.364-.415-.273-.277-.409-.718-.409-1.323V4.738c0-.617.14-1.062.419-1.332.279-.27.73-.406 1.354-.406h4.68c.69 0 1.288.041 1.793.124.506.083.96.242 1.36.478.341.197.644.447.906.75a3.262 3.262 0 0 1 .808 2.162c0 1.401-.722 2.426-2.167 3.075C15.05 10.175 16 11.315 16 13.01a3.756 3.756 0 0 1-2.296 3.504 6.1 6.1 0 0 1-1.517.377c-.571.073-1.238.11-2 .11zm-.217-6.217H7v4.087h3.069c1.977 0 2.965-.69 2.965-2.072 0-.707-.256-1.22-.768-1.537-.512-.319-1.277-.478-2.296-.478zM7 5.13v3.619h2.606c.729 0 1.292-.067 1.69-.2a1.6 1.6 0 0 0 .91-.765c.165-.267.247-.566.247-.897 0-.707-.26-1.176-.778-1.409-.519-.232-1.31-.348-2.375-.348H7z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Bold (CTRL+B)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e6189ee01889585508b2bb294c30ebfa5">Bold</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e9e4d8a30c419e30120cf2aa1df3f334f" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M9.586 14.633l.021.004c-.036.335.095.655.393.962.082.083.173.15.274.201h1.474a.6.6 0 1 1 0 1.2H5.304a.6.6 0 0 1 0-1.2h1.15c.474-.07.809-.182 1.005-.334.157-.122.291-.32.404-.597l2.416-9.55a1.053 1.053 0 0 0-.281-.823 1.12 1.12 0 0 0-.442-.296H8.15a.6.6 0 0 1 0-1.2h6.443a.6.6 0 1 1 0 1.2h-1.195c-.376.056-.65.155-.823.296-.215.175-.423.439-.623.79l-2.366 9.347z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Italic (CTRL+I)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e9e4d8a30c419e30120cf2aa1df3f334f">Italic</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ec3ef1a8a8e46248146505f28c82f3c4d" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M3 18v-1.5h14V18zm2.2-8V3.6c0-.4.4-.6.8-.6.3 0 .7.2.7.6v6.2c0 2 1.3 2.8 3.2 2.8 1.9 0 3.4-.9 3.4-2.9V3.6c0-.3.4-.5.8-.5.3 0 .7.2.7.5V10c0 2.7-2.2 4-4.9 4-2.6 0-4.7-1.2-4.7-4z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Underline (CTRL+U)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ec3ef1a8a8e46248146505f28c82f3c4d">Underline</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e79ab8dc90342b0edc5b0e84635c5e531" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M7 16.4c-.8-.4-1.5-.9-2.2-1.5a.6.6 0 0 1-.2-.5l.3-.6h1c1 1.2 2.1 1.7 3.7 1.7 1 0 1.8-.3 2.3-.6.6-.4.6-1.2.6-1.3.2-1.2-.9-2.1-.9-2.1h2.1c.3.7.4 1.2.4 1.7v.8l-.6 1.2c-.6.8-1.1 1-1.6 1.2a6 6 0 0 1-2.4.6c-1 0-1.8-.3-2.5-.6zM6.8 9L6 8.3c-.4-.5-.5-.8-.5-1.6 0-.7.1-1.3.5-1.8.4-.6 1-1 1.6-1.3a6.3 6.3 0 0 1 4.7 0 4 4 0 0 1 1.7 1l.3.7c0 .1.2.4-.2.7-.4.2-.9.1-1 0a3 3 0 0 0-1.2-1c-.4-.2-1-.3-2-.4-.7 0-1.4.2-2 .6-.8.6-1 .8-1 1.5 0 .8.5 1 1.2 1.5.6.4 1.1.7 1.9 1H6.8z"></path><path d="M3 10.5V9h14v1.5z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Strikethrough (CTRL+SHIFT+X)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e79ab8dc90342b0edc5b0e84635c5e531">Strikethrough</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e1af3835e4ebf6d3a9742772fb82e5149" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M12.5 5.7l5.2 3.9v1.3l-5.6 4c-.1.2-.3.2-.5.2-.3-.1-.6-.7-.6-1l.3-.4 4.7-3.5L11.5 7l-.2-.2c-.1-.3-.1-.6 0-.8.2-.2.5-.4.8-.4a.8.8 0 0 1 .4.1zm-5.2 0L2 9.6v1.3l5.6 4c.1.2.3.2.5.2.3-.1.7-.7.6-1 0-.1 0-.3-.2-.4l-5-3.5L8.2 7l.2-.2c.1-.3.1-.6 0-.8-.2-.2-.5-.4-.8-.4a.8.8 0 0 0-.3.1z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Code</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e1af3835e4ebf6d3a9742772fb82e5149">Code</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_eeb7704900c99ecea475500d9789bee8f" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M7.03 10.349l3.818-3.819a.8.8 0 1 1 1.132 1.132L8.16 11.48l3.819 3.818a.8.8 0 1 1-1.132 1.132L7.03 12.61l-3.818 3.82a.8.8 0 1 1-1.132-1.132L5.9 11.48 2.08 7.662A.8.8 0 1 1 3.212 6.53l3.818 3.82zm8.147 7.829h2.549c.254 0 .447.05.58.152a.49.49 0 0 1 .201.413.54.54 0 0 1-.159.393c-.105.108-.266.162-.48.162h-3.594c-.245 0-.435-.066-.572-.197a.621.621 0 0 1-.205-.463c0-.114.044-.265.132-.453a1.62 1.62 0 0 1 .288-.444c.433-.436.824-.81 1.172-1.122.348-.312.597-.517.747-.615.267-.183.49-.368.667-.553.177-.185.312-.375.405-.57.093-.194.139-.384.139-.57a1.008 1.008 0 0 0-.554-.917 1.197 1.197 0 0 0-.56-.133c-.426 0-.761.182-1.005.546a2.332 2.332 0 0 0-.164.39 1.609 1.609 0 0 1-.258.488c-.096.114-.237.17-.423.17a.558.558 0 0 1-.405-.156.568.568 0 0 1-.161-.427c0-.218.05-.446.151-.683.101-.238.252-.453.452-.646s.454-.349.762-.467a2.998 2.998 0 0 1 1.081-.178c.498 0 .923.076 1.274.228a1.916 1.916 0 0 1 1.004 1.032 1.984 1.984 0 0 1-.156 1.794c-.2.32-.405.572-.613.754-.208.182-.558.468-1.048.857-.49.39-.826.691-1.008.906a2.703 2.703 0 0 0-.24.309z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Subscript</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_eeb7704900c99ecea475500d9789bee8f">Subscript</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e4a5a11388d4e53a2ded818f5a1afe587" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M15.677 8.678h2.549c.254 0 .447.05.58.152a.49.49 0 0 1 .201.413.54.54 0 0 1-.159.393c-.105.108-.266.162-.48.162h-3.594c-.245 0-.435-.066-.572-.197a.621.621 0 0 1-.205-.463c0-.114.044-.265.132-.453a1.62 1.62 0 0 1 .288-.444c.433-.436.824-.81 1.172-1.122.348-.312.597-.517.747-.615.267-.183.49-.368.667-.553.177-.185.312-.375.405-.57.093-.194.139-.384.139-.57a1.008 1.008 0 0 0-.554-.917 1.197 1.197 0 0 0-.56-.133c-.426 0-.761.182-1.005.546a2.332 2.332 0 0 0-.164.39 1.609 1.609 0 0 1-.258.488c-.096.114-.237.17-.423.17a.558.558 0 0 1-.405-.156.568.568 0 0 1-.161-.427c0-.218.05-.446.151-.683.101-.238.252-.453.452-.646s.454-.349.762-.467a2.998 2.998 0 0 1 1.081-.178c.498 0 .923.076 1.274.228a1.916 1.916 0 0 1 1.004 1.032 1.984 1.984 0 0 1-.156 1.794c-.2.32-.405.572-.613.754-.208.182-.558.468-1.048.857-.49.39-.826.691-1.008.906a2.703 2.703 0 0 0-.24.309zM7.03 10.349l3.818-3.819a.8.8 0 1 1 1.132 1.132L8.16 11.48l3.819 3.818a.8.8 0 1 1-1.132 1.132L7.03 12.61l-3.818 3.82a.8.8 0 1 1-1.132-1.132L5.9 11.48 2.08 7.662A.8.8 0 1 1 3.212 6.53l3.818 3.82z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Superscript</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e4a5a11388d4e53a2ded818f5a1afe587">Superscript</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e0df09acff92059f923ea752714461dd4" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M11.077 15l.991-1.416a.75.75 0 1 1 1.229.86l-1.148 1.64a.748.748 0 0 1-.217.206 5.251 5.251 0 0 1-8.503-5.955.741.741 0 0 1 .12-.274l1.147-1.639a.75.75 0 1 1 1.228.86L4.933 10.7l.006.003a3.75 3.75 0 0 0 6.132 4.294l.006.004zm5.494-5.335a.748.748 0 0 1-.12.274l-1.147 1.639a.75.75 0 1 1-1.228-.86l.86-1.23a3.75 3.75 0 0 0-6.144-4.301l-.86 1.229a.75.75 0 0 1-1.229-.86l1.148-1.64a.748.748 0 0 1 .217-.206 5.251 5.251 0 0 1 8.503 5.955zm-4.563-2.532a.75.75 0 0 1 .184 1.045l-3.155 4.505a.75.75 0 1 1-1.229-.86l3.155-4.506a.75.75 0 0 1 1.045-.184z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Link (Ctrl+K)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e0df09acff92059f923ea752714461dd4">Link</span></button><button class="ck ck-button ck-disabled ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e1cc267e85fa84363f116798e2ab25321" aria-disabled="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M5.042 9.367l2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Undo (CTRL+Z)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e1cc267e85fa84363f116798e2ab25321">Undo</span></button><button class="ck ck-button ck-disabled ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_eb770500abd2fc505416f72af77c05191" aria-disabled="true"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M14.958 9.367l-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Redo (CTRL+Y)</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_eb770500abd2fc505416f72af77c05191">Redo</span></button><span class="ck-file-dialog-button"><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e692f649b840a6a300e0268acc328e2fd"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M6.91 10.54c.26-.23.64-.21.88.03l3.36 3.14 2.23-2.06a.64.64 0 0 1 .87 0l2.52 2.97V4.5H3.2v10.12l3.71-4.08zm10.27-7.51c.6 0 1.09.47 1.09 1.05v11.84c0 .59-.49 1.06-1.09 1.06H2.79c-.6 0-1.09-.47-1.09-1.06V4.08c0-.58.49-1.05 1.1-1.05h14.38zm-5.22 5.56a1.96 1.96 0 1 1 3.4-1.96 1.96 1.96 0 0 1-3.4 1.96z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Insert image</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e692f649b840a6a300e0268acc328e2fd">Insert image</span></button><input class="ck-hidden" type="file" tabindex="-1" accept="image/jpeg,image/png,image/gif,image/bmp,image/webp,image/tiff" multiple="true"></span><div class="ck ck-dropdown ck-toolbar-dropdown"><div class="ck ck-splitbutton ck-dropdown__button"><button class="ck ck-button ck-off ck-splitbutton__action" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e680871ecd9f01dbc907c3e18b8d30578" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.798 1.59L3.002 12.875l1.895 1.852 2.521 1.402 6.997-12.194z" style="fill: var(--ck-highlight-marker-yellow);"></path><path d="M2.556 16.727l.234-.348c-.297-.151-.462-.293-.498-.426-.036-.137.002-.416.115-.837.094-.25.15-.449.169-.595a4.495 4.495 0 0 0 0-.725c-.209-.621-.303-1.041-.284-1.26.02-.218.178-.506.475-.862l6.77-9.414c.539-.91 1.605-.85 3.199.18 1.594 1.032 2.188 1.928 1.784 2.686l-5.877 10.36c-.158.412-.333.673-.526.782-.193.108-.604.179-1.232.21-.362.131-.608.237-.738.318-.13.081-.305.238-.526.47-.293.265-.504.397-.632.397-.096 0-.27-.075-.524-.226l-.31.41-1.6-1.12zm-.279.415l1.575 1.103-.392.515H1.19l1.087-1.618zm8.1-13.656l-4.953 6.9L8.75 12.57l4.247-7.574c.175-.25-.188-.647-1.092-1.192-.903-.546-1.412-.652-1.528-.32zM8.244 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Highlight</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e680871ecd9f01dbc907c3e18b8d30578"></span></button><button class="ck ck-button ck-off ck-splitbutton__arrow" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e77ded42908b076aef17c50ff74a565eb" aria-haspopup="true" aria-expanded="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path></svg><span class="ck ck-tooltip ck-tooltip_s ck-hidden"><span class="ck ck-tooltip__text"></span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e77ded42908b076aef17c50ff74a565eb"></span></button></div><div class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"><div class="ck ck-toolbar" role="toolbar" aria-label="Text highlight toolbar"><div class="ck ck-toolbar__items"><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ec6495e679d79749db54291a0633f6d8c" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.798 1.59L3.002 12.875l1.895 1.852 2.521 1.402 6.997-12.194z" style="fill: var(--ck-highlight-marker-yellow);"></path><path d="M2.556 16.727l.234-.348c-.297-.151-.462-.293-.498-.426-.036-.137.002-.416.115-.837.094-.25.15-.449.169-.595a4.495 4.495 0 0 0 0-.725c-.209-.621-.303-1.041-.284-1.26.02-.218.178-.506.475-.862l6.77-9.414c.539-.91 1.605-.85 3.199.18 1.594 1.032 2.188 1.928 1.784 2.686l-5.877 10.36c-.158.412-.333.673-.526.782-.193.108-.604.179-1.232.21-.362.131-.608.237-.738.318-.13.081-.305.238-.526.47-.293.265-.504.397-.632.397-.096 0-.27-.075-.524-.226l-.31.41-1.6-1.12zm-.279.415l1.575 1.103-.392.515H1.19l1.087-1.618zm8.1-13.656l-4.953 6.9L8.75 12.57l4.247-7.574c.175-.25-.188-.647-1.092-1.192-.903-.546-1.412-.652-1.528-.32zM8.244 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Yellow marker</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ec6495e679d79749db54291a0633f6d8c">Yellow marker</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e54ffc96c378b69102abece690db144ff" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.798 1.59L3.002 12.875l1.895 1.852 2.521 1.402 6.997-12.194z" style="fill: var(--ck-highlight-marker-green);"></path><path d="M2.556 16.727l.234-.348c-.297-.151-.462-.293-.498-.426-.036-.137.002-.416.115-.837.094-.25.15-.449.169-.595a4.495 4.495 0 0 0 0-.725c-.209-.621-.303-1.041-.284-1.26.02-.218.178-.506.475-.862l6.77-9.414c.539-.91 1.605-.85 3.199.18 1.594 1.032 2.188 1.928 1.784 2.686l-5.877 10.36c-.158.412-.333.673-.526.782-.193.108-.604.179-1.232.21-.362.131-.608.237-.738.318-.13.081-.305.238-.526.47-.293.265-.504.397-.632.397-.096 0-.27-.075-.524-.226l-.31.41-1.6-1.12zm-.279.415l1.575 1.103-.392.515H1.19l1.087-1.618zm8.1-13.656l-4.953 6.9L8.75 12.57l4.247-7.574c.175-.25-.188-.647-1.092-1.192-.903-.546-1.412-.652-1.528-.32zM8.244 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Green marker</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e54ffc96c378b69102abece690db144ff">Green marker</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e2bf3b567c09198ba5988aff106d52ec8" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.798 1.59L3.002 12.875l1.895 1.852 2.521 1.402 6.997-12.194z" style="fill: var(--ck-highlight-marker-pink);"></path><path d="M2.556 16.727l.234-.348c-.297-.151-.462-.293-.498-.426-.036-.137.002-.416.115-.837.094-.25.15-.449.169-.595a4.495 4.495 0 0 0 0-.725c-.209-.621-.303-1.041-.284-1.26.02-.218.178-.506.475-.862l6.77-9.414c.539-.91 1.605-.85 3.199.18 1.594 1.032 2.188 1.928 1.784 2.686l-5.877 10.36c-.158.412-.333.673-.526.782-.193.108-.604.179-1.232.21-.362.131-.608.237-.738.318-.13.081-.305.238-.526.47-.293.265-.504.397-.632.397-.096 0-.27-.075-.524-.226l-.31.41-1.6-1.12zm-.279.415l1.575 1.103-.392.515H1.19l1.087-1.618zm8.1-13.656l-4.953 6.9L8.75 12.57l4.247-7.574c.175-.25-.188-.647-1.092-1.192-.903-.546-1.412-.652-1.528-.32zM8.244 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Pink marker</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e2bf3b567c09198ba5988aff106d52ec8">Pink marker</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ef99d99f1da8885f5d7d0836fa376dccb" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.798 1.59L3.002 12.875l1.895 1.852 2.521 1.402 6.997-12.194z" style="fill: var(--ck-highlight-marker-blue);"></path><path d="M2.556 16.727l.234-.348c-.297-.151-.462-.293-.498-.426-.036-.137.002-.416.115-.837.094-.25.15-.449.169-.595a4.495 4.495 0 0 0 0-.725c-.209-.621-.303-1.041-.284-1.26.02-.218.178-.506.475-.862l6.77-9.414c.539-.91 1.605-.85 3.199.18 1.594 1.032 2.188 1.928 1.784 2.686l-5.877 10.36c-.158.412-.333.673-.526.782-.193.108-.604.179-1.232.21-.362.131-.608.237-.738.318-.13.081-.305.238-.526.47-.293.265-.504.397-.632.397-.096 0-.27-.075-.524-.226l-.31.41-1.6-1.12zm-.279.415l1.575 1.103-.392.515H1.19l1.087-1.618zm8.1-13.656l-4.953 6.9L8.75 12.57l4.247-7.574c.175-.25-.188-.647-1.092-1.192-.903-.546-1.412-.652-1.528-.32zM8.244 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Blue marker</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ef99d99f1da8885f5d7d0836fa376dccb">Blue marker</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e145c85c77421c2b055d4c65d626a4cdc" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.126 2.268L2.002 13.874l1.895 1.852 2.521 1.402L14.47 5.481l-1.543-2.568-2.801-.645z" style="fill: var(--ck-highlight-pen-red);"></path><path d="M4.5 18.088l-2.645-1.852-.04-2.95-.006-.005.006-.008v-.025l.011.008L8.73 2.97c.165-.233.356-.417.567-.557l-1.212.308L4.604 7.9l-.83-.558 3.694-5.495 2.708-.69 1.65 1.145.046.018.85-1.216 2.16 1.512-.856 1.222c.828.967 1.144 2.141.432 3.158L7.55 17.286l.006.005-3.055.797H4.5zm-.634.166l-1.976.516-.026-1.918 2.002 1.402zM9.968 3.817l-.006-.004-6.123 9.184 3.277 2.294 6.108-9.162.005.003c.317-.452-.16-1.332-1.064-1.966-.891-.624-1.865-.776-2.197-.349zM8.245 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Red pen</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e145c85c77421c2b055d4c65d626a4cdc">Red pen</span></button><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_e4fcaf940eef4b1028f39d7859069494f" aria-pressed="false"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path class="ck-icon__fill" d="M10.126 2.268L2.002 13.874l1.895 1.852 2.521 1.402L14.47 5.481l-1.543-2.568-2.801-.645z" style="fill: var(--ck-highlight-pen-green);"></path><path d="M4.5 18.088l-2.645-1.852-.04-2.95-.006-.005.006-.008v-.025l.011.008L8.73 2.97c.165-.233.356-.417.567-.557l-1.212.308L4.604 7.9l-.83-.558 3.694-5.495 2.708-.69 1.65 1.145.046.018.85-1.216 2.16 1.512-.856 1.222c.828.967 1.144 2.141.432 3.158L7.55 17.286l.006.005-3.055.797H4.5zm-.634.166l-1.976.516-.026-1.918 2.002 1.402zM9.968 3.817l-.006-.004-6.123 9.184 3.277 2.294 6.108-9.162.005.003c.317-.452-.16-1.332-1.064-1.966-.891-.624-1.865-.776-2.197-.349zM8.245 18.5L9.59 17h9.406v1.5H8.245z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Green pen</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_e4fcaf940eef4b1028f39d7859069494f">Green pen</span></button><span class="ck ck-toolbar__separator"></span><button class="ck ck-button ck-off" type="button" tabindex="-1" aria-labelledby="ck-editor__aria-label_ea8c01af0582f6c1adec27a85480a61bb"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M8.636 9.531l-2.758 3.94a.5.5 0 0 0 .122.696l3.224 2.284h1.314l2.636-3.736L8.636 9.53zm.288 8.451L5.14 15.396a2 2 0 0 1-.491-2.786l6.673-9.53a2 2 0 0 1 2.785-.49l3.742 2.62a2 2 0 0 1 .491 2.785l-7.269 10.053-2.147-.066z"></path><path d="M4 18h5.523v-1H4zm-2 0h1v-1H2z"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Remove highlight</span></span><span class="ck ck-button__label" id="ck-editor__aria-label_ea8c01af0582f6c1adec27a85480a61bb">Remove highlight</span></button></div></div></div></div></div></div></div></div></div><div class="ck ck-editor__main" role="presentation"><div class="ck-blurred ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline" lang="en" dir="ltr" role="textbox" aria-label="Rich Text Editor, main" contenteditable="true"><p>Content of the editor.</p></div></div></div>
                                </div>
                            </div>
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 mr-2"><polyline points="6 9 12 15 18 9"></polyline></svg> Caption &amp; Images
                                </div>
                                <div class="mt-5">
                                    <div>
                                        <label>Caption</label>
                                        <input type="text" class="input w-full border mt-2" placeholder="Write caption">
                                    </div>
                                    <div class="mt-3">
                                        <label>Upload Image</label>
                                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md mt-3 pt-4">
                                            <div class="flex flex-wrap px-4">
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/preview-6.jpg">
                                                    <div class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </div>
                                                </div>
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/preview-15.jpg">
                                                    <div class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </div>
                                                </div>
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/preview-4.jpg">
                                                    <div class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </div>
                                                </div>
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/preview-10.jpg">
                                                    <div class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image w-4 h-4 mr-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file</span> or drag and drop
                                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Content -->
            <!-- BEGIN: Post Info -->
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">
                    <div>
                        <label>Written By</label>
                        <div class="dropdown mt-2">
                            <button class="dropdown-toggle button w-full border dark:bg-dark-2 dark:border-dark-4 flex items-center">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-15.jpg">
                                </div>
                                <div class="ml-8 pl-1 truncate">Sylvester Stallone</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 ml-auto"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="dropdown-box w-full">
                                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-15.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Sylvester Stallone</div>
                                    </a>
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Russell Crowe</div>
                                    </a>
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-10.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Kevin Spacey</div>
                                    </a>
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Al Pacino</div>
                                    </a>
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="http://127.0.0.1:8002/dist/images/profile-10.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Kevin Spacey</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Post Date</label>
                        <input class="datepicker input w-full border mt-2" data-single-mode="true">
                        <div class="litepicker-backdrop"></div></div>
                    <div class="mt-3">
                        <label>Categories</label>
                        <div class="mt-2">
                            <select data-placeholder="Select categories" class="tail-select w-full" multiple="" data-select-hidden="0" data-tail-select="tail-1" style="display: none;">
                                <option value="1" selected="selected">Horror</option>
                                <option value="2">Sci-fi</option>
                                <option value="3" selected="selected">Action</option>
                                <option value="4">Drama</option>
                                <option value="5">Comedy</option>
                            </select>
                            <div class="tail-select tail-select w-full hide-selected hide-disabled multiple" tabindex="0"><div class="select-label tail-select-container"><div class="select-handle" data-key="1" data-group="#">Horror</div><div class="select-handle" data-key="3" data-group="#">Action</div></div><div class="select-dropdown" style="max-height: 350px;"><div class="dropdown-inner"><ul class="dropdown-optgroup" data-group="#"><li class="dropdown-option selected" data-key="1" data-group="#">Horror</li><li class="dropdown-option" data-key="2" data-group="#">Sci-fi</li><li class="dropdown-option selected" data-key="3" data-group="#">Action</li><li class="dropdown-option" data-key="4" data-group="#">Drama</li><li class="dropdown-option" data-key="5" data-group="#">Comedy</li></ul></div></div></div></div>
                    </div>
                    <div class="mt-3">
                        <label>Tags</label>
                        <div class="mt-2">
                            <select data-placeholder="Select your favorite actors" class="tail-select w-full" multiple="" data-select-hidden="0" data-tail-select="tail-2" style="display: none;">
                                <option value="1" selected="selected">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3" selected="selected">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </select>
                            <div class="tail-select tail-select w-full hide-selected hide-disabled multiple" tabindex="0"><div class="select-label tail-select-container"><div class="select-handle" data-key="1" data-group="#">Leonardo DiCaprio</div><div class="select-handle" data-key="3" data-group="#">Robert Downey, Jr</div></div><div class="select-dropdown" style="max-height: 350px;"><div class="dropdown-inner"><ul class="dropdown-optgroup" data-group="#"><li class="dropdown-option selected" data-key="1" data-group="#">Leonardo DiCaprio</li><li class="dropdown-option" data-key="2" data-group="#">Johnny Deep</li><li class="dropdown-option selected" data-key="3" data-group="#">Robert Downey, Jr</li><li class="dropdown-option" data-key="4" data-group="#">Samuel L. Jackson</li><li class="dropdown-option" data-key="5" data-group="#">Morgan Freeman</li></ul></div></div></div></div>
                    </div>
                    <div class="mt-3">
                        <label>Published</label>
                        <div class="mt-2">
                            <input class="input input--switch border" type="checkbox">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Show Author Name</label>
                        <div class="mt-2">
                            <input class="input input--switch border" type="checkbox">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Info -->
        </div>
    </div>
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
