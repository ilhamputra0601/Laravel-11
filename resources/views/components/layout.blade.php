<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{  $attributes['title'] }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="h-full">
    <div class="min-h-full">
      <x-navbar/>
      <x-header>{{ $attributes['title'] }}</x-header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
               {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
