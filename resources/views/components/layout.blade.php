<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzles</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-montserrat">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div><a href="/" >
            <img src="{{Vite::asset('resources/images/logo.svg')}}"></a></div>
            <div class="space-x-6 font-bold round">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salary</a>
            <a href="#">Companies</a>
            </div>
            <div class=>
            <a href="#">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[990px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>