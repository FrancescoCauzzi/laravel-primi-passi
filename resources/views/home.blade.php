<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home (First Laravel Project)</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container py-3">
        <h1>Welcome to our School Organization Page</h1>
        <div class="d-flex gap-2">
            @foreach($teachers as $index=>$teacher)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <img src="{{$teacher['image']}}" class="card-img-top" alt="...">
                <h5 class="card-title">{{$teacher['name']}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$teacher['surname']}}</h6>
                <p class="card-text">{{$teacher['age']}} years old and works as {{$teacher['position']}} in the {{$teacher['currentSchool']}}.</p>
                <a href="{{ route('cv', ['index' => $index]) }}">{{ $teacher['name'] }} {{ $teacher['surname'] }}</a>
                <br>
                <a href="#" class="card-link">To the school page</a>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
