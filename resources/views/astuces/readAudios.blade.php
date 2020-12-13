@extends('layouts.readAudio')
{{--@section('title')--}}
{{--    nom audio--}}
{{--@endsection--}}

{{--@section('ressourceCSS')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/styleshowler.css') }}">--}}
{{--@endsection--}}

@section('content')
    <div class="">
        <div id="title">
            <span id="track"></span>
            <div class="flex flex-row justify-center items-center">
                <div id="timer">0:00</div>
                <a href="/" class="text-gray-900 p-4 rounded-full bg-white shadow my-2">
                    <svg class="text-gray-900 h-9 w-9" viewBox="0 0 491.398 491.398">
                        <g>
                            <g id="Icons_19_">
                                <path d="M481.765,220.422L276.474,15.123c-16.967-16.918-44.557-16.942-61.559,0.023L9.626,220.422
			c-12.835,12.833-12.835,33.65,0,46.483c12.843,12.842,33.646,12.842,46.487,0l27.828-27.832v214.872
			c0,19.343,15.682,35.024,35.027,35.024h74.826v-97.62c0-7.584,6.146-13.741,13.743-13.741h76.352
			c7.59,0,13.739,6.157,13.739,13.741v97.621h74.813c19.346,0,35.027-15.681,35.027-35.024V239.091l27.812,27.815
			c6.425,6.421,14.833,9.63,23.243,9.63c8.408,0,16.819-3.209,23.242-9.63C494.609,254.072,494.609,233.256,481.765,220.422z"/>
                            </g>
                        </g>

                    </svg>

                </a>
            </div>

            <div id="duration">0:00</div>
        </div>

        <!-- Controls -->
        <div class="controlsOuter">
            <div class="controlsInner">
                <div id="loading"></div>
                <div class="btn" id="playBtn"></div>
                <div class="btn" id="pauseBtn"></div>
                <div class="btn" id="prevBtn"></div>
                <div class="btn" id="nextBtn"></div>
            </div>
            <div class="btn" id="playlistBtn"></div>
            <div class="btn" id="volumeBtn"></div>
        </div>

        <!-- Progress -->
        <div id="waveform"></div>
        <div id="bar"></div>
        <div id="progress"></div>

        <!-- Playlist -->
        <div id="playlist">
            <div id="list"></div>
        </div>

        <!-- Volume -->
        <div id="volume" class="fadeout">
            <div id="barFull" class="bar"></div>
            <div id="barEmpty" class="bar"></div>
            <div id="sliderBtn"></div>
        </div>

    </div>
@endsection


