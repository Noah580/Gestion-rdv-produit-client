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
    <h1 class="w-75 text-sky-900 text-2xl bg-stone-200 rounded-2xl text-center font-mono">Votre Profil Page</h1>
    <div
        class="w-250 h-200 border-2 bg-stone-200 rounded-2xl flex flex-wrap flex-col gap-4 p-4 justify-center items-center">

        <div class="border-2 bg-stone-200 rounded-2xl p-6 w-[350px]">
            <div class="bg-white shadow-xl rounded-2xl p-6 space-y-4">
                <h2 class="text-center text-xl font-bold text-sky-900 border-b pb-2">Mon Profil</h2>

                <!-- Name -->
                <div
                    class="flex justify-between items-center bg-sky-600 text-white font-mono text-base rounded-2xl px-4 py-2">
                    <span>Name : Valeur de mon Name</span>
                    <button class="text-xs bg-white text-sky-600 px-2 py-1 rounded cursor-pointer">Modifier</button>
                </div>

                <!-- Email -->
                <div
                    class="flex justify-start items-center bg-sky-600 text-white font-mono text-base rounded-2xl px-4 py-2">
                    <span>Email : Valeur de mon Email</span>
                </div>

                <!-- Password -->
                <div
                    class="flex justify-between items-center bg-sky-600 text-white font-mono text-base rounded-2xl px-4 py-2">
                    <span>Password : Valeur de mon Password</span>
                    <button class="text-xs bg-white text-sky-600 px-2 py-1 rounded cursor-pointer">Modifier</button>
                </div>

                <!-- Number -->
                <div
                    class="flex justify-between items-center bg-sky-600 text-white font-mono text-base rounded-2xl px-4 py-2">
                    <span>Number : Valeur de mon Number</span>
                    <button class="text-xs bg-white text-sky-600 px-2 py-1 rounded cursor-pointer">Modifier</button>
                </div>
            </div>

        </div>
</body>

</html>
