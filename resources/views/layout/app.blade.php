<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{config('app.name', 'Laravel')}}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="font-family: 'figtree', sans-serif">

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


        {{-- Page Heading --}}
        @isset($header)

            <header class="bg-white dark:bg-gray-800 shadow">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{$header}}
                </div>

            </header>

        @endisset

        {{-- Page Content --}}
        <main>
            {{$slot}}
        </main>

    </div>

</body>

</html>