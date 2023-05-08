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
        'address' => '35, Gray Road, Brighton, UK',
        'image' => 'https://thumbs.dreamstime.com/b/portrait-young-male-teacher-background-school-blackboard-teacher-s-day-knowledge-day-back-to-school-study-159722312.jpg',
        'position' => 'Middle School Math Teacher',
        'currentSchool' => 'St. James Middle School, Brighton',
        'education' => 'Bachelor of Arts in Education, XYZ University',
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
        'image' => 'https://cdn.theasmrindex.com/uploads/thumbs/6iEQI1imVr0.jpg',
        'position' => 'Middle School Science Teacher',
        'currentSchool' => 'St. James Middle School, Brighton',
        'education' => 'Master of Science in Education, ABC College',
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

// Use the $teachers array inside a route definition
Route::get('/', function () use ($teachers) {
    return view('home', compact('teachers'));
});

Route::get('/cv', function () use ($teachers) {
    return view('cv', compact('teachers'));
});


// Route::get('/cv/{index}', function ($index) use ($teachers) {
//     $teacher = $teachers[$index];
//     return view('cv', compact('teacher'));
// })->name('teacher.cv');
