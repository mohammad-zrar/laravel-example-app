<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-start  ">
                    <div class="hidden md:flex shrink-0 items-center ">
                        <img class="h-8 w-auto" src="/images/digitalization.png" alt="Your Company">
                    </div>
                    <div class="ml-6 block">
                        <div class="flex space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>

                            <x-nav-link href="/jobs" :active="request()->is('jobs')">jobs</x-nav-link>

                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <img class="h-8 w-8 rounded-full" src="/images/mr-robot.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </nav>

    <header
        class="bg-white shadow w-full mx-auto py-4   px-4 sm:px-6 lg:px-16 sm:flex sm:justify-between sm:items-center">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

        <x-button href="/jobs/create">Create Job</x-button>
    </header>

    <main class="pl-8 pt-8 ">

        {{ $slot }}
    </main>
</body>

</html>
