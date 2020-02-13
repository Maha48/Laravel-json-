<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/maha1', function () {
    return 'welcome!!';
});
Route::get('/cv', function () {
    $user = [
        'username' => 'Maha ****', 
        'bio' => 'I am Maha from KSA  fresh computer science graduate. ',
        'gmail' => '****@gmail.com',
        'phone' => '+966****',
        'github' => 'github.com/Maha48',
        'location' => 'Riyadh, Saudi Arabia',
        'linkedin' => 'linkedin.com/in/****'];
    $education = [
        'education' => 'EDUCATION & CERTIFICATION',
        'certification' => 'Bachelor of Computer Science (Jan 2020)',
        'certification2' => 'Data Analyst Nano-Degree (Dec 2019) Udacity',
        'experience1' =>'- Flexible Exams Planner System: built as the graduation project, aiming to solve exam timetable scheduling issues.',
        'experience2'=> ' - Collaborative Training: a 90-hour training, working on the preparation of management reports on schools systems.',
        'skils1' =>'- Web Development: PHP, Python, HTML, CSS, and JavaScript.',
        'skils2' => '- Databases: MySQL, MS SQL, Server Management Studio.',
        'skils3' => '- Data Analysis using Pandas and Numpy.',
        'skils4' => '- Data Visualization using Matplotlib and Seaborn.',
        'skils5' => '- Microsoft Office Applications.',
        'awards1' => 'Certificate of Academic Excellence (2019)',
        'awards2' => 'Certificate of Appreciation for participating in  student club (2018)',
        'training1' => '- Introduction to Cybersecurity - Cisco Networking Academy.',
        'training2' => '- Full Stack Developer - Udacity.',
        'training3' => '- Python for Absolute Beginners - Udemy.'
    ];
    

    return view('test', $user ,$education );
});


Route::get('/maha3', function () {
    return ['name' => 'maha' ,'age'=>'1'];
});
