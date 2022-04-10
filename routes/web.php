<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewBookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DeptLevelController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\authorController;
use App\Http\Controllers\bookCatController;
use App\Http\Controllers\mainPageController;
use App\Http\Controllers\quoteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
/*
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
Route::get('/home',[mainPageController::class, 'home']);
Route::get('/book_categories',[mainPageController::class, 'book_categories']);
Route::get('/bookstore',[mainPageController::class, 'bookstore']);
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
Route::post('/main_cat',[bookCatController::class, 'Create_main_cat']);
Route::post('/sub_cat',[bookCatController::class, 'Create_sub_cat']);
// Delete faculty, dept and level
Route::get('/delete-book/{id}',[bookController::class, 'deleteBook']);
Route::get('/delete-author/{id}',[authorController::class, 'deleteAuthor']);
Route::get('/delete-main_cat/{id}',[bookCatController::class, 'deleteMainCat']);
Route::get('/delete-sub_cat/{id}',[bookCatController::class, 'deleteSubCat']);

// get dept, level and faculty by id
Route::get('/getBookById/{id}',[bookController::class, 'getBookId']);
Route::get('/getauthorById/{id}',[authorController::class, 'getAuthorId']);
Route::get('/getMainCatById/{id}',[bookCatController::class, 'getMainCatId']);
Route::get('/getSubCatById/{id}',[bookCatController::class, 'getSubCatId']);

// update dept, fac and level
Route::put('/updateBook/{id}',[BookController::class, 'updateBook']);;
Route::put('/updateAuthor/{id}',[authorController::class, 'updateAuthor']);
Route::put('/update_main_cat/{id}',[bookCatController::class, 'updateMainCat']);
Route::put('/update_sub_cat/{id}',[bookCatController::class, 'updateSubCat']);
// 


// All route for quote
Route::get('cube/manage_quote',[quoteController::class, 'getQuote']);
Route::post('/quote',[quoteController::class, 'CreateQuote']);
Route::get('/getQuoteById/{id}',[quoteController::class, 'getQuoteId']);
Route::put('/updateQuote/{id}',[quoteController::class, 'updateQuote']);
Route::get('/delete-quote/{id}',[quoteController::class, 'deleteQuote']);

// All route for events
Route::get('cube/manage_event',[EventController::class, 'getEvent']);
// Route::post('/quote',[quoteController::class, 'CreateQuote']);
Route::get('/getEventById/{id}',[EventController::class, 'getEventId']);
Route::put('/updateEvent/{id}',[EventController::class, 'updateEvent']);
// Route::get('/delete-quote/{id}',[quoteController::class, 'deleteQuote']);


// gallery
Route::get('cube/manage_gallery',[GalleryController::class, 'getGallery']);
Route::post('/gallery',[GalleryController::class, 'CreateGallery']);
Route::get('/getGalleryById/{id}',[GalleryController::class, 'getgalleryId']);
Route::put('/updateGallery/{id}',[GalleryController::class, 'updateGallery']);




Route::get('cube/admin_rofile',[adminController::class, 'profile']);




// Route::get('/details/{id}',[viewPostController::class, 'getPostById'])->name('detail');
// // Route::get('/admin/create',[viewPostController::class, 'getcreatePost']);
// // Route::post('create_post',[viewPostController::class, 'createPost'])->name('create.post'); 
// Route::get('/cube/manage_post',[viewPostController::class, 'getmanagePost']);
// Route::get('/delete-post/{id}',[viewPostController::class, 'deletePost'])->name('delete_post');
// Route::post('/details/{id}',[viewPostController::class, 'update'])->name('update.post');



