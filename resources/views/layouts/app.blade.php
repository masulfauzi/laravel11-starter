<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/svg/logo-small.svg" type="image/svg+xml" />
    <title>Analytics - Admin Toolkit</title>
    <meta name="description"
        content="Admin Toolkit is a modern admin dashboard template based on Tailwindcss. It comes with a variety of useful ui components and pre-built pages" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <script>
        if (
            localStorage.getItem('theme') === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <script type="module" crossorigin src="./assets/js/index-91eca288.js"></script>
    <link rel="modulepreload" crossorigin href="./assets/js/app-e81b91f2.js">
    <link rel="modulepreload" crossorigin href="./assets/js/tailwind.config-f4ae5dac.js">
    <link rel="modulepreload" crossorigin href="./assets/js/apexcharts.common-2171691b.js">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <div id="app">
        <!-- Sidebar Starts -->
        <aside class="sidebar">
            <!-- Sidebar Header Starts -->
            <a href="/">
                <div class="sidebar-header">
                    <div class="sidebar-logo-icon">
                        <img src="./assets/svg/logo-small.svg" alt="logo" class="h-[45px]" />
                    </div>

                    <div class="sidebar-logo-text">
                        <h1 class="flex text-xl">
                            <span class="font-bold text-slate-800 dark:text-slate-200"> Admin </span>
                            <span class="font-semibold text-primary-500">Toolkit</span>
                        </h1>

                        <p class="whitespace-nowrap text-xs text-slate-400">Simple &amp; Customizable</p>
                    </div>
                </div>
            </a>
            <!-- Sidebar Header Ends -->

            @include('layouts.navigation')

        </aside>
        <!-- Sidebar Ends -->

        <!-- Wrapper Starts -->
        <div class="wrapper">
            <!-- Header Starts -->
            <header class="header">
                <div class="container-fluid flex items-center justify-between">
                    <!-- Sidebar Toggle & Search Starts -->
                    <div class="flex items-center space-x-6 overflow-visible">
                        <button class="sidebar-toggle">
                            <span class="flex space-x-4">
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                                    height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16">
                                    </path>
                                </svg>
                            </span>
                        </button>

                        <!-- Mobile Search Starts -->
                        <div class="sm:hidden">
                            <button type="button" data-trigger="search-modal"
                                class="flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300">
                                <i width="22" height="22" data-feather="search"></i>
                            </button>
                        </div>
                        <!-- Mobile Search Ends -->

                        <!-- Searchbar Start -->
                        <button type="button" data-trigger="search-modal"
                            class="group hidden h-10 w-72 items-center overflow-hidden rounded-primary bg-slate-100 px-3 shadow-sm dark:border-transparent dark:bg-slate-700 sm:flex">
                            <i class="text-slate-400" width="1em" height="1em" data-feather="search"></i>
                            <span class="ml-2 text-sm text-slate-400">Search</span>
                        </button>
                        <!-- Searchbar Ends -->
                    </div>
                    <!-- Sidebar Toggle & Search Ends -->

                    <!-- Header Options Starts -->
                    <div class="flex items-center">
                        <!-- Language Dropdown Starts -->
                        <div class="dropdown" data-strategy="absolute">
                            <div class="dropdown-toggle px-3">
                                <button type="button"
                                    class="inline-flex items-center gap-2 text-sm text-slate-600 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300">
                                    <span class="fi fi-gb"></span>
                                    <span class="hidden font-medium md:inline-block">English</span>
                                    <span class="inline-block font-medium md:hidden">EN</span>
                                </button>
                            </div>

                            <div class="dropdown-content mt-3 w-40">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-gb"></span>
                                            <span class="">English</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-de"></span>
                                            <span class="">German</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-gf"></span>
                                            <span class="">French</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-sa"></span>
                                            <span class="">Arabic</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-cn"></span>
                                            <span class="">Chinese</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-bd"></span>
                                            <span class="">Bangla</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Language Dropdown Ends -->

                        <!-- Dark Mood Toggle Starts -->
                        <div class="dropdown" data-strategy="absolute" id="theme-switcher-dropdown">
                            <button
                                class="dropdown-toggle px-3 text-slate-500 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500"
                                type="button">
                                <i class="hidden dark:block" width="24" height="24" data-feather="moon"></i>
                                <i class="block dark:hidden" width="24" height="24" data-feather="sun"></i>
                            </button>

                            <div class="dropdown-content mt-3 w-36">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="light">
                                            <i width="16" height="16" data-feather="sun"></i>
                                            <span>Light</span>
                                        </button>
                                    </li>

                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="dark">
                                            <i width="16" height="16" data-feather="moon"></i>
                                            <span>Dark</span>
                                        </button>
                                    </li>

                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="system">
                                            <i width="16" height="16" data-feather="monitor"></i>
                                            <span>System</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Dark Mood Toggle Ends -->

                        <!-- Notification Dropdown Starts -->
                        <div class="dropdown -mt-0.5" data-strategy="absolute">
                            <div class="dropdown-toggle px-3">
                                <button
                                    class="relative mt-1 flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500">
                                    <i width="24" height="24" data-feather="bell"></i>
                                    <span
                                        class="absolute -right-1 -top-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-danger-500 text-[11px] text-slate-200">
                                        5
                                    </span>
                                </button>
                            </div>

                            <div class="dropdown-content mt-3 w-[17.5rem] divide-y dark:divide-slate-700 sm:w-80">
                                <div class="flex items-center justify-between px-4 py-4">
                                    <h6 class="text-slate-800 dark:text-slate-300">Notifications</h6>
                                    <button
                                        class="text-xs font-medium text-slate-600 hover:text-primary-500 dark:text-slate-300">
                                        Clear All
                                    </button>
                                </div>

                                <div class="h-80 w-full" data-simplebar>
                                    <ul>
                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-500">
                                                <i data-feather="alert-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">New order received</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been placed</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>2 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-500">
                                                <i data-feather="alert-triangle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">High CPU usage</h6>
                                                <p class="text-xs text-slate-400">CPU usage is at 92%</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>5 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-500">
                                                <i data-feather="check-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Your order has been shipped</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been shipped</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>10 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-danger-100 text-danger-500">
                                                <i data-feather="x-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Something went wrong</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been placed</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>1 hour ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-500">
                                                <i data-feather="check-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Your order has been shipped</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been shipped</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>10 min ago</span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="px-4 py-2">
                                    <button class="btn btn-primary-plain btn-sm w-full" type="button">
                                        <span>View More</span>
                                        <i data-feather="arrow-right" width="1rem" height="1rem"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Notification Dropdown Ends -->

                        <!-- Profile Dropdown Starts -->
                        <div class="dropdown" data-strategy="absolute">
                            <div class="dropdown-toggle pl-3">
                                <button class="group relative flex items-center gap-x-1.5" type="button">
                                    <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
                                        <img class="avatar-img group-focus-within:ring group-focus-within:ring-primary-500"
                                            src="./assets/images/avatar1.png" alt="Avatar 1" />
                                    </div>
                                </button>
                            </div>

                            <div class="dropdown-content mt-1 w-56 divide-y dark:divide-slate-600">
                                <div class="px-4 py-3">
                                    <p class="text-sm">Signed in as</p>
                                    <p class="truncate text-sm font-medium">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="py-1">
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="user"
                                            class="text-slate-500"></i>
                                        <span>Profile</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="settings"
                                            class="text-slate-500"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="help-circle"
                                            class="text-slate-500"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                                <div class="py-1">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-btn">
                                            <i width="18" height="18" data-feather="log-out"
                                                class="text-slate-500"></i>
                                            <span>Sign out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Profile Dropdown Ends -->
                    </div>
                    <!-- Header Options Ends -->
                </div>
            </header>
            <!-- Header Ends -->

            <!-- Page Content Starts -->
            @yield('content')
        </div>
        <!-- Wrapper Ends -->

        <!-- Search Modal Start -->
        <div class="modal" id="search-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header px-4 sm:px-6">
                        <div class="group flex items-center">
                            <i data-feather="search"
                                class="text-slate-500 group-focus-within:text-slate-600 dark:text-slate-400 dark:group-focus-within:text-slate-300"></i>
                            <input type="text"
                                class="w-full border-none bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400 focus:ring-0 dark:text-slate-200"
                                placeholder="Search" />
                            <button
                                class="rounded-primary bg-slate-100 px-2 py-1 text-[10px] font-semibold text-slate-600 hover:bg-slate-200 dark:bg-slate-700 dark:text-slate-300 dark:hover:bg-slate-600"
                                data-dismiss="modal">
                                ESC
                            </button>
                        </div>
                    </div>
                    <div class="modal-body max-h-[600px] px-4 py-6 sm:px-6"></div>
                </div>
            </div>
        </div>
        <!-- Search Modal Ends -->
    </div>


</body>

</html>
