<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class=" bg-sky-950 flex justify-center flex-col items-center min-h-screen gap-10">
    <h1 class="w-75 text-sky-900 text-2xl bg-stone-200 rounded-2xl text-center font-mono px-4 py-2 shadow-md">
        Register Form
    </h1>

    <div
        class="w-100 h-125 border-2 bg-stone-200 rounded-2xl flex flex-wrap flex-col gap-4 p-4 justify-center items-center shadow-lg">
        <form action="" method="POST" class="flex flex-col w-full h-full justify-center items-center gap-6">
            <div class="w-72 flex flex-col gap-1">
                <label for="name" class="font-mono text-base">Name:</label>
                <input type="text" id="name" name="name"
                    class="bg-sky-300 rounded-2xl text-base w-full px-3 py-2 outline-none focus:ring-2 focus:ring-sky-500 shadow-sm">
            </div>

            <div class="w-72 flex flex-col gap-1">
                <label for="email" class="font-mono text-base">Email:</label>
                <input type="email" id="email" name="email"
                    class="bg-sky-300 rounded-2xl text-base w-full px-3 py-2 outline-none focus:ring-2 focus:ring-sky-500 shadow-sm">
            </div>

            <div class="w-72 flex flex-col gap-1">
                <label for="password" class="font-mono text-base">Password:</label>
                <input type="password" id="password" name="password"
                    class="bg-sky-300 rounded-2xl text-base w-full px-3 py-2 outline-none focus:ring-2 focus:ring-sky-500 shadow-sm">
            </div>

            <div class="w-72">
                <button type="submit"
                    class="font-mono text-lg cursor-pointer bg-sky-600 rounded-2xl text-white w-full px-2 py-2 hover:bg-sky-700 transition">
                    Crée votre compte
                </button>
            </div>
        </form>
    </div>
</body>

</html>
