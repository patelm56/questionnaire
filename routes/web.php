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
        'title' => 'Some title',
        'description' => 'some description'
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'question 1',
        'photo' => 'mad26.png',
        'answer' => null
    ]);

     $questionnaire->questions()->firstOrCreate([
        'description' => 'question 2',
        'answer' => null,
        'photo' => 'ts50.png'
    ]);
    
    $questionnaire->questions()->firstOrCreate([
        'description' => 'question 3',
        'answer' => null
    ]);
    
    $questionnaire->questions()->firstOrCreate([
        'description' => 'question 4',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'question 5',
        'answer' => null
    ]);

    $questionnaire->questions()->firstOrCreate([
        'description' => 'question 6',
        'answer' => null
    ]);

    return redirect('/');
});