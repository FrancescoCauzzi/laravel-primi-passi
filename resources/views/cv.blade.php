<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV (First Laravel Project)</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="container py-4">
            <h1>{{ $teacher['name'] }} {{ $teacher['surname'] }}</h1>
            <img class="w-25" src="{{$teacher['image']}}" alt="">
            <h2>{{ $teacher['position'] }}</h2>
            <p> <strong>Address:</strong> {{ $teacher['address'] }}</p>
            <p><strong>Email:</strong> {{ $teacher['email'] }}</p>
            <h3>Education</h3>
            <ul>
                <li>{{$teacher['education']}}</li>
            </ul>

            <h3>Teaching Experience</h3>

            <ul>
                @foreach ($teacher['teaching_experience'] as $experience)
            <li>{{ $experience }}</li>
        @endforeach

            </ul>

            <h3>Professional Development</h3>
            <ul>
                @foreach ($teacher['professional_development'] as $prof_dev)
            <li>{{ $prof_dev }}</li>
        @endforeach
            </ul>

            <h3>Skills</h3>
            <ul>
                @foreach($teacher['skills'] as $skill)
                <li>{{$skill}}</li>
                @endforeach
            </ul>
        </div>





    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
