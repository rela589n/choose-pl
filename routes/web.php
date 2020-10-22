<?php

use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\TestsController;
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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);


Route::resource('tests', TestsController::class);
Route::post('questions/{question}/answer', [QuestionsController::class, 'storeAnswer'])
    ->name('questions.answer');

Route::resource('questions', QuestionsController::class)
    ->only(['edit', 'update']);

Route::post('questions/create-empty', [QuestionsController::class, 'createEmpty'])
->name('questions.create-empty');

Route::get('questions/delete/{id}', [QuestionsController::class, 'delete'])
    ->name('questions.delete');

Route::redirect('/', \route('tests.index'));

Route::get('docs/index/', [DocumentationController::class, 'index'])
    ->name('docs.index');

Route::get('docs/pass-test/', [DocumentationController::class, 'passTest'])
    ->name('docs.pass-test');

Route::get('docs/edit-test/', [DocumentationController::class, 'editTest'])
    ->name('docs.edit-test');

