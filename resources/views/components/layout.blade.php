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
                    @guest
                        <x-nav-link href='/login' :active="request()->is('login')">Log In</x-nav-link>
                        <x-nav-link href='/register' :active="request()->is('register')">Register</x-nav-link>
                    @endguest
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
