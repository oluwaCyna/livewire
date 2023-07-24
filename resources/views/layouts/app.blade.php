<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @livewireStyles
</head>
<body>
    <div class="d-flex">
        <a type="button" href="/counter" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</a>
        <a type="button" href="/calculator" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Calculator</a>
        <a type="button" href="/to-do" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">ToDo</a>
        <a type="button" href="/cascading-dropdown" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Cascading Dropdown</a>
        <a type="button" href="/registration" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Registration</a>
        <a type="button" href="/counter" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</a>

    </div>

    {{ $slot }}

    @livewireScripts
</body>
</html>