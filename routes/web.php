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
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\PaymentGateway\Payment;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Post1Controller;
use App\Http\Controllers\Post2Controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\StudentIController;
use App\Http\Controllers\HomeIndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Product45Controller;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\Employee47Controller;
use App\Http\Controllers\Student49Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Post54Controller;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Test57Controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Student60Controller;
use App\Http\Controllers\PruebaController;


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

/*Route::get('/{locale}', function ($locale) {
    App::setlocale($locale);
    return view('welcome');
});*/

Route::get('/',[ProductController::class, 'Index'])->name('product.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

    
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeIndexController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->post('/home', [HomeIndexController::class, 'storehome'])->name('home.store');


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

Route::get('/payment', function(){
    return Payment::process();
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

Route::get('/add-user', [UserController::class, 'insertRecord']);

Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

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

/* Paginate Controlador */

Route::get('/users', [PaginationController::class, 'allUsers'])->name('Users');

/* upload Controlador */

Route::get('/upload', [UploadController::class, 'uploadForm']);

Route::post('upload', [UploadController::class, 'uploadFile'])->name('upload.uploadfile');


/* Mail Controlador */

Route::get('/send-email', [MailController::class, 'sendEmail']);


/* Student Controlador */

Route::get('/students', [StudentController::class, 'FetchStudents']);

/*Post1 controlador */

Route::get('/add-post1', [Post1Controller::class, 'addPost1']);

Route::get('/add-comment/{id}', [Post1Controller::class, 'addComment']);

Route::get('/get-comments/{id}', [Post1Controller::class, 'getCommentsByPost']);

/*Post2 controlador */

Route::get('/add-post2', [Post2Controller::class, 'addPost']);

/* Role Controlador */

Route::get('/add-roles', [RoleController::class, 'addRole']);

Route::get('/add-users', [RoleController::class, 'addUser']);

Route::get('/rolesbyuser/{id}', [RoleController::class, 'getAllRolesByUser']);

Route::get('/usersbyrole/{id}', [RoleController::class, 'getAllUsersByRole']);

/* employee controlador este es para archivos word*/ 

Route::get('/add-employee',[EmployeeController::class, "addEmployee"]);

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);

Route::get('/import-form', [EmployeeController::class, 'importForm']);

Route::post('/import', [EmployeeController::class, 'import'])->name('employee.import');


/* Emp Controlador este es para PDF */

Route::get('/get-all-employee', [EmpController::class, 'getAllEmployees']);

Route::get('/download-pdf', [EmpController::class, 'downloadPDF']);

/* Image Controlador */

Route::get('/resize-image', [ImageController::class, 'resizeImage']);

Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('image.resize');

/* Dropzone Controlador */

Route::get('/dropzone', [DropzoneController::class, 'dropzona']);

Route::post('/dropzone-store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');

/* Gallery Controlador */

Route::get('/gallery', [GalleryController::class, 'gallery']);

/* Editor controlador */

Route::get('/editor', [EditorController::class, 'editor']);


/* StudentI controlador este es para un CRUD de imagenes */

Route::get('/add-student', [StudentIController::class, 'addStudent'])->name('create_path');

Route::post( '/add-student', [StudentIController::class, 'storeStudent'])->name('student.store');

Route::get('/all-student', [StudentIController::class, 'students'])->name('all_path');

Route::get('/edit-student/{id}', [StudentIController::class, 'editStudent']);

Route::post('/update-student', [StudentIController::class, 'updateStudent'])->name('student.update');

Route::get('/delete-student/{id}',[StudentIController::class, 'deleteStudent']);

/* Contactos Controlador ejeplo de Mensajes */

Route::get('/contact-us', [ContactController::class , 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

/* Controlador Test por lo que entendi para separa dos palabras en distintos array */

Route::get('/get-name', [TestController::class, 'getFirstLastName']);

/* Product45 Controlador para agregar productos */

Route::get('/add-product',[Product45Controller::class, 'addProducts']); 

Route::get('/search', [Product45Controller::class, 'search']);

Route::get('/autocomplete', [Product45Controller::class, 'autocomplete'])->name('autocomplete');

/* Zip Controlador para descargar archivos */

Route::get('/zip', [ZipController::class, 'zipFlile']);

Route::get('/descargar', [ZipController::class, 'descarga']);

/* Employee47 controlador destinado a realisar tablas  */

Route::get('/employee47', [Employee47Controller::class, 'index']);

/* Student49 controlador pactica 49 del curso de laravel 
https://www.youtube.com/watch?v=RyYKXyvM3D4&list=PLz_YkiqIHesvWMGfavV8JFDQRJycfHUvD */

Route::post('/add-student49',[Student49Controller::class, 'addStudent'])->name('student.add');

Route::get('/student49s', [Student49Controller::class, 'index']);

Route::get('/student49/{id}',[Student49Controller::class, 'getStudentById']);

Route::put('/student49', [Student49Controller::class, 'updateStudent'])->name('student.update');

Route::delete('/student49s/{id}', [Student49Controller::class, 'deleteStudent']);

Route::delete('/selected-students',  [Student49Controller::class, 'deleteCheckedStudents'])->name('student.deleteSelected');

/* Auth controlador */

Route::get('/register1', [AuthController::class, 'index']);

Route::Post('/register1', [AuthController::class, 'registerSubmit'])->name('auth.registersubmit');


/* Post54 controlador */

Route::get('/posrt54s', [Post54Controller::class, 'index']);

/* chart controlador */

Route::get('/chart',[ChartController::class, 'index']);

Route::get('/bar-chat',[ChartController::class, 'barChart']);

/* Test57 Controlador une dos bases de datos */

Route::get('/add-student', [Test57Controller::class, 'addStudent']);

Route::get('/add-post', [Test57Controller::class, 'addPost']);

Route::get('/students57',[Test57Controller::class, 'getStudents']);

Route::get('/posts57',[Test57Controller::class, 'getPosts']);

/* Form controlador de muti step form */

Route::get('/form',[FormController::class, 'index']);

/* Student de la leccion 60 controlador */

Route::get('/add-student60', [Student60Controller::class, 'addStudent']);

Route::get('/get-student60',[Student60Controller::class, 'getSudents']);

/* Controlador de Puerbas API reset */

Route::get('/prueba', [PruebaController::class, 'getAllPrueba'])->name('prueba.getAllPrueba');

Route::get('/pruebaUsd', [PruebaController::class, 'getallUsd'])->name('prueba.getallUsd');

Route::get('/prueba1/{name}', [PruebaController::class, 'getPruebaById'])->name('prueba1.getPruebaById');

Route::get('/prueba2/{name2}',[PruebaController::class, 'addsaldo'])->name('prueba2.addsaldo');

Route::get('/prueba-index',[PruebaController::class, 'index']);