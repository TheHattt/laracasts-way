<!doctype html>
<html lang="en">
<!-- snippet for head in resources/views/components/layout.blade.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Home page' }}</title>

    {{-- Vite-built CSS (Tailwind) --}}
    @vite('resources/css/app.css')

    {{-- optional dev fallback CDN (remove for production) --}}
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800">

<nav class="bg-slate-50 border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center ">
        <div class="hidden sm:flex sm:ml-8 sm:space-x-4">
            <x-nav-link href="/" :active=" request()->is('/') ">
                Home
            </x-nav-link>

            <x-nav-link href="/about" :active=" request()->is('about')">
                About
            </x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">
                Contact
            </x-nav-link>

        </div>
      </div>


    </div>
  </div>

</nav>

<header>
    <div>
        <div class="max-w-7xl mx-auto py-6  ">
        <h1 class="text-2xl font-semibold text-gray-900">
            {{ $heading }}
        </h1>
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto ">
  {{ $slot }}
</main>
</body>
</html>
