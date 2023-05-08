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
        <h1>Welcome to our School</h1>
        <div class="__school">
            <h2>{{$data['theSchool']['name']}}</h2>
            <h4>{{$data['theSchool']['address']}}</h4>
            <div class="__school-image">
                <img src="{{$data['theSchool']['image']}}" alt="">
            </div>
            <div class="__info d-flex gap-5 py-4">

                <div class="__courses">
                    <h4>Our courses</h4>
                    <ul>
                        @foreach($data['theSchool']['courses'] as $course)
                        <li>
                            {{$course}}
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="__locations">
                    <h4>Our locations</h4>
                    <ul>
                        @foreach($data['theSchool']['locations'] as $location)
                        <li>
                            {{$location}}
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="__teachers">
                    <h4>Our teachers</h4>
                    <ul>
                        @foreach($data['teachers'] as $teacher)
                        <li>
                            {{$teacher['name']}}  {{$teacher['surname']}}
                        </li>
                        @endforeach
                        <li>
                            <a href="/teachersPage">Our teachers page</a>
                        </li>

                    </ul>


                </div>
            </div>

        </div>



    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
