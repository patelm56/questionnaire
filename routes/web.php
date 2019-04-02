<?php

use App\Questionnaire;

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
    return view('questionnaires.show', [
        'questionnaire' => App\Questionnaire::first()
    ]);
});

Route::get('/question/{id}', function($id) {
    return "This is going to show a question number {$id}";
});

Route::resource('questionnaires', 'QuestionnaireController');
Route::resource('questions', 'QuestionController');

Route::get('/setup', function() {
    
    $questionnaire = Questionnaire::firstOrCreate([
        'title' => 'Buying Behaviour Survey',
        'description' => "",
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'In the past, have you ever made a purchase of a product online?',
        'photo' => 'white.png',
        'answer' => null
    ]);

     $questionnaire->questions()->firstOrCreate([
        'description' => 'Which type of goods/services have you purchased online?',
        'photo' => 'white.png',
        'answer' => null,
       
    ]);
    
    $questionnaire->questions()->firstOrCreate([
        'description' => 'Have you ever had a negative experience with an online product?',
        'photo' => 'white.png',
        'answer' => null
    ]);
    
    $questionnaire->questions()->firstOrCreate([
        'description' => 'When purchasing a product online, which factors have an affect on your purchase behaviour? i.e. price, quality brand',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'In the last calendar month, how many times have you made a purchase online?',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Does an easy-to-use user interface (UI) increase your time-spent on a website?',
        'photo' => 'white.png',
        'answer' => null
    ]);


$questionnaire->questions()->firstOrCreate([
        'description' => 'The next part of the questionnaire you will be shown a series of screenshots. Please consider the following screenshots and answer the followed up questions. The first screenshot is displayed above, in the box below please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 1)',
        'photo' => 'madorig.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 2)',
        'photo' => 'mad26.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 3)',
        'photo' => 'vertex50.png',
        'answer' => null
    ]);


    $questionnaire->questions()->firstOrCreate([
        'description' => 'Based on the screenshots that were shown, which of the websites that showed discounted prices is the most trustworthy? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);


    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website showed its uses of high security measures? (1,2,3)',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website would you return to, to browse in the future? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website made you want to purchase the product immediatley? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);
        





    $questionnaire->questions()->firstOrCreate([
        'description' => 'The next part of the questionnaire you will be shown a series of screenshots. Please consider the following screenshots and answer the followed up questions. The first screenshot is displayed above, in the box below please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 1)',
        'photo' => 'tsorig.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 2)',
        'photo' => 'ts50.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Please rate the website based on the design from 1-5. Where one being poor to 5 being excellent.(WEBSITE 3)',
        'photo' => 'gs35.png',
        'answer' => null
    ]);


    $questionnaire->questions()->firstOrCreate([
        'description' => 'Based on the screenshots that were shown, which of the websites that showed discounted prices is the most trustworthy? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);


    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website showed its uses of high security measures? (1,2,3)',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website would you return to, to browse in the future? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Which website made you want to purchase the product immediatley? (2 or 3)',
        'photo' => 'white.png',
        'answer' => null
    ]);
        

    $questionnaire->questions()->firstOrCreate([
        'description' => 'Would having regular promotions increase customer loyalty?',
        'photo' => 'white.png',
        'answer' => null
    ]);



    return redirect('/');
});