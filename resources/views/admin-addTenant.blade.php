<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Tenant</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.2.1/dist/datepicker.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
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
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
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
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                    <span class="whitespace-nowrap">Payment History</span>
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
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
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
                            class="relative inline-flex items-center w-full justify-start px-3 py-3 overflow-hidden text-sm font-semibold transition-all bg-[#ffc329] rounded hover:bg-white group">
                            <span
                                class="w-48 h-48 rounded rotate-[-40deg] bg-[#ffc329] absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                            <span
                                class="relative w-full text-left text-gray-900 transition-colors duration-300 ease-in-out group-hover:text-gray-800">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
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
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
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
                <h2 class="text-3xl font-bold text-white">{{ $adminTitle }}</h2>
                <div class="flex items-center space-x-4">

                    <div class="flex items-center space-x-4 text-[#ffc329]">
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

                        <div class="text-sm text-[#ffc329]">
                            @{{ formattedDate }}
                        </div>
                    </div>

                    <button @click="toggleNotificationModal" class="p-2 text-white rounded-full">
                        🔔
                    </button>



                    <!-- Notification Modal -->
                    <div v-if="isNotificationModalOpen"
                        class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
                        aria-modal="true" aria-labelledby="modalTitle">
                        <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                            <div class="flex items-start justify-between">
                                <h2 id="modalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">
                                    Notification
                                </h2>

                                <button type="button" @click="toggleNotificationModal"
                                    class="-me-4 -mt-4 rounded-full p-2 text-gray-400 transition-colors hover:bg-gray-50 hover:text-gray-600 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                                    aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="mt-4 flex-col space-y-6 max-h-[70vh] overflow-y-auto scrollbar-hide">
                                <!-- Notification items -->
                                <div v-for="n in 3" :key="n"
                                    class="max-w-4xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10,
                                            2019</span>
                                        <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                                            tabindex="0" role="button">Delete</a>
                                    </div>

                                    <div class="mt-2">
                                        <a href="#"
                                            class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                                            tabindex="0" role="link">Notice</a>
                                        <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet
                                            consectetur adipisicing elit. Tempora expedita dicta totam aspernatur
                                            doloremque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative inline-block">
                        <!-- Profile dropdown -->
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
                                    Edit Profile
                                </button>
                                <a href="landing_page1.html"
                                    class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Log Out
                                </a>
                            </div>
                        </transition>

                        <!-- Profile Modal -->
                        <div v-if="isProfileModalOpen"
                            class="fixed inset-0 z-50 grid place-content-center bg-black/50 p-4" role="dialog"
                            aria-modal="true" aria-labelledby="modalTitle">
                            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900">
                                <div class="flex items-start justify-between">
                                    <h2 id="modalTitle"
                                        class="text-xl font-bold text-gray-900 sm:text-2xl dark:text-white">Profile</h2>
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

                                <form @submit.prevent="handleDone" class="mt-4 space-y-6">
                                    <div
                                        class="mx-auto flex justify-center w-[141px] h-[141px] bg-blue-300/20 rounded-full bg-[url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?...')] bg-cover bg-center bg-no-repeat">
                                    </div>
                                    <a href="#"
                                        class="block text-center mt-1 font-semibold dark:text-gray-300 hover:underline">Upload
                                        Profile</a>

                                    <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                                        <div class="w-full mb-4 mt-6">
                                            <label class="mb-2 dark:text-gray-300">First Name</label>
                                            <input type="text"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="First Name">
                                        </div>
                                        <div class="w-full mb-4 lg:mt-6">
                                            <label class="dark:text-gray-300">Last Name</label>
                                            <input type="text"
                                                class="mt-2 p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                                placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                                        <div class="w-full">
                                            <h3 class="dark:text-gray-300 mb-2">Gender</h3>
                                            <select
                                                class="w-48 h-10 text-gray-200 border-2 rounded-lg px-2 py-1 dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                                <option disabled selected hidden value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <h3 class="dark:text-gray-300 mb-2">Contact</h3>
                                            <input type="text" placeholder="XXXX-XXX-XXX"
                                                class="text-grey p-4 w-48 h-8 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                        </div>
                                    </div>

                                    <div class="flex flex-row space-x-16 items-center justify-center mt-12">
                                        <button type="button" @click="toggleProfileModal"
                                            class="w-48 h-8 rounded bg-[#ffc329] mt-4 text-gray-800 text-lg font-semibold transition-colors duration-300 hover:bg-gray-700 hover:text-[#ffc329]">Cancel</button>
                                        <button type="submit"
                                            class="w-48 h-8 rounded bg-[#ffc329] mt-4 text-gray-800 text-lg font-semibold transition-colors duration-300 hover:bg-gray-700 hover:text-[#ffc329]">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <section class="mt-4">

                <section class="container px-4 mx-auto">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div>
                            <div class="flex items-center gap-x-3">
                                <h2 class="text-lg font-medium text-gray-800 dark:text-white">Tenants</h2>

                                <span
                                    class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-[#ffc329]">24
                                    Tenants</span>
                            </div>

                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">List of Dormnest Tenants</p>
                        </div>

                        <div class="flex items-center mt-4 gap-x-3">


                            <button @click="toggledAddTenant"
                                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-gray-900 transition-colors duration-200 bg-[#ffc329] rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-gray-800 dark:hover:text-[#ffc329] dark:bg-[#ffc329]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <span>Add Tenant</span>
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="relative flex justify-center">


                        <div v-if="isAddTenant" x-transition:enter="transition duration-300 ease-out"
                            x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                            x-transition:leave="transition duration-150 ease-in"
                            x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                            x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                            class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                            aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                <span class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                    aria-hidden="true">&#8203;</span>

                                <div
                                    class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-800 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle">
                                    <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white"
                                        id="modal-title">
                                        Add Tenant Information
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                        Your new project has been created. Invite your
                                        team to collaborate on this project.
                                    </p>

                                    <form class="mt-4" action="#">
                                        <label for="emails-list" class="text-sm text-gray-700 dark:text-gray-200">
                                            Basic Information
                                        </label>
                                        <label class="block mt-2 text-white" for="email">
                                            Name
                                            <input type="text" name="email" id="email" placeholder="Full Name"
                                                class="mt-2 block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                                        </label>

                                        <label class="block mt-2 text-white" for="email">
                                            Contact
                                            <input type="text" name="email" id="email" placeholder="XXXX-XXX-XXX"
                                                class="mt-2 block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                                        </label>

                                        <label class="block mt-3 text-white" for="email">
                                            Total Occupants
                                            <select name="" id=""
                                                class="mt-2 block w-full px-4 py-3 text-sm text-gray-700 bg-white  rounded-md focus:border-[#ffc329] focus:outline-none focus:ring  focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 ">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </label>

                                        <label class="block mt-2 text-white" for="email">
                                            Room Number
                                            <input type="number" name="email" id="email" placeholder="Room no."
                                                class="mt-2 block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                                        </label>

                                        <label class="block mt-3 text-white" for="email">
                                            Subscriptions
                                            <select name="" id=""
                                                class="mt-2 block w-full px-4 py-3 text-sm text-gray-700 bg-white  rounded-md focus:border-[#ffc329] focus:outline-none focus:ring  focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 ">
                                                <option value="Student Plan">Student Plan</option>
                                                <option value="Regular Plan">Regular Plan</option>
                                                <option value="Premium Plan">Premium Plan</option>
                                            </select>
                                        </label>


                                        <div id="date-range-picker" date-rangepicker class="flex items-center mt-6">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input id="datepicker-range-start" name="start" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Select date start">
                                            </div>
                                            <span class="mx-4 text-gray-500">to</span>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input id="datepicker-range-end" name="end" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Select date end">
                                            </div>
                                        </div>



                                        <div class="mt-6 sm:flex sm:items-center sm:-mx-2">
                                            <button type="button" @click="isAddTenant = false"
                                                class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                                Cancel
                                            </button>

                                            <button type="button" @click="toggledReceipt"
                                                class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-gray-900 capitalize transition-colors duration-300 transform bg-[#ffc329] rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-gray-900 hover:text-[#ffc329] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                                Add
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- confirmation modal -->

                    <div v-if="confirmation" class="fixed inset-0 z-50 overflow-y-auto">
                        <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"
                            @click="confirmation = false"></div>

                        <div class="flex min-h-full items-center justify-center p-4">
                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm">
                                <button @click="confirmation = false"
                                    class="absolute right-2 top-2 rounded-full p-1 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Receipt Content -->
                                <div class="bg-gray-800 text-gray-300 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="w-full text-center">

                                            <!-- Business Info -->
                                            <div class="mt-3 text-center sm:mt-5">
                                                <h3 class="text-lg font-medium leading-6 text-[#ffc329]">DormNest</h3>
                                                <p class="mt-1 text-sm text-gray-500">123 Business Street, City</p>
                                            </div>

                                            <!-- Order Details -->
                                            <div class="mt-4 border-t border-gray-200 pt-4 text-sm">
                                                <div class="flex justify-between py-1">
                                                    <span class="text-[#ffc329]">Tenant No.:</span>
                                                    <span class="font-medium">#5033</span>
                                                </div>
                                                <div class="flex justify-between py-1">
                                                    <span class="text-[#ffc329]">Subscription Type:</span>
                                                    <span>Student Plan</span>
                                                </div>
                                                <div class="flex justify-between py-1">
                                                    <span class="text-[#ffc329]">Contact:</span>
                                                    <span>0964-456-789</span>
                                                </div>
                                                <div class="flex justify-between py-1">
                                                    <span class="text-[#ffc329]">Name:</span>
                                                    <span>John Mark</span>
                                                </div>
                                                <div class="flex justify-between py-1">
                                                    <span class="text-[#ffc329]">Password:</span>
                                                    <span>HopelessRomantic</span>
                                                </div>
                                            </div>

                                            <!-- Order Items -->
                                            <div class="mt-4 border-t border-gray-200 pt-4">
                                                <table class="w-full text-left">
                                                    <thead>
                                                        <tr class="border-b border-gray-200">
                                                            <th class="w-20 pb-2 font-medium">Lease-end</th>
                                                            <th class="w-12 pb-2 text-left font-medium">Tenants</th>
                                                            <th class="w-16 pb-2 pl-6 text-left font-medium">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b border-gray-100">
                                                            <td class="py-2">Jan 5, 2023</td>
                                                            <td class="text-left">4</td>
                                                            <td class="text-center">$1200.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                            </div>

                                            <!-- Contact Info -->
                                            <div class="mt-6 flex flex-col items-center gap-2 text-sm text-gray-500">
                                                <div class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M21.3 12.23h-3.48c-.98 0-1.85.54-2.29 1.42l-.84 1.66c-.2.4-.6.65-1.04.65h-3.28c-.31 0-.75-.07-1.04-.65l-.84-1.65a2.567 2.567 0 0 0-2.29-1.42H2.7c-.39 0-.7.31-.7.7v3.26C2 19.83 4.18 22 7.82 22h8.38c3.43 0 5.54-1.88 5.8-5.22v-3.85c0-.38-.31-.7-.7-.7ZM12.75 2c0-.41-.34-.75-.75-.75s-.75.34-.75.75v2h1.5V2Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M22 9.81v1.04a2.06 2.06 0 0 0-.7-.12h-3.48c-1.55 0-2.94.86-3.63 2.24l-.75 1.48h-2.86l-.75-1.47a4.026 4.026 0 0 0-3.63-2.25H2.7c-.24 0-.48.04-.7.12V9.81C2 6.17 4.17 4 7.81 4h3.44v3.19l-.72-.72a.754.754 0 0 0-1.06 0c-.29.29-.29.77 0 1.06l2 2c.01.01.02.01.02.02a.753.753 0 0 0 .51.2c.1 0 .19-.02.28-.06.09-.03.18-.09.25-.16l2-2c.29-.29.29-.77 0-1.06a.754.754 0 0 0-1.06 0l-.72.72V4h3.44C19.83 4 22 6.17 22 9.81Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    info@example.com
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path fill="currentColor"
                                                            d="M11.05 14.95L9.2 16.8c-.39.39-1.01.39-1.41.01-.11-.11-.22-.21-.33-.32a28.414 28.414 0 01-2.79-3.27c-.82-1.14-1.48-2.28-1.96-3.41C2.24 8.67 2 7.58 2 6.54c0-.68.12-1.33.36-1.93.24-.61.62-1.17 1.15-1.67C4.15 2.31 4.85 2 5.59 2c.28 0 .56.06.81.18.26.12.49.3.67.56l2.32 3.27c.18.25.31.48.4.7.09.21.14.42.14.61 0 .24-.07.48-.21.71-.13.23-.32.47-.56.71l-.76.79c-.11.11-.16.24-.16.4 0 .08.01.15.03.23.03.08.06.14.08.2.18.33.49.76.93 1.28.45.52.93 1.05 1.45 1.58.1.1.21.2.31.3.4.39.41 1.03.01 1.43zM21.97 18.33a2.54 2.54 0 01-.25 1.09c-.17.36-.39.7-.68 1.02-.49.54-1.03.93-1.64 1.18-.01 0-.02.01-.03.01-.59.24-1.23.37-1.92.37-1.02 0-2.11-.24-3.26-.73s-2.3-1.15-3.44-1.98c-.39-.29-.78-.58-1.15-.89l3.27-3.27c.28.21.53.37.74.48.05.02.11.05.18.08.08.03.16.04.25.04.17 0 .3-.06.41-.17l.76-.75c.25-.25.49-.44.72-.56.23-.14.46-.21.71-.21.19 0 .39.04.61.13.22.09.45.22.7.39l3.31 2.35c.26.18.44.39.55.64.1.25.16.5.16.78z">
                                                        </path>
                                                    </svg>
                                                    +1 (234) 567-8900
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Actions -->
                                <div class="bg-gray-800 px-4 py-3 flex justify-center">
                                    <button type="button" @click="confirmation = false"
                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-[#ffc329] px-4 py-2 text-base font-medium text-gray-900 shadow-sm hover:bg-gray-900 hover:text-[#ffc329] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="mt-6 md:flex md:items-center md:justify-between">
                        <div
                            class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                            <button
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                                View all
                            </button>
                            <button
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Student Plan
                            </button>
                            <button
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Regular Plan
                            </button>
                            <button
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Premium Plan
                            </button>
                        </div>

                        <div class="relative flex items-center mt-4 md:mt-0">
                            <span class="absolute">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </a>

                            </span>

                            <input type="text" value="" placeholder="Search Tenant ID"
                                class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>
                    </div>

                    <section v-if="isEmpty">
                        <div class="flex items-center mt-6 text-center border rounded-lg h-96 dark:border-gray-700">
                            <div class="flex flex-col w-full max-w-sm px-4 mx-auto">
                                <div class="p-3 mx-auto text-[#ffc329] bg-blue-100 rounded-full dark:bg-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </div>
                                <h1 class="mt-3 text-lg text-gray-800 dark:text-white">No Tenant found</h1>
                                <p class="mt-2 text-gray-500 dark:text-gray-400">Your search “Tenant ID” did not match
                                    any
                                    Tenant. Please try again or create add a new Tenant.</p>
                                <div class="flex items-center mt-4 sm:mx-auto gap-x-3">
                                    <button
                                        class="w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                        Clear Search
                                    </button>

                                    <button @click="toggledAddTenant"
                                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-gray-900 transition-colors duration-200 bg-[#ffc329] rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-gray-800 dark:bg-[#ffc329] dark:hover:text-[#ffc329]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>

                                        <span>Add Tenant</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section v-if="ShowTenants" class="mt-6">

                        <section class="container px-4 mx-auto">
                            <div class="flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-4">
                                        <div
                                            class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-gray-50 dark:bg-gray-800">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                            <div class="flex items-center gap-x-3">

                                                                <button class="flex items-center gap-x-2">
                                                                    <span>Tenant ID</span>
                                                                </button>
                                                            </div>
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                            Lease-end
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                            Room Number
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
                                                            Total occupants
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                            Subscription
                                                        </th>

                                                        <th scope="col" class="relative py-3.5 px-4">
                                                            <span class="sr-only">Actions</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                                    <tr>
                                                        <td
                                                            class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                            <div class="inline-flex items-center gap-x-3">
                                                                <input type="checkbox"
                                                                    class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                                                <span>#3066</span>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            Jan 6, 2022
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm text-center text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            1
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                            <div
                                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                                <svg width="12" height="12" viewBox="0 0 12 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>

                                                                <h2 class="text-sm font-normal">Paid</h2>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            <div class="flex items-center gap-x-2">
                                                                <div>
                                                                    <h2
                                                                        class="text-sm font-medium text-gray-800 dark:text-white ">
                                                                        Arthur Melo</h2>
                                                                    <p
                                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                                        0923-0919-234
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm text-center text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            4/6
                                                        </td>
                                                        <td
                                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            Student Plan
                                                        </td>

                                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                            <div class="flex items-center gap-x-6">
                                                                <button
                                                                    class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                                    Archive
                                                                </button>

                                                                <button
                                                                    class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                                    Extend
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </section>


                </section>
            </section>


        </main>
    </div>

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
                    isAddTenant: false,
                    isEmpty: true,
                    confirmation: false,
                    ShowTenants: false,
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
                toggledReceipt() {
                    this.ShowTenants = !this.ShowTenants;
                    this.isEmpty = !this.isEmpty
                    this.isAddTenant = !this.isAddTenant;
                    this.confirmation = !this.confirmation;
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
