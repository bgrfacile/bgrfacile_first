@extends('layouts.front')

@section('baniere')
@endsection

@section('content')
    {{--presentation--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto mb-10 px-4 pt-8 text-center">
            <h1 class="text-6xl font-bold">écoles en ligne</h1>
            <p class="text-xl mb-8">
                l'école en ligne que propose <strong>bgrfacile</strong>
                est tout simplement la présence d'une école traditionnelle de la place sur la toile internet et
                accessible à tous avec des avantages
                <a href="#fonctionnalite">décrites ici</a>
            </p>
            <p class="flex justify-center flex-wrap mb-8">
                <a href="#"
                   class="mx-auto lg:mx-0 hover:underline font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48 bg-blue-600 text-white">
                    cree votre école
                </a>
                <a href="#"
                   class="inline-block mx-auto lg:mx-0 hover:underline bg-gray-50 text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8">
                    Acceder à votre école
                </a>
            </p>
            <div class="w-11/12 mx-auto">
                <iframe class="w-full" width="560" height="315" src="https://www.youtube.com/embed/fS5SyhuIusM"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </section>

    {{-- etudiant--}}
    <section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-32">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest">Patient testimonials</h6>
                <h2 class="text-3xl leading-tight font-bold mt-4">Why choose the Mesothelioma Center?</h2>
                <p class="mt-2 leading-relaxed">Aenean ut tellus tellus. Suspendisse potenti. Nullam tincidunt lacus tellus,
                    sed aliquam est vehicula a. Pellentesque consectetur condimentum nulla, eleifend condimentum purus vehicula
                    in. Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non tincidunt ac, imperdiet in
                    enim. Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a, faucibus
                    mi.</p>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="bg-gray-400 w-full h-72 rounded-lg"></div>

                <p class="italic text-sm mt-2 text-right">Aenean ante nisi, gravida non mattis semper.</p>
            </div>
        </div>
    </section>
    {{--prof --}}

    <section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="bg-gray-400 w-full h-72 rounded-lg"></div>

                <p class="italic text-sm mt-2 text-right">Aenean ante nisi, gravida non mattis semper.</p>
            </div>
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest">Patient testimonials</h6>
                <h2 class="text-3xl leading-tight font-bold mt-4">Why choose the Mesothelioma Center?</h2>
                <p class="mt-2 leading-relaxed">Aenean ut tellus tellus. Suspendisse potenti. Nullam tincidunt lacus tellus,
                    sed aliquam est vehicula a. Pellentesque consectetur condimentum nulla, eleifend condimentum purus vehicula
                    in. Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non tincidunt ac, imperdiet in
                    enim. Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a, faucibus
                    mi.</p>
            </div>
        </div>
    </section>

{{--    lier les etapes de la creation d'une ecole aux fonctionnalites lier a une ecole--}}
    <section class="relative bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest"></h6>
                <h2 class="text-3xl leading-tight font-bold mt-4">Comment faire pour créer une école?</h2>
                <p class="text-lg mt-4">Excellence in Dentistry in the Heart of NY</p>
                <p class="mt-2 leading-relaxed">Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non
                    tincidunt ac, imperdiet in enim.
                    Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a, faucibus mi.</p>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="flex">
                    <div>
                        <div class="w-16 h-16 bg-blue-600 rounded-full"></div>
                    </div>
                    <div class="ml-8">
                        <h4 class="text-xl font-bold">Everything You Need Under One Roof</h4>
                        <p class="mt-2 leading-relaxed">Our comprehensive services allow you to receive all needed dental care
                            right here in our state-of-art
                            office – from dental cleanings and fillings to dental implants and extractions.</p>
                    </div>
                </div>

                <div class="flex mt-8">
                    <div>
                        <div class="w-16 h-16 bg-blue-600 rounded-full"></div>
                    </div>
                    <div class="ml-8">
                        <h4 class="text-xl font-bold">Our Patient-Focused Approach</h4>
                        <p class="mt-2 leading-relaxed">Your treatment plan will perfectly match your needs, lifestyle, and goals.
                            Even if it’s been years
                            since you last visited the dentist, we can help. Our comfortable office, compassionate team, and
                            minimally-invasive treatments will help you feel completely at ease.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row mt-24 text-center md:-mx-4">
            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="77" height="80" viewBox="0 0 77 80">
                    <path d="M51 0a26 26 0 1 1-26 26A26 26 0 0 1 51 0z" fill="#bee3f8"></path>
                    <path d="M18.151 80L15.2 77.577c-.405-.332-9.919-8.389-9.919-30.638 0-1.361-.746-2.485-1.778-4.042A17.122 17.122 0 0 1 0 32.542a14.367 14.367 0 0 1 4.356-10.315A14.564 14.564 0 0 1 14.616 18h.3a14.593 14.593 0 0 1 9.649 3.9.828.828 0 0 0 1.121 0 14.588 14.588 0 0 1 9.647-3.894h.3A14.564 14.564 0 0 1 45.9 22.227a14.363 14.363 0 0 1 4.356 10.314 16.084 16.084 0 0 1-3.606 10.4c-1.074 1.493-1.681 2.4-1.681 3.6a69.56 69.56 0 0 1-.125 4.163 14.746 14.746 0 0 1 7.98 5.134A14.523 14.523 0 0 1 56 64.96a14.652 14.652 0 1 1-29.3 0 14.532 14.532 0 0 1 1.4-6.253c-1.624-2.965-2.871-3.195-3.215-3.195-1.087 0-2.87 2.007-4.4 6.492a47.01 47.01 0 0 0-2.326 14.176V80zm23.2-26.1A11.061 11.061 0 1 0 52.39 64.96 11.064 11.064 0 0 0 41.348 53.9zM14.634 21.62a11 11 0 0 0-7.751 3.188 10.78 10.78 0 0 0-3.273 7.734c0 3.968 1.475 6.2 2.9 8.351 1.171 1.77 2.382 3.6 2.382 6.046 0 10.668 2.348 17.68 4.318 21.684a28.438 28.438 0 0 0 1.59 2.826 50.021 50.021 0 0 1 2.26-10.617c2-5.846 4.7-8.936 7.819-8.936 1.342 0 3.366.6 5.386 3.472a14.646 14.646 0 0 1 10.979-5.082c.07-1.241.106-2.5.106-3.743 0-2.43 1.2-4.1 2.361-5.709a12.463 12.463 0 0 0 2.926-8.293 10.779 10.779 0 0 0-3.273-7.733 10.986 10.986 0 0 0-7.736-3.19h-.229a10.992 10.992 0 0 0-7.266 2.932 4.45 4.45 0 0 1-6.025 0 10.988 10.988 0 0 0-7.265-2.932c-.067.002-.137.002-.209.002zm26.65 51.232l-6.084-6.14a4.522 4.522 0 0 1 0-6.381 4.5 4.5 0 0 1 6.1-.252 4.512 4.512 0 0 1 6.1 6.638l-6.123 6.134zM38.39 62.625a.892.892 0 0 0-.635.263.9.9 0 0 0 0 1.272l3.537 3.569 3.563-3.569a.9.9 0 0 0 0-1.272.9.9 0 0 0-1.269 0l-2.281 2.284-2.28-2.284a.9.9 0 0 0-.635-.263z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Teeth Whitening</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="85" height="80" viewBox="0 0 85 80">
                    <path d="M59 0a26 26 0 1 1-26 26A26 26 0 0 1 59 0z" fill="#bee3f8"></path>
                    <path d="M36 80a163.974 163.974 0 0 1-34.335-3.612L0 76.031V60.4a.159.159 0 0 0 0-.022v-.031V54.806v-.118l.036-2.052h71.925L72 54.688v21.345l-1.665.355A163.974 163.974 0 0 1 36 80zM4.224 67.124v5.53A160.1 160.1 0 0 0 36 75.823a160.115 160.115 0 0 0 31.774-3.169v-5.531a7.732 7.732 0 0 1-3.536.848 7.828 7.828 0 0 1-5.647-2.42 7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 47.3 65.55a7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 36 65.55a7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-9.184 1.573zM60.7 56.813V60.3a3.536 3.536 0 0 0 7.072 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zM71.961 45.33H.039L0 43.279v-5.608-.052-15.684l1.665-.357a165.051 165.051 0 0 1 68.67 0l1.665.357v15.711a.073.073 0 0 0 0 .014v5.616l-.037 2.051zM64.24 34.174a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.076v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.528-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.071v-3.485a3.52 3.52 0 0 0-3.523-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.07v-3.485a3.52 3.52 0 0 0-3.518-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482H11.3v-3.485a3.52 3.52 0 0 0-3.539-3.497zM52.944 30a7.831 7.831 0 0 1 5.648 2.419 7.807 7.807 0 0 1 9.185-1.573v-5.532a160.805 160.805 0 0 0-63.551 0v5.53a7.8 7.8 0 0 1 9.184 1.572A7.832 7.832 0 0 1 19.056 30a7.731 7.731 0 0 1 5.644 2.416A7.832 7.832 0 0 1 30.352 30 7.731 7.731 0 0 1 36 32.416a7.8 7.8 0 0 1 11.295 0A7.836 7.836 0 0 1 52.944 30z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Oral Surgery</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="65" height="80" viewBox="0 0 65 80">
                    <path d="M39 0a26 26 0 1 1-26 26A26 26 0 0 1 39 0z" fill="#bee3f8"></path>
                    <path d="M24.572 80a5.474 5.474 0 0 1-5.447-5.486c0-5.663-.011-10.083-.026-14.329l-.006-1.825h3.659V32.767a7.441 7.441 0 1 1 3.614 0v25.586h3.653v16.154A5.477 5.477 0 0 1 24.572 80zm-1.837-10.719v5.232a1.834 1.834 0 1 0 3.667-.005v-5.226zm3.67-7.286H22.72v.647l.006 3h3.677v-3.649zm-1.846-40.354a3.855 3.855 0 1 0 3.827 3.859 3.845 3.845 0 0 0-3.827-3.859zM7.453 80a5.474 5.474 0 0 1-5.447-5.486L2 58.36h3.636V32.768A7.5 7.5 0 0 1 7.44 18v3.641a3.791 3.791 0 0 0-2.7 1.131 3.859 3.859 0 0 0 2.705 6.578h1.807v29h3.615v1.61c.022 7.122.032 12.017.031 14.549A5.477 5.477 0 0 1 7.453 80zM5.618 69.281v5.232a1.834 1.834 0 1 0 3.667-.005c0-1.388 0-3.244-.007-5.226zm3.643-7.286L5.614 62v3.642H9.27c-.002-1.305-.006-2.6-.009-3.647z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Painless Dentistry</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="82" height="80" viewBox="0 0 82 80">
                    <path d="M56 0a26 26 0 1 1-26 26A26 26 0 0 1 56 0z" fill="#bee3f8"></path>
                    <path d="M38.7 80a7.608 7.608 0 0 1-7.6-6.99 7.288 7.288 0 0 1-2.96-2.712c-.845-1.173-1.155-1.49-1.726-1.49s-.882.317-1.726 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.988-1.859-4.875-3.089c-.852-1.18-1.162-1.5-1.737-1.5s-.881.317-1.725 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.987-1.859-4.874-3.089C.881 69.12.571 68.8 0 68.8v-3.816c2.647 0 3.988 1.86 4.875 3.091.845 1.172 1.155 1.49 1.726 1.49s.882-.317 1.725-1.489c.888-1.231 2.229-3.092 4.876-3.092s3.989 1.86 4.876 3.091c.844 1.172 1.154 1.49 1.726 1.49s.881-.317 1.725-1.489c.888-1.231 2.229-3.092 4.877-3.092 2.3 0 3.6 1.349 4.668 2.806V40.643l2.152-4.615h-4.947V18h21.668l9.225 4.4v2.61H66v3.818h-6.828V31.1L50 36.029h-6.167l2.493 4.55v5.446h2.49v3.817h-2.49v2.673h2.49v3.818h-2.49v16.14A7.585 7.585 0 0 1 38.7 80zm-3.757-37.03v29.5a3.758 3.758 0 0 0 7.515 0v-29.5zm2.542-6.943l-1.457 3.125h5.121l-1.712-3.125zm-5.339-14.209V32.21h16.866l6.288-3.382V24.8l-6.238-2.982z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Periodontics</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row mt-24 text-center md:-mx-4">
            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="77" height="80" viewBox="0 0 77 80">
                    <path d="M51 0a26 26 0 1 1-26 26A26 26 0 0 1 51 0z" fill="#bee3f8"></path>
                    <path d="M18.151 80L15.2 77.577c-.405-.332-9.919-8.389-9.919-30.638 0-1.361-.746-2.485-1.778-4.042A17.122 17.122 0 0 1 0 32.542a14.367 14.367 0 0 1 4.356-10.315A14.564 14.564 0 0 1 14.616 18h.3a14.593 14.593 0 0 1 9.649 3.9.828.828 0 0 0 1.121 0 14.588 14.588 0 0 1 9.647-3.894h.3A14.564 14.564 0 0 1 45.9 22.227a14.363 14.363 0 0 1 4.356 10.314 16.084 16.084 0 0 1-3.606 10.4c-1.074 1.493-1.681 2.4-1.681 3.6a69.56 69.56 0 0 1-.125 4.163 14.746 14.746 0 0 1 7.98 5.134A14.523 14.523 0 0 1 56 64.96a14.652 14.652 0 1 1-29.3 0 14.532 14.532 0 0 1 1.4-6.253c-1.624-2.965-2.871-3.195-3.215-3.195-1.087 0-2.87 2.007-4.4 6.492a47.01 47.01 0 0 0-2.326 14.176V80zm23.2-26.1A11.061 11.061 0 1 0 52.39 64.96 11.064 11.064 0 0 0 41.348 53.9zM14.634 21.62a11 11 0 0 0-7.751 3.188 10.78 10.78 0 0 0-3.273 7.734c0 3.968 1.475 6.2 2.9 8.351 1.171 1.77 2.382 3.6 2.382 6.046 0 10.668 2.348 17.68 4.318 21.684a28.438 28.438 0 0 0 1.59 2.826 50.021 50.021 0 0 1 2.26-10.617c2-5.846 4.7-8.936 7.819-8.936 1.342 0 3.366.6 5.386 3.472a14.646 14.646 0 0 1 10.979-5.082c.07-1.241.106-2.5.106-3.743 0-2.43 1.2-4.1 2.361-5.709a12.463 12.463 0 0 0 2.926-8.293 10.779 10.779 0 0 0-3.273-7.733 10.986 10.986 0 0 0-7.736-3.19h-.229a10.992 10.992 0 0 0-7.266 2.932 4.45 4.45 0 0 1-6.025 0 10.988 10.988 0 0 0-7.265-2.932c-.067.002-.137.002-.209.002zm26.65 51.232l-6.084-6.14a4.522 4.522 0 0 1 0-6.381 4.5 4.5 0 0 1 6.1-.252 4.512 4.512 0 0 1 6.1 6.638l-6.123 6.134zM38.39 62.625a.892.892 0 0 0-.635.263.9.9 0 0 0 0 1.272l3.537 3.569 3.563-3.569a.9.9 0 0 0 0-1.272.9.9 0 0 0-1.269 0l-2.281 2.284-2.28-2.284a.9.9 0 0 0-.635-.263z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Teeth Whitening</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="85" height="80" viewBox="0 0 85 80">
                    <path d="M59 0a26 26 0 1 1-26 26A26 26 0 0 1 59 0z" fill="#bee3f8"></path>
                    <path d="M36 80a163.974 163.974 0 0 1-34.335-3.612L0 76.031V60.4a.159.159 0 0 0 0-.022v-.031V54.806v-.118l.036-2.052h71.925L72 54.688v21.345l-1.665.355A163.974 163.974 0 0 1 36 80zM4.224 67.124v5.53A160.1 160.1 0 0 0 36 75.823a160.115 160.115 0 0 0 31.774-3.169v-5.531a7.732 7.732 0 0 1-3.536.848 7.828 7.828 0 0 1-5.647-2.42 7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 47.3 65.55a7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 36 65.55a7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-9.184 1.573zM60.7 56.813V60.3a3.536 3.536 0 0 0 7.072 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zM71.961 45.33H.039L0 43.279v-5.608-.052-15.684l1.665-.357a165.051 165.051 0 0 1 68.67 0l1.665.357v15.711a.073.073 0 0 0 0 .014v5.616l-.037 2.051zM64.24 34.174a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.076v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.528-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.071v-3.485a3.52 3.52 0 0 0-3.523-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.07v-3.485a3.52 3.52 0 0 0-3.518-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482H11.3v-3.485a3.52 3.52 0 0 0-3.539-3.497zM52.944 30a7.831 7.831 0 0 1 5.648 2.419 7.807 7.807 0 0 1 9.185-1.573v-5.532a160.805 160.805 0 0 0-63.551 0v5.53a7.8 7.8 0 0 1 9.184 1.572A7.832 7.832 0 0 1 19.056 30a7.731 7.731 0 0 1 5.644 2.416A7.832 7.832 0 0 1 30.352 30 7.731 7.731 0 0 1 36 32.416a7.8 7.8 0 0 1 11.295 0A7.836 7.836 0 0 1 52.944 30z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Oral Surgery</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="65" height="80" viewBox="0 0 65 80">
                    <path d="M39 0a26 26 0 1 1-26 26A26 26 0 0 1 39 0z" fill="#bee3f8"></path>
                    <path d="M24.572 80a5.474 5.474 0 0 1-5.447-5.486c0-5.663-.011-10.083-.026-14.329l-.006-1.825h3.659V32.767a7.441 7.441 0 1 1 3.614 0v25.586h3.653v16.154A5.477 5.477 0 0 1 24.572 80zm-1.837-10.719v5.232a1.834 1.834 0 1 0 3.667-.005v-5.226zm3.67-7.286H22.72v.647l.006 3h3.677v-3.649zm-1.846-40.354a3.855 3.855 0 1 0 3.827 3.859 3.845 3.845 0 0 0-3.827-3.859zM7.453 80a5.474 5.474 0 0 1-5.447-5.486L2 58.36h3.636V32.768A7.5 7.5 0 0 1 7.44 18v3.641a3.791 3.791 0 0 0-2.7 1.131 3.859 3.859 0 0 0 2.705 6.578h1.807v29h3.615v1.61c.022 7.122.032 12.017.031 14.549A5.477 5.477 0 0 1 7.453 80zM5.618 69.281v5.232a1.834 1.834 0 1 0 3.667-.005c0-1.388 0-3.244-.007-5.226zm3.643-7.286L5.614 62v3.642H9.27c-.002-1.305-.006-2.6-.009-3.647z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Painless Dentistry</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="82" height="80" viewBox="0 0 82 80">
                    <path d="M56 0a26 26 0 1 1-26 26A26 26 0 0 1 56 0z" fill="#bee3f8"></path>
                    <path d="M38.7 80a7.608 7.608 0 0 1-7.6-6.99 7.288 7.288 0 0 1-2.96-2.712c-.845-1.173-1.155-1.49-1.726-1.49s-.882.317-1.726 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.988-1.859-4.875-3.089c-.852-1.18-1.162-1.5-1.737-1.5s-.881.317-1.725 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.987-1.859-4.874-3.089C.881 69.12.571 68.8 0 68.8v-3.816c2.647 0 3.988 1.86 4.875 3.091.845 1.172 1.155 1.49 1.726 1.49s.882-.317 1.725-1.489c.888-1.231 2.229-3.092 4.876-3.092s3.989 1.86 4.876 3.091c.844 1.172 1.154 1.49 1.726 1.49s.881-.317 1.725-1.489c.888-1.231 2.229-3.092 4.877-3.092 2.3 0 3.6 1.349 4.668 2.806V40.643l2.152-4.615h-4.947V18h21.668l9.225 4.4v2.61H66v3.818h-6.828V31.1L50 36.029h-6.167l2.493 4.55v5.446h2.49v3.817h-2.49v2.673h2.49v3.818h-2.49v16.14A7.585 7.585 0 0 1 38.7 80zm-3.757-37.03v29.5a3.758 3.758 0 0 0 7.515 0v-29.5zm2.542-6.943l-1.457 3.125h5.121l-1.712-3.125zm-5.339-14.209V32.21h16.866l6.288-3.382V24.8l-6.238-2.982z" fill="#4299e1"></path></svg>

                <h4 class="text-xl font-bold">Periodontics</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>
        </div>
    </section>

    {{--juste apres lister les pric relatif au differentess offre et fonctionnalite que offre bgrfacile price--}}

    <section class="relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-20 pb-40">
        <div class="text-center">
            <h2 class="text-3xl leading-tight font-bold text-white">Looking for the perfect rate for your home?</h2>
        </div>

        <div class="flex flex-col md:flex-row items-start justify-between mt-12">
            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4">
                <img src="images/icon-home-1.svg" alt="" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8">Apply with your home</h4>
                <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">
                <img src="images/icon-home-2.svg" alt="" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8">Complete the form</h4>
                <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">
                <img src="images/icon-home-3.svg" alt="" class="mx-auto h-32">
                <h4 class="text-xl font-bold leading-tight mt-8">Choose the fair rate</h4>
                <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>
    <section class="relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left -mt-32">
        <div class="flex flex-col md:flex-row items-center justify-between bg-blue-300 px-12 py-10 rounded-lg shadow-lg">
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl leading-tight font-bold">Need help?</h2>
                <p class="mt-2 md:max-w-md">Contact our Customer Support that is always ready to help you with any possible questions, problems or
                    information.</p>
            </div>

            <div class="w-full md:w-1/3 md:text-right mt-6 md:mt-0">
                <a href="#" class="inline-block px-6 py-4 bg-blue-600 text-white rounded-lg">Go to Support</a>
            </div>
        </div>
    </section>

    {{--acceder aux ecole--}}
    <section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="w-full h-72 rounded-lg">
                    <img
                        class="w-full h-full"
                        src="{{ asset('assets/svg/search.svg') }}"
                        alt="">
                </div>

                <p class="italic text-sm mt-2 text-right"></p>
            </div>
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest"></h6>
                <h2 class="text-3xl leading-tight font-bold mt-4">Rechercher vos écoles</h2>
                <p class="mt-2 leading-relaxed">Aenean ut tellus tellus. Suspendisse potenti. Nullam tincidunt lacus tellus,
                    sed aliquam est vehicula a. Pellentesque consectetur condimentum nulla, eleifend condimentum purus vehicula
                    in. Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non tincidunt ac, imperdiet in
                    enim. Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a, faucibus
                    mi.</p>
            </div>
        </div>
    </section>

@endsection
