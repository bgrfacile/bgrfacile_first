<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<div>
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}

    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"/>
                    </svg>

                    <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 border-l-4 bg-gray-600 bg-opacity-25 text-gray-100 border-gray-100" href="https://dashboard-tailwindcomponents.netlify.app/" target="_blank">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10C2 5.58172 5.58172 2 10 2V10H18C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z" fill="currentColor"/>
                        <path d="M12 2.25195C14.8113 2.97552 17.0245 5.18877 17.748 8.00004H12V2.25195Z" fill="currentColor"/>
                    </svg>

                    <span class="mx-4">Dashboard</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100" href="https://dashboard-tailwindcomponents.netlify.app/ui-elements/" target="_blank">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 3C3.89543 3 3 3.89543 3 5V7C3 8.10457 3.89543 9 5 9H7C8.10457 9 9 8.10457 9 7V5C9 3.89543 8.10457 3 7 3H5Z" fill="currentColor"/>
                        <path d="M5 11C3.89543 11 3 11.8954 3 13V15C3 16.1046 3.89543 17 5 17H7C8.10457 17 9 16.1046 9 15V13C9 11.8954 8.10457 11 7 11H5Z" fill="currentColor"/>
                        <path d="M11 5C11 3.89543 11.8954 3 13 3H15C16.1046 3 17 3.89543 17 5V7C17 8.10457 16.1046 9 15 9H13C11.8954 9 11 8.10457 11 7V5Z" fill="currentColor"/>
                        <path d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z" fill="currentColor"/>
                    </svg>

                    <span class="mx-4">UI Elements</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100" href="https://dashboard-tailwindcomponents.netlify.app/tables/" target="_blank">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 3C6.44772 3 6 3.44772 6 4C6 4.55228 6.44772 5 7 5H13C13.5523 5 14 4.55228 14 4C14 3.44772 13.5523 3 13 3H7Z" fill="currentColor"/>
                        <path d="M4 7C4 6.44772 4.44772 6 5 6H15C15.5523 6 16 6.44772 16 7C16 7.55228 15.5523 8 15 8H5C4.44772 8 4 7.55228 4 7Z" fill="currentColor"/>
                        <path d="M2 11C2 9.89543 2.89543 9 4 9H16C17.1046 9 18 9.89543 18 11V15C18 16.1046 17.1046 17 16 17H4C2.89543 17 2 16.1046 2 15V11Z" fill="currentColor"/>
                    </svg>

                    <span class="mx-4">Tables</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100" href="https://dashboard-tailwindcomponents.netlify.app/forms/" target="_blank">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                    </svg>

                    <span class="mx-4">Forms</span>
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>

                        <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text" placeholder="Search">
                    </div>
                </div>

                <div class="flex items-center">
                    <button class="flex mx-4 text-gray-600 focus:outline-none">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div x-data="{ dropdownOpen: false }"  class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80" alt="Your avatar">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>

                    <div class="mt-4">
                        <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor"/>
                                            <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor"/>
                                            <path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor"/>
                                            <path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor"/>
                                            <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor"/>
                                            <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor"/>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
                                        <div class="text-gray-500">New Users</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z" fill="currentColor"/>
                                            <path d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z" fill="currentColor"/>
                                            <path d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z" fill="currentColor"/>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
                                        <div class="text-gray-500">Total Orders</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                            <path d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">

                    </div>

                    <div class="flex flex-col mt-8">
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                <table class="min-w-full">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>
                                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>
