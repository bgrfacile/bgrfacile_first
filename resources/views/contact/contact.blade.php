@extends('layouts.base')

@section('title')
    contactez-nous
@endsection

@section('ressourceCSS')
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/solid.css">
    <style>
        :root {
            --bc: #f9f3ee;
            --bc-dark: #141412;
            --primary: rgb(161, 166, 252);
            --accent1: rgba(251, 161, 229, 1);
            --accent2: rgba(241, 196, 161, 1);
            --white: #ffffff;
            --black: #000000;
            /* Gray Colors */
            --bc-gray: #ede8e4;
            --gray: #9e9d9b;
            --gray-dark: #1c1a19;
            /* Gradients */
            --pace: linear-gradient(90deg, rgba(161, 166, 252, 1) 0%, rgba(251, 161, 229, 1) 50%, rgba(241, 196, 161, 1) 100%);
            /* Sizes */
            --heading: 3.4rem;
            --paragraph: 1.1rem;
            --button-small: 1rem;
            /* Fonts */
            --font-main: "Poppins";
        }

        * {
            box-sizing: border-box;
        }

        main {
            min-height: 100vh;
        }

        textarea {
            min-height: 10em;
            font-family: var(--font-main);
            transition: opacity .15s ease-in-out;
            resize: none;
        }

        textarea::-webkit-scrollbar-track {
            background-color: transparent;
        }

        textarea::-webkit-scrollbar {
            width: 8px;
            background-color: transparent;
        }

        textarea::-webkit-scrollbar-thumb {
            border-radius: 5em;
            background-color: var(--primary);
        }

        /* Global classes */
        .space {
            min-height: 25vh;
        }

        .flexbox {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flexbox-left {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .flexbox-right {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .flexbox-col {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .flexbox-col-left {
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            align-items: flex-start;
        }

        .flexbox-col-right {
            display: flex;
            justify-content: flex-end;
            flex-direction: column;
            align-items: flex-end;
        }

        .flexbox-left-start {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .flexbox-space {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Form */
        .form-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form {
            width: 75%;
        }

        .form {
            width: 100%;
        }

        .form-title {
            margin: 1em 0 0 0;
            font-size: var(--heading);
            font-weight: 800;
        }

        .form-undertitle {
            margin: 0 0 1em 0;
            color: var(--gray);
            font-weight: 300;
        }

        .send-success {
            width: 100%;
            padding: 1em;
            border-radius: 4px;
            background-color: var(--light-green);
            color: var(--white);
        }

        .send-error {
            width: 100%;
            padding: 1em;
            border-radius: 4px;
            background-color: var(--red);
            color: var(--white);
        }

        .form-text {
            margin: 1em 0 .75em 2.2em;
            color: var(--gray-dark);
            font-weight: 300;
        }

        .form-input-grid {
            margin: 1.5em 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 1.5em;
        }

        .form-input-max {
            margin: 1.5em 0;
        }

        .form-input-wrapper {
            width: 100%;
            position: relative;
        }

        .form-input-wrapper i {
            left: 1em;
            position: absolute;
            font-size: 1.88rem;
            color: var(--primary);
            text-shadow: 0 0 4px rgba(161, 166, 252, .5);
        }

        #textarea textarea {
            border-radius: 2.25em;
        }

        #textarea i {
            top: .6em;
        }

        .form-input {
            width: 100%;
            padding: 1.2em 1.2em 1.2em 3.6em;
            font-size: 1.22rem;
            border-radius: 5em;
            box-shadow: 0 5px 20px 0 rgba(237, 232, 228, .8);
            background-color: var(--bc-gray);
            border: 2px solid var(--bc-gray);
            transition: border .15s ease-in-out;
        }

        .form-input:hover {
            border: 2px solid var(--primary);
        }

        .form-input:focus {
            outline: none;
            border: 2px solid var(--primary);
        }

        #form-button {
            font-size: 1.22rem;
        }

        /* Button */
        .button-wrapper {
            margin: 2em 0 1em 0;
        }

        .button, .btn-secondary {
            margin: 0;
            width: 100%;
            position: relative;
            padding: 1.2em 1.8em;
            letter-spacing: .1em;
            text-align: center;
            color: var(--white);
            font-size: var(--button-small);
            background: var(--pace);
            background-size: 500%;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transform: scaleX(1);
            transition: transform .3s cubic-bezier(.175, .885, .32, 1.275), filter .3s cubic-bezier(.175, .885, .32, 1.275), bottom .3s cubic-bezier(.175, .885, .32, 1.275), background-position 3s cubic-bezier(.455, .03, .515, .955), -webkit-transform .3s cubic-bezier(.175, .885, .32, 1.275), -webkit-filter .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .button {
            transition: transform .3s cubic-bezier(.175, .885, .32, 1.275), bottom .3s cubic-bezier(.175, .885, .32, 1.275), background-position 3s cubic-bezier(.455, .03, .515, .955), -webkit-transform .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .button, .button .btn-secondary {
            background-position: 0 50%;
            bottom: 0;
        }

        .button .btn-secondary {
            left: 0;
            width: 100%;
            position: absolute;
            filter: blur(1rem);
            opacity: .8;
            z-index: -1;
            transform: scale3d(.9, .9, 1);
            transition: transform .3s cubic-bezier(.175, .885, .32, 1.275), filter .3s cubic-bezier(.175, .885, .32, 1.275), bottom .3s cubic-bezier(.175, .885, .32, 1.275), background-position 3s cubic-bezier(.455, .03, .515, .955), -webkit-transform .3s cubic-bezier(.175, .885, .32, 1.275), -webkit-filter .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .button:focus, .button:hover {
            transform: scale3d(1.1, 1.1, 1);
            background-position: 100% 50%;
            outline: none;
            bottom: 2px;
        }

        .button:focus .btn-secondary, .button:hover .btn-secondary {
            background-position: 100% 50%;
            filter: blur(1.6rem);
            bottom: -5px;
        }

        /* Media Rules */
        @media only screen and (max-width: 1660px) {
            :root {
                /* Sizes */
                --heading: 3rem;
            }
        }

        @media only screen and (max-width: 1456px) {
            :root {
                /* Sizes */
                --heading: 2.8rem;
            }
        }

        @media only screen and (max-width: 1024px) {
            :root {
                /* Sizes */
                --heading: 2.4rem;
            }

            /* Form */
            #form {
                width: 85%;
            }
        }

        @media only screen and (max-width: 756px) {
            :root {
                /* Sizes */
                --heading: 2.2rem;
            }

            /* Form */
            #form {
                width: 90%;
            }
        }

        @media only screen and (max-width: 576px) {
            /* Form */
            .form-input-grid {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 1fr;
                grid-column-gap: 0;
                grid-row-gap: 1.5em;
            }
        }

        @media only screen and (max-width: 496px) {
            :root {
                /* Sizes */
                --heading: 1.75rem;
            }
        }
    </style>
@endsection


@section('content')
    <main class="flexbox-col">
        <div class="form-wrapper">
            <form id="form" method="post" action="{{ route('contact.send') }}">
                @csrf
                <h3 class="form-title">Nous contactez</h3>
                <p style="color: #9e9d9b">Ce formulaire vous permet de nous contactez directement. Vous pouvez aussi
                    utilisez nous reseaux sociaux</p>
                <p class="form-undertitle text-red-400">Les champs marqués "*" sont obligatoires.</p>
                @if(Session::has('message_sent'))
                    <div
                            style="color: #65c57a;
                                padding: 2rem;
                                background: aliceblue;
                                border-radius: 6px;
                                font-size: 16px;
                                font-weight: bold;">
                        {{ Session::get('message_sent') }}
                    </div>
                @endif
                <div class="form-input-max">
                    <p class="form-text">Votre nom*</p>
                    <div class="form-input-wrapper flexbox-left">
                        <i class="uil uil-user"></i>
                        <input class="form-input" id="uname" name="name" type="text" placeholder="votre nom"
                               aria-label="" required>
                    </div>
                </div>
                <div class="form-input-max">
                    <p class="form-text">Email*</p>
                    <div class="form-input-wrapper flexbox-left">
                        <i class="uil uil-at"></i>
                        <input class="form-input" id="email" name="email" type="email" placeholder="Email"
                               aria-label="" required>
                    </div>
                </div>
                <div class="form-input-max">
                    <p class="form-text">Message* (Max 500)</p>
                    <div id="textarea" class="form-input-wrapper flexbox-left-start">
                        <i class="uil uil-comment-dots"></i>
                        <textarea class="form-input" id="message" name="msg" placeholder="votre message"
                                  maxlength="500" aria-label="" required></textarea>
                    </div>
                </div>
                <div class="form-input-max flexbox-left">
                    <div class="button-wrapper">
                        <button id="form-button" type="submit" class="button btn-primary"><i
                                    class="uil uil-envelope-heart"></i> envoyer
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </main>

@endsection
