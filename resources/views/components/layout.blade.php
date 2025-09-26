<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzles</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-grey text-black-500">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-black/10">
            <div><a href="/" >
            <img src="{{Vite::asset('resources/images/logo.svg')}}"></a></div>
            <div class="space-x-6">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salary</a>
            <a href="#">Companies</a>
            </div>
            <div class=>
            <a href="#">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[990px]">
            {{$slot}}
        </main>
    </div>
</body>
</html>