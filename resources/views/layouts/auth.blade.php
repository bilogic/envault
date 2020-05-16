<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">

    <link href="/images/favicon.png" rel="icon" type="image/png">

    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="min-h-screen bg-gray-900 flex flex-col justify-center py-12 px-2 sm:px-6">
<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="/images/icon-white.svg" alt="Envault logo" />
</div>

<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-gray-800 py-8 px-4 rounded-lg sm:px-10">
        @yield('content')
    </div>
</div>

<script src="/js/app.js"></script>
@livewireScripts
</body>

</html>