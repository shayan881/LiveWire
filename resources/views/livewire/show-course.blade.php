
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
</head>

<body>

    <h1>{{ $course->name }}</h1>
    <h3>{{ $course->price }}</h3>
    @livewireScripts
</body>

</html>