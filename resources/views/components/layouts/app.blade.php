<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <livewire:styles />
</head>

<body>

    {{ $slot }}
    {{-- @yield('content') --}}


    <livewire:scripts />
</body>

</html>