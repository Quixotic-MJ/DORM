<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maintenance Request</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <script src="script.js" defer></script>
    <style>
        .fade-enter-active,
        .fade-leave-active {
            transition: all 0.2s ease;
        }

        .fade-enter-from,
        .fade-leave-to {
            opacity: 0;
            transform: scale(0.95);
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-900"
    style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <div id="app" class="flex justify-between w-full">
        <!-- Sidebar -->
        <aside class="w-72 bg-gray-800 min-h-screen p-4 space-y-6 sticky top-0 h-screen overflow-y-auto">
            <h1 class="text-2xl text-[#ffc329] font-bold">DORMNEST</h1>
            <nav class="space-y-8 flex flex-col text-white text-xl">
                <ul class="mt-6 space-y-2">
                    <li class="relative px-3 py-3 flex-row">
                        <a href="{{ route('tenant.homepage') }}"
                            class="relative inline-flex items-center justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                            <span
                                class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                            <span
                                class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                    <span
                                        style="white-space: nowrap;">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </div>
                            </span>
                        </a>
                    </li>

                    <li class="relative px-3 py-3 flex-row">
                        <a href="{{ route('tenant.request') }}"
                            class="relative inline-flex items-center justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-[#ffc329] rounded hover:bg-white group"
                            style="flex: 1;">
                            <span
                                class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                            <span
                                class="relative w-full text-left text-gray-900 transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z" />
                                    </svg>
                                    <span>Request Maintenance</span>
                                </div>
                            </span>
                        </a>
                    </li>

                    <li class="relative px-3 py-3">
                        <a href="{{ route('tenant.dorm-rules') }}"
                            class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                            <span
                                class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                            <span
                                class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                                <div class="flex items-center space-x-3">
                                   <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    <span>Dorm Rules</span>
                                </div>
                            </span>
                        </a>
                    </li>

                </ul>
            </nav>



        </aside>

        <!-- Main content -->
        <main class="flex flex-col p-6 w-full">
            <!-- Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-bold text-white">{{ $adminTitle }}
                </h2>

                <div class="flex items-center space-x-4">

                    <!-- Live Clock with Date (inside Vue template area) -->
                    <div class="flex items-center space-x-4 text-[#ffc329]">
                        <!-- Clock Boxes -->
                        <div class="grid auto-cols-max grid-flow-col gap-2 text-center">
                            <div class="bg-gray-800 rounded-xl flex flex-col px-3 py-1">
                                <span class="countdown font-mono text-2xl">
                                    <span :style="`--value:${time.hours}`">@{{ time.hours }}</span>
                                </span>
                                <span class="text-xs text-gray-300">Hours</span>
                            </div>
                            <div class="bg-gray-800 rounded-xl flex flex-col px-3 py-1">
                                <span class="countdown font-mono text-2xl">
                                    <span :style="`--value:${time.minutes}`">@{{ time.minutes }}</span>
                                </span>
                                <span class="text-xs text-gray-300">Min</span>
                            </div>
                            <div class="bg-gray-800 rounded-xl flex flex-col px-3 py-1">
                                <span class="countdown font-mono text-2xl">
                                    <span :style="`--value:${time.seconds}`">@{{ time.seconds }}</span>
                                </span>
                                <span class="text-xs text-gray-300">Sec</span>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="text-sm text-[#ffc329]">
                            @{{ formattedDate }}
                        </div>
                    </div>


                    <div class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <button @click="toggleDropdown"
                            class="relative z-10 block p-2 border-transparent rounded-md focus:outline-none">
                            <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full" alt="Avatar" />
                        </button>

                        <!-- Dropdown menu -->
                        <transition name="fade">
                            <div v-if="isOpen"
                                class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800">
                                <button @click="toggleProfileModal"
                                    class="block w-full text-left px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Change Password
                                </button>
                                <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </transition>

                        <!-- Password Change Modal -->
                        <section v-if="isProfileModalOpen"
                            class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
                            aria-modal="true" aria-labelledby="modalTitle">
                            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                                <div class="flex items-start justify-between">
                                    <h2 id="modalTitle"
                                        class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                                        Change Password
                                    </h2>
                                    <button type="button" @click="toggleProfileModal"
                                        class="-me-4 -mt-4 rounded-full p-2 text-gray-400 transition-colors hover:bg-gray-50 hover:text-gray-600 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                                        aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-4 space-y-6">
                                    <!-- Password Change Form -->
                                    @if(session('success'))
                                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    @if(session('error'))
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ session('error') }}
                                    </div>
                                    @endif

                                    <form action="{{ route('tenant.change-password') }}" method="POST">
                                        @csrf

                                        <!-- Current Password -->
                                        <div class="mb-6">
                                            <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                                            <input type="password" id="current_password" name="current_password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                            @error('current_password')
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- New Password -->
                                        <div class="mb-6">
                                            <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                                            <input type="password" id="new_password" name="new_password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                            @error('new_password')
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Confirm New Password -->
                                        <div class="mb-6">
                                            <label for="new_password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm New Password</label>
                                            <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                        </div>

                                        <!-- Submit -->
                                        <div class="flex flex-row space-x-4 items-center justify-center mt-6">
                                            <button type="button" @click="toggleProfileModal"
                                                class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Cancel
                                            </button>
                                            <button type="submit"
                                                class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-[#ffc329] rounded-lg hover:bg-gray-800 hover:text-[#ffc329] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                Change Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <section>

                <section class="container px-4 mx-auto">


                    <section v-if="doneReq">
                        <div class="mt-6 md:flex md:items-center md:justify-between">


                            <ol
                                class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                                <li
                                    class="flex md:w-full items-center {{ isset($maintenanceRequest) && $maintenanceRequest->status == 'Pending' ? 'text-green-400 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                                    <span
                                        class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Pending<span class="hidden sm:inline-flex sm:ms-2">Request</span>
                                    </span>
                                </li>
                                <li
                                    class="flex md:w-full items-center {{ isset($maintenanceRequest) && $maintenanceRequest->status == 'In Progress' ? 'text-[#ffc329] dark:text-[#ffc329]' : 'text-gray-500 dark:text-gray-400' }} after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                                    <span
                                        class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                                        <span class="me-2">2</span>
                                        In <span class="hidden sm:inline-flex sm:ms-2">Progress</span>
                                    </span>
                                </li>
                                <li class="flex items-center {{ isset($maintenanceRequest) && $maintenanceRequest->status == 'Completed' ? 'text-green-400 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }}">
                                    <span class="me-2">3</span>
                                    Done
                                </li>
                            </ol>

                        </div>

                        <section class="bg-white dark:bg-gray-900">
                            <div class="container px-6 py-12 mx-auto">
                                <div class="text-center">

                                    <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">
                                        Your Request is being Processed</h1>

                                    <p class="mt-3 text-gray-500 dark:text-gray-400"> Here are the things that you can
                                        do.</p>
                                </div>

                                <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                                    <div class="flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#ffc329] rounded-full bg-blue-100/80 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            </svg>
                                        </span>

                                        <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Wait for the
                                            response</h2>
                                        <p class="mt-2 text-gray-500 dark:text-gray-400">
                                            If not urgent, Please wait for the response.
                                        </p>
                                    </div>

                                    <div class="flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#ffc329] rounded-full bg-blue-100/80 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>

                                        <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Desk</h2>
                                        <p class="mt-2 text-gray-500 dark:text-gray-400">Come at our desk and talk to
                                            the staff.
                                        </p>

                                    </div>

                                    <div class="flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#ffc329] rounded-full bg-blue-100/80 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                        </span>

                                        <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                                        <p class="mt-2 text-gray-500 dark:text-gray-400">For emergency call this number.
                                        </p>
                                        <p class="mt-2 text-blue-500 dark:text-[#ffc329]">+1 (555) 000-0000</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="flex justify-center">
                            @if(isset($maintenanceRequest) && $maintenanceRequest->status == 'Completed')
                            <button type="submit" @click="toggledSendReq"
                                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-m font-medium text-center text-gray-900 bg-[#ffc329] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-gray-800 hover:text-[#ffc329]">
                                Request Again
                            </button>
                            @else
                            <button type="submit" @click="toggledSendReq"
                                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-m font-medium text-center text-gray-900 bg-[#ffc329] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-gray-800 hover:text-[#ffc329]">
                                Cancel
                            </button>
                            @endif
                        </div>

                    </section>


                    <section v-if="requesting" class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                            @if(session('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Please fill up the form
                            </h2>
                            <form action="{{ route('tenant.submit-request') }}" method="POST" id="maintenanceRequestForm">
                                @csrf
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                                    <div class="w-full">
                                        <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
                                        <select name="room_number" id="room_number"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <div class="w-full">
                                        <label for="issue_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issue Type</label>
                                        <select name="issue_type" id="issue_type"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                            <option value="plumbing">Plumbing</option>
                                            <option value="electrical">Electrical</option>
                                            <option value="appliance">Appliance</option>
                                            <option value="structural">Structural</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <div class="w-full">
                                        <label for="priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urgency Level</label>
                                        <select name="priority" id="priority"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                            <option value="low">Low</option>
                                            <option value="medium">Medium</option>
                                            <option value="high">High</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                    </div>

                                    <div class="w-full">
                                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Number</label>
                                        <input type="text" name="contact" id="contact"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Your contact number" required>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="description"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Describe
                                            the Problem</label>
                                        <textarea id="description" name="description" rows="8"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Your description here" required></textarea>
                                    </div>
                                </div>

                                <div class="flex justify-center">
                                    <button type="button" @click="submitRequest"
                                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-m font-medium text-center text-gray-900 bg-[#ffc329] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-gray-800 hover:text-[#ffc329]">
                                        Send Request
                                    </button>
                                </div>

                            </form>
                        </div>
                    </section>

                </section>


                </section>
        </main>

        <script>
            const { createApp } = Vue;

            window.app = createApp({
                data() {
                    return {
                        // UI States
                        isOpen: false,
                        isNotificationModalOpen: false,
                        isProfileModalOpen: false,
                        isStudentInfoOpen: false,
                        isRegularInfoOpen: false,
                        isVIPInfoOpen: false,
                        isAddTenant: false,
                        isEmpty: false,
                        ShowTenants: true,
                        doneReq: {{ $hasPendingRequest ? 'true' : 'false' }},
                        requesting: {{ $hasPendingRequest ? 'false' : 'true' }},
                        adminTitle: 'Add Tenants',

                        // Clock Data
                        time: {
                            hours: '00',
                            minutes: '00',
                            seconds: '00'
                        },
                        formattedDate: '',

                        // Navigation Items
                        navItems: [
                            {
                                section: 'adminDashboard',
                                title: 'Dashboard',
                                icon: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>'
                            },
                            {
                                section: 'maintenanceReq',
                                title: 'Maintenance Request',
                                icon: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>'
                            },
                            {
                                section: 'history',
                                title: 'Payment History',
                                icon: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>'
                            },
                            {
                                section: 'editDormnest',
                                title: 'Edit DormNest',
                                icon: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>'
                            }
                        ]
                    };
                },
                methods: {
                    toggleDropdown() {
                        this.isOpen = !this.isOpen;
                    },
                    toggledAddTenant() {
                        this.isAddTenant = !this.isAddTenant;
                    },
                    toggledAddSave() {
                        this.ShowTenants = !this.ShowTenants;
                        this.isEmpty = !this.isEmpty
                        this.isAddTenant = !this.isAddTenant;
                    },
                    toggledSendReq() {
                        this.requesting = !this.requesting;
                        this.doneReq = !this.doneReq;
                    },
                    submitRequest() {
                        // First toggle to show the confirmation view
                        this.toggledSendReq();

                        // Then submit the form
                        document.getElementById('maintenanceRequestForm').submit();
                    },
                    toggleNotificationModal() {
                        this.isNotificationModalOpen = !this.isNotificationModalOpen;
                        this.isOpen = false;
                    },
                    toggleProfileModal() {
                        this.isProfileModalOpen = !this.isProfileModalOpen;
                        this.isOpen = false;
                    },
                    toggleStudentinfo() {
                        this.isStudentInfoOpen = true;
                    },
                    handleDone() {
                        this.isProfileModalOpen = false;
                        this.isStudentInfoOpen = false;
                        this.isRegularInfoOpen = false;
                        this.isVIPInfoOpen = false;
                        alert('Changes saved successfully!');
                    },
                    toggleModal(modalName) {
                        this[modalName] = !this[modalName];
                    },
                    handleClickOutside(event) {
                        const dropdown = this.$el.querySelector('.relative');
                        if (dropdown && !dropdown.contains(event.target)) {
                            this.isOpen = false;
                        }
                    },
                    updateTime() {
                        const now = new Date();
                        this.time.hours = now.getHours().toString().padStart(2, '0');
                        this.time.minutes = now.getMinutes().toString().padStart(2, '0');
                        this.time.seconds = now.getSeconds().toString().padStart(2, '0');

                        this.formattedDate = now.toLocaleDateString('en-US', {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        });
                    }
                },
                mounted() {
                    document.addEventListener('click', this.handleClickOutside);
                    this.updateTime();
                    setInterval(this.updateTime, 1000);

                    // ✅ Optional fallback for Flowbite date picker
                    const dateRangeEl = document.getElementById('date-range-picker');
                    if (dateRangeEl && window.DateRangePicker) {
                        new DateRangePicker(dateRangeEl, {
                            format: 'yyyy-mm-dd'
                        });
                    }
                },
                beforeUnmount() {
                    document.removeEventListener('click', this.handleClickOutside);
                }
            });

            // Mount the app and store the instance
            window.app = window.app.mount('#app');
        </script>

        <style>
            /* Simple fade animation */
            .fade-enter-active,
            .fade-leave-active {
                transition: all 0.2s ease;
            }

            .fade-enter-from,
            .fade-leave-to {
                opacity: 0;
                transform: scale(0.95);
            }

            /* Custom CSS to hide scrollbar */
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }

            .scrollbar-hide {
                -ms-overflow-style: none;
                /* Internet Explorer 10+ */
                scrollbar-width: none;
                /* Firefox */
            }
        </style>
    </div>

</body>

</html>
