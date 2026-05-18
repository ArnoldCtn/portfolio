<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] ?? 'Project' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-t from-[#0277BD] to-[#B3E5FC] min-h-screen">
    <div class="max-w-4xl mx-auto p-6">
        <a href="{{ url('/') }}" class="text-white bg-[#01579B] px-4 py-2 rounded inline-block mb-6">&larr; Back</a>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-72 object-cover">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-[#01579B] mb-4">{{ $project['title'] }}</h1>
                <p class="text-lg text-gray-700">{{ $project['description'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>
