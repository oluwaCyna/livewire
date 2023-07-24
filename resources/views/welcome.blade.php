<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @livewireStyles
</head>
<body>
    <div class="d-flex">
        <button type="button" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</button>
        <button type="button" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Calculator</button>
        <button type="button" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</button>
        <button type="button" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</button>
        <button type="button" class="btn btn-primary w-100" style="border-radius: 0; border:2px solid grey">Counter</button>

    </div>
    @livewire('count')
    @livewire('calculator')

    @livewireScripts
</body>
</html>