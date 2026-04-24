@props(['title' => 'Inicio'])

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>{{ $title }}</title>
</head>

<body>
    <x-nav></x-nav>

    <main class="container mx-auto mt-4">
        {{ $slot }}
    </main>
</body>

</html>