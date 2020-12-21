<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CriptoController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\Login1Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[ProductController::class, 'Index'])->name('product.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

// Route::get('/user', function () {
//     return view('user');
// });

Route::get('/test',function(){
    return view('/test');
});

Route::get('/home1',function(){
    return view('/index');
});

Route::get('/about',function(){
    return view('/about');
});

Route::get('/contact',function(){
    return view('/contact');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallPost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('getpostbyid');

Route::get('/add-post',[ClientController::class, 'addPost'])->name('posts.addpost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

/* Cripto Controlador */

Route::get('/cotsacion', [CriptoController::class, 'cotisa'])->name('cripto.cotiza');

Route::get('/cotsacion/{name}', [CriptoController::class, 'getCotisaName'])->name('getcotisaname');


/* maquina Controlador */

Route::get('/maquina', [MaquinaController::class, 'maquinaId'])->name('maquina');

/* Fluent controlador */

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

/* User Controlador */ 

Route::get('/user', [UserController::class, 'index'])->name('user.index');

/* login Controlador */

Route::get('/login1', [Login1Controller::class, 'index'])->name('login1.index')->middleware('CheckUser');

Route::post('/login1', [Login1Controller::class, 'loginSubmit'])->name('login.submit');

/* Session Control */

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

/* Posts Cobtrolador */

Route::get('/posts',[PostController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/add-post',[PostController::class, 'addPodt'])->name('post.add');

Route::post('/add-post',[PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/delete-post/{id}',[PostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join',[PostController::class, 'innerJoinCaluse'])->name('post.innerjoin');

Route::get('/left-join',[PostController::class, 'leftJoinClause'])->name('post.leftjoin');

Route::get('/right-join',[PostController::class, 'rightJoin'])->name('post.rightjoin');

Route::get('/all-posts', [PostController::class, 'getAllPostUsingModel'])->name('post.getallpostUsingmodel');