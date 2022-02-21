<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewBookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DeptLevelController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\authorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index',[viewBookController::class, 'allBooks']);
Route::get('/index2',[viewBookController::class, 'allBooks2']);
Route::get('/register',[UserController::class, 'register']);
Route::post('/register',[UserController::class, 'postRegister']);
Route::get('/login',[UserController::class, 'login']);
// Route::post('/userlogin',[UserController::class, 'postLogin']);
Route::get('/cube/index',[adminController::class, 'index']);

// Route::get('/cube/form_dept_level',[adminController::class, 'DeptLevel']);
Route::get('/cube/dept_level',[DeptLevelController::class, 'Dept_Level']);
// create new dept, level and faculty
Route::post('/dept',[DeptLevelController::class, 'postDept']);
Route::post('/faculty',[DeptLevelController::class, 'postFac']);
Route::post('/level',[DeptLevelController::class, 'postLevel']);
// Delete faculty, dept and level
Route::get('/delete-dept/{id}',[DeptLevelController::class, 'deleteDept']);
Route::get('/delete-faculty/{id}',[DeptLevelController::class, 'deleteFac']);
Route::get('/delete-level/{id}',[DeptLevelController::class, 'deleteLevel']);

// get dept, level and faculty by id
Route::get('/getdeptById/{id}',[DeptLevelController::class, 'getDeptId']);
Route::get('/getfacultyById/{id}',[DeptLevelController::class, 'getFacId']);
Route::get('/getlevelById/{id}',[DeptLevelController::class, 'getLevelId']);

// update dept, fac and level
Route::put('/updateDept/{id}',[DeptLevelController::class, 'updateDept']);;
Route::put('/updateFac/{id}',[DeptLevelController::class, 'updateFac']);;
Route::put('/updateLevel/{id}',[DeptLevelController::class, 'updateLevel']);;

// Crude operation for book, categories and author
// get all books, catefory and author 
Route::get('/cube/manage_book',[bookController::class, 'getBook']);
Route::get('/cube/manage_author',[authorController::class, 'getAuthor']);
// create new dept, level and faculty
Route::post('/book',[bookController::class, 'postBook']);
Route::post('/author',[authorController::class, 'createAuthor']);
Route::post('/level',[DeptLevelController::class, 'postLevel']);
// Delete faculty, dept and level
Route::get('/delete-book/{id}',[bookController::class, 'deleteBook']);
Route::get('/delete-faculty/{id}',[DeptLevelController::class, 'deleteFac']);
Route::get('/delete-level/{id}',[DeptLevelController::class, 'deleteLevel']);

// get dept, level and faculty by id
Route::get('/getBookById/{id}',[bookController::class, 'getBookId']);
Route::get('/getfacultyById/{id}',[DeptLevelController::class, 'getFacId']);
Route::get('/getlevelById/{id}',[DeptLevelController::class, 'getLevelId']);

// update dept, fac and level
Route::put('/updateBook/{id}',[BookController::class, 'updateBook']);;
Route::put('/updateFac/{id}',[DeptLevelController::class, 'updateFac']);;
Route::put('/updateLevel/{id}',[DeptLevelController::class, 'updateLevel']);;

// 



Route::get('cube/admin_rofile',[adminController::class, 'profile']);




// Route::get('/details/{id}',[viewPostController::class, 'getPostById'])->name('detail');
// // Route::get('/admin/create',[viewPostController::class, 'getcreatePost']);
// // Route::post('create_post',[viewPostController::class, 'createPost'])->name('create.post'); 
// Route::get('/cube/manage_post',[viewPostController::class, 'getmanagePost']);
// Route::get('/delete-post/{id}',[viewPostController::class, 'deletePost'])->name('delete_post');
// Route::post('/details/{id}',[viewPostController::class, 'update'])->name('update.post');



