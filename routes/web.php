<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$teachers = [
    [
        'name' => 'Gianfranco',
        'surname' => 'Marconi',
        'age' => 36,
        'address' => '35, Gray Road, Brighton, UK', 'email' => 'gianfrancomarc@gmail.com',
        'image' => 'https://thumbs.dreamstime.com/b/portrait-young-male-teacher-background-school-blackboard-teacher-s-day-knowledge-day-back-to-school-study-159722312.jpg',
        'position' => 'Middle School Math Teacher',
        'currentSchool' => 'St. James Middle School, Brighton',
        'education' => 'Bachelor of Arts in Education, La Sapienza University',
        'years_of_experience' => 10,
        'teaching_experience' => [
            'Taught high school math for 3 years',
            'Taught high school physics for 5 years',
            'Taught high school calculus for 2 years'
        ],
        'professional_development' => [
            'Completed courses in classroom management',
            'Attended workshops on student engagement',
            'Participated in a summer program on technology integration'
        ],
        'skills' => [
            'Strong communication skills',
            'Ability to motivate students',
            'Proficiency in technology'
        ]
    ],
    [
        'name' => 'Jane',
        'surname' => 'Smith',
        'age' => 32,
        'address' => '88, Blue Road, Brighton, UK',
        'email' => 'janesmith@gmail.com',
        'image' => 'https://cdn.theasmrindex.com/uploads/thumbs/6iEQI1imVr0.jpg',
        'position' => 'Middle School Science Teacher',
        'currentSchool' => 'St. James Middle School, Brighton',
        'education' => 'Master of Science in Education, Bath College',
        'years_of_experience' => 8,
        'teaching_experience' => [
            'Taught middle school science for 2 years',
            'Taught high school chemistry for 3 years',
            'Taught high school biology for 3 years'
        ],
        'professional_development' => [
            'Completed courses in inquiry-based learning',
            'Attended workshops on project-based learning',
            'Participated in a summer program on science education'
        ],
        'skills' => [
            'Excellent interpersonal skills',
            'Ability to engage students in learning',
            'Expertise in science'
        ]
    ]
];

$theSchool = ['name' => 'St. James Middle School, Brighton', 'address' => 'St. James Road, 44, 075OBY, Brighton', 'courses' => ['General Scientific Curriculum', 'Art and Art History', 'Math and Computer Science', 'Nurse and Medicine', 'Scenografy and Cinema'], 'locations' => ['Brighton', 'Southampton', 'Winchester',], 'image' => 'https://www.brightoncollege.org.uk/media/2276/homepage-header-clock-tower.jpg'];

// Use the $teachers array inside a route definition
Route::get('/teachersPage', function () use ($teachers) {
    return view('teachersPage', compact('teachers'));
})->name('teachersPage');

// Use the $teachers array inside another route definition and specify the index of the object in the array where to get the information
Route::get('/cv/{index}', function ($index) use ($teachers) {
    $teacher = $teachers[$index];
    return view('cv', compact('teacher'));
})->name('cv');

// use both $teachers and $theSchool array in the same page (here 'home')
Route::get('/', function () use ($theSchool, $teachers) {
    $data = [
        'theSchool' => $theSchool,
        'teachers' => $teachers,
    ];
    return view('home', compact('data'));
})->name('home');
