<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Search Items</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Search Items</h1>
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <input 
                type="text" 
                name="query" 
                value="{{ request('query') }}" 
                class="border p-2 rounded w-full" 
                placeholder="Search for items...">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Search</button>
        </form>
        <div class="bg-white p-4 rounded shadow">
            @if(isset($query))
                <h2 class="text-xl mb-4">Results for "{{ $query }}"</h2>
                <ul>
                    @forelse($items as $item)
                        <li class="border-b py-2">{{ $item->name }}</li>
                    @empty
                        <li>No items found</li>
                    @endforelse
                </ul>
            @endif
        </div>
    </div>
</body>
</html>
