<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
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
                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.dashboard') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span class="whitespace-nowrap">Dashboard</span>
                            </div>
                        </span>
                    </a>
                </li>

                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.maintenance-requests') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-[#ffc329] rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-gray-900 transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path>
                                </svg>
                                <span>Maintenance Request</span>
                            </div>
                        </span>
                    </a>
                </li>

                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.payment-history') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                                <span class="whitespace-nowrap">Payment</span>
                            </div>
                        </span>
                    </a>
                </li>

                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.manage-dorm') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                                <span class="whitespace-nowrap">Manage Dormitory</span>
                            </div>
                        </span>
                    </a>
                </li>

                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.add-tenant') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                                <span class="whitespace-nowrap">+ Add Tenants</span>
                            </div>
                        </span>
                    </a>
                </li>

                <li class="relative px-3 py-3">
                    <a href="{{ route('admin.archive') }}"
                        class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-gray-800 rounded hover:bg-white group">
                        <span
                            class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                        <span
                            class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M20 7V4H4v3" />
                                    <path d="M4 7l1.447 12.158A2 2 0 007.43 21h9.14a2 2 0 001.982-1.842L20 7" />
                                    <path d="M9 12h6" />
                                </svg>
                                <span class="whitespace-nowrap">Archive</span>
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
            <h2 class="text-3xl font-bold text-white">Maintenance Requests</h2>
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


                <button @click="toggleNotificationModal" class="p-2 text-white rounded-full">
                    🔔
                </button>

                <!-- Notification Modal -->
                <div v-if="isNotificationModalOpen" class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4"
                    role="dialog" aria-modal="true" aria-labelledby="modalTitle">
                    <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                        <div class="flex items-start justify-between">
                            <h2 id="modalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                                Notification
                            </h2>

                            <button type="button" @click="toggleNotificationModal"
                                class="-me-4 -mt-4 rounded-full p-2 text-gray-400 transition-colors hover:bg-gray-50 hover:text-gray-600 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="mt-4 flex-col space-y-6 max-h-[70vh] overflow-y-auto scrollbar-hide">
                            <!-- Limit height and enable scrolling -->
                            <div class="max-w-4xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10,
                                        2019</span>
                                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                                        tabindex="0" role="button">Delete</a>
                                </div>

                                <div class="mt-2">
                                    <a href="#"
                                        class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                                        tabindex="0" role="link">Staff</a>
                                    <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet
                                        consectetur
                                        adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.
                                        Excepturi
                                        iste
                                        iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in
                                        modi
                                        ratione
                                        libero!</p>
                                </div>
                            </div>

                            <div class="max-w-4xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10,
                                        2019</span>
                                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                                        tabindex="0" role="button">Delete</a>
                                </div>

                                <div class="mt-2">
                                    <a href="#"
                                        class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                                        tabindex="0" role="link">Promo</a>
                                    <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet
                                        consectetur
                                        adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.
                                        Excepturi
                                        iste
                                        iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in
                                        modi
                                        ratione
                                        libero!</p>
                                </div>
                            </div>

                            <div class="max-w-4xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10,
                                        2019</span>
                                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                                        tabindex="0" role="button">Delete</a>
                                </div>

                                <div class="mt-2">
                                    <a href="#"
                                        class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                                        tabindex="0" role="link">Promo</a>
                                    <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet
                                        consectetur
                                        adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.
                                        Excepturi
                                        iste
                                        iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in
                                        modi
                                        ratione
                                        libero!</p>
                                </div>
                            </div>


                            <!-- Repeat the above block for other content -->

                        </div>
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
                                Edit admin account
                            </button>
                            <a href="{{ url('/') }}"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Log Out
                            </a>
                        </div>
                    </transition>

                    <!-- Profile Modal -->
                    <section v-if="isProfileModalOpen"
                        class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
                        aria-modal="true" aria-labelledby="modalTitle">
                        <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                            <div class="flex items-start justify-between">
                                <h2 id="modalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                                    Edit Admin Account
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
                                <!-- Profile Content -->
                                <form @submit.prevent="handleDone">


                                    <!-- Username and Current Password -->
                                    <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                                        <div class="w-full mb-4 mt-6">
                                            <label class="mb-2 dark:text-gray-300">Username</label>
                                            <input type="text"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="Enter username">
                                        </div>
                                        <div class="w-full mb-4 lg:mt-6">
                                            <label class="dark:text-gray-300">Current Password</label>
                                            <input type="password"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="Current password">
                                        </div>
                                    </div>

                                    <!-- New Password and Confirm Password -->
                                    <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                                        <div class="w-full">
                                            <h3 class="dark:text-gray-300 mb-2">New Password</h3>
                                            <input type="password"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="New password">
                                        </div>
                                        <div class="w-full">
                                            <h3 class="dark:text-gray-300 mb-2">Confirm Password</h3>
                                            <input type="password"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="Confirm password">
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="flex flex-row space-x-16 items-center justify-center mt-12">
                                        <div
                                            class="w-48 h-8 rounded bg-[#ffc329] mt-4 text-gray-800 text-lg font-semibold flex items-center justify-center transition-colors duration-300 hover:bg-gray-700 hover:text-[#ffc329]">
                                            <button type="submit">Cancel</button>
                                        </div>
                                        <div
                                            class="w-48 h-8 rounded bg-[#ffc329] mt-4 text-gray-800   text-lg font-semibold flex items-center justify-center transition-colors duration-300 hover:bg-gray-700 hover:text-[#ffc329]">
                                            <button type="submit">Save</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>






        <section>
            <!-- Stats Cards -->
            <div class="grid grid-cols-4 gap-4 my-6 text-white">
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <div class="text-orange-400 text-2xl">👨‍👩‍👧‍👦</div>
                    <p class="font-normal">Total Tenants</p>
                    <p class="text-lg font-semibold">{{ $totalTenants }}</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <div class="text-green-400 text-2xl">💰</div>
                    <p class="font-normal">Total balance</p>
                    <p class="text-lg font-semibold">${{ number_format($totalBalance, 2) }}</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <div class="text-blue-400 text-2xl">🏠</div>
                    <p class="font-normal">Rooms Available</p>
                    <p class="text-lg font-semibold">{{ $availableRooms }}</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <div class="text-cyan-400 text-2xl">🛠️</div>
                    <p class="font-normal">Pending Request</p>
                    <p class="text-lg font-semibold">{{ $pendingRequests }}</p>
                </div>
            </div>

            <!-- Table -->
            <section class="container px-4 mx-auto mt-8">
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto scrollbar-hide max-h-128 sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full max-h-128 align-middle md:px-6 lg:px-4">
                            <!-- Scrollable container -->
                            <div
                                class="overflow-y-auto scrollbar-hide max-h-96 border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <!-- Sticky header -->
                                    <thead class="sticky top-0 z-10 bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <div class="flex items-center gap-x-3">
                                                    <button class="flex items-center gap-x-2">
                                                        <span>Room Number</span>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Date
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Tenant
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Description
                                            </th>
                                            <th scope="col" class="relative py-3.5 px-4">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        @forelse($maintenanceRequests as $request)
                                        <tr>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>#{{ $request->room_number }}</span>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                {{ $request->date }}</td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                @if($request->status == 'Completed')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">Completed</h2>
                                                </div>
                                                @elseif($request->status == 'In Progress')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-blue-500 rounded-full gap-x-2 bg-blue-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1v10M1 6h10" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">In Progress</h2>
                                                </div>
                                                @else
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">Pending</h2>
                                                </div>
                                                @endif
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <div>
                                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                            {{ $request->tenant->tenant_name }}</h2>
                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            {{ $request->tenant->tenant_contact }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                {{ $request->description }}
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <button @click="openViewModal('{{ $request->id }}', '{{ $request->description }}', '{{ $request->priority }}')"
                                                        class="text-gray-500 transition-colors duration-200 hover:underline dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                        View
                                                    </button>

                                                    <button @click="openManageModal('{{ $request->id }}', '{{ $request->status }}')"
                                                        class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Manage
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="px-4 py-4 text-sm text-center text-gray-500 dark:text-gray-300">
                                                No maintenance requests found
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- View Request Modal -->
        <section v-if="isViewModalOpen"
            class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
            aria-modal="true" aria-labelledby="viewModalTitle">
            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                <div class="flex items-start justify-between">
                    <h2 id="viewModalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                        Request Details
                    </h2>
                    <button type="button" @click="isViewModalOpen = false"
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
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Urgency Level</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400" v-text="currentRequestPriority"></p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Description</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400" v-text="currentRequestDescription"></p>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button @click="isViewModalOpen = false"
                            class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Manage Request Modal -->
        <section v-if="isManageModalOpen"
            class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
            aria-modal="true" aria-labelledby="manageModalTitle">
            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                <div class="flex items-start justify-between">
                    <h2 id="manageModalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                        Update Request Status
                    </h2>
                    <button type="button" @click="isManageModalOpen = false"
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
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Current Status</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400" v-text="currentRequestStatus"></p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Change Status To</h3>
                            <div class="mt-2 space-y-2">
                                <button @click="updateRequestStatus('Pending')"
                                    class="w-full px-4 py-2 text-left text-red-500 bg-red-100 rounded-md hover:bg-red-200">
                                    Pending
                                </button>
                                <button @click="updateRequestStatus('In Progress')"
                                    class="w-full px-4 py-2 text-left text-blue-500 bg-blue-100 rounded-md hover:bg-blue-200">
                                    In Progress
                                </button>
                                <button @click="updateRequestStatus('Completed')"
                                    class="w-full px-4 py-2 text-left text-green-500 bg-green-100 rounded-md hover:bg-green-200">
                                    Completed
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button @click="isManageModalOpen = false"
                            class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    // UI States
                    isOpen: false,
                    isNotificationModalOpen: false,
                    isProfileModalOpen: false,
                    isStudentInfoOpen: false,
                    isRegularInfoOpen: false,
                    isVIPInfoOpen: false,
                    isAddStaff: false,
                    isViewModalOpen: false,
                    isManageModalOpen: false,
                    currentSection: 'adminDashboard',
                    adminTitle: 'Maintenance Requests',

                    // Request data
                    currentRequestId: null,
                    currentRequestStatus: '',
                    currentRequestDescription: '',
                    currentRequestPriority: '',

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
                toggledAddStaff() {
                    this.isAddStaff = !this.isAddStaff;
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
                },
                openViewModal(id, description, priority) {
                    this.currentRequestId = id;
                    this.currentRequestDescription = description;
                    this.currentRequestPriority = priority;
                    this.isViewModalOpen = true;
                },
                openManageModal(id, status) {
                    this.currentRequestId = id;
                    this.currentRequestStatus = status;
                    this.isManageModalOpen = true;
                },
                updateRequestStatus(status) {
                    // Create form data
                    const formData = new FormData();
                    formData.append('status', status);
                    formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                    // Send AJAX request to update status
                    fetch(`/admin/maintenance-requests/${this.currentRequestId}/update-status`, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Close modal and reload page to show updated status
                            this.isManageModalOpen = false;
                            alert('Status updated successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to update status: ' + (data.message || 'Please try again.'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
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
        }).mount('#app');
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
