<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
    @livewireStyles
</head>

<body>
    @php
        $courses = [
            ['title' => 'laravel', 'description' => 'laravel course', 'price' => 4000, 'image' => 'https://toplearn.com/img/course/%D8%AF%D9%88%D8%B1%D9%87_%D8%A2%D9%85%D9%88%D8%B2%D8%B4_%D9%BE%D8%B1%D9%88%DA%98%D9%87_%D9%85%D8%AD%D9%88%D8%B1_livewire.jpg'],
            ['title' => 'react', 'description' => 'react course', 'price' => 3500, 'image' => 'https://toplearn.com/img/course/400x286/%D9%BE%DB%8C%D8%A7%D8%AF%D9%87_%D8%B3%D8%A7%D8%B2%DB%8C_%D8%B3%D8%A7%DB%8C%D8%AA_%D9%85%D8%B4%D8%A7%D8%A8%D9%87_%D8%AF%DB%8C%D9%88%D8%A7%D8%B1_%D8%A8%D8%A7_laravel__&_react_&_next_js_14.jpg'],
            ['title' => 'php', 'description' => 'php course', 'price' => 32000, 'image' => 'https://toplearn.com/img/course/400x286/%D8%AF%D9%88%D8%B1%D9%87_%D8%AC%D8%A7%D9%85%D9%80%D9%80%D8%B9_%D8%A2%D9%85%D9%80%D9%80%D9%88%D8%B2%D8%B4_PHP.jpg'],
            ['title' => 'livewire', 'description' => 'livewire course', 'price' => 1500, 'image' => 'https://toplearn.com/img/course/400x286/%D8%AF%D9%88%D8%B1%D9%87_%D8%A2%D9%85%D9%88%D8%B2%D8%B4_%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C_%D8%B3%D8%A7%DB%8C%D8%AA_%D9%BE%D8%B1%D9%88%DA%98%D9%87_%D9%85%D8%AD%D9%88%D8%B1.jpg']

        ]
    @endphp
    <div class="container">
        <div class="row">
            @foreach ($courses as $course)
                <livewire:show-course :course="$course" />
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>