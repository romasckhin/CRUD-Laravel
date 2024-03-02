<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$articles = [
    [
        'id' => 1,
        'name' => 'Roman',
        'age' => 24,
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.'
    ],
    [
        'id' => 2,
        'name' => 'Sabina',
        'age' => 24,
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.'
    ],
];

Route::get('/', function () {
    return view('pages.main');
})->name('main');

Route::get('/articles', function () use ($articles) {
    return view('pages.articles',[
        'articles' => $articles
    ]);
})->name('articles');

Route::get('/article/{id}', function ($id) use ($articles){

    $article = array_filter($articles, function ($item) use ($id) {
        return $item['id'] === (int)$id;
    });

    if (empty($article)) {
        return abort(404);
    }

    return view('pages.article', [
        'article' => $article
    ]);
})->name('article');