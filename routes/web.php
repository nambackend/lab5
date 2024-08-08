<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Travel\TravelController;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/about-us', 'about')->name('page.about');
// //Đường dẫn có tham số
// Route::get('/product/{id}', function ($id) {
//     return "Product id: $id";
// })->where('id', '[0-9]+');
// Route::get(
//     '/users/{id}/comment/{comment_id?}',
//     function ($id, $comment_id = null) {
//         return "Product ID: $id - Comment Id: $comment_id";
//     }
// );

// //Nhóm các đường dẫn có tiền tố giống nhau
// Route::prefix('admin')->group(function () {
//     Route::get('/product', function () {
//         return "PRODUCT";
//     });

//     Route::get('/users', function () {
//         return "USERS";
//     });
// });







// // Sử dụng query buider
// Route::get('/posts', function () {
//     /*  lấy dữ liệu lấy ra từ bảng posts giới hạn 10
//     $posts = DB::table('posts')->limit(10)->get(); */


//     // Cập nhật
//     // DB::table('posts')
//     // ->where('id', '=', 6)
//     // ->update(
//     //     ['title' => 'Dữ liệu được cập nhật']
//     // );

//     // Xóa
//     // DB::table('posts')->delete(37);
//     /* lấy dữ liệu từ 2 cột*/
//     // $posts = DB::table('posts')
//     //     ->select('id', 'title', 'view')
//     //     ->where('view', '>', 800)
//     //     ->get();

//     $posts = DB::table('posts')
//         ->join('categories', 'cate_id', '=', 'categories.id')
//         ->get();

//     return $posts;
// });



// Route::get('/post-list', function () {
//     $posts = DB::table('posts')->get();
//     return view('post-list', compact('posts'));  // compact('posts') là gửi dữ liệu bảng posts vào 
// });








// Route::get('/books-list', function () {
//     $booksMax = DB::table('books')
//         ->orderBy('price', 'desc')
//         ->take(8)
//         ->get();

//     $booksLow = DB::table('books')
//         ->orderBy('price', 'asc')
//         ->take(8)
//         ->get();


//     return view('books-list', compact('booksMax', 'booksLow'));
// });



// Hiển thị danh mục theo Id
// Route::get('/category/{id}', function ($id) {
// $booksListDetail = DB::table('books')
//         ->where('category_id', '=', $id)
//         ->get();
//     return view('books-list', compact('booksListDetail'));

// });


// Route::get('/category/{id}', function ($id) {
//     $booksListDetail = DB::table('books')
//     ->where('category_id', '=' , $id)
//     ->get();



//     return view('books-category', compact('booksListDetail'));
// });




// Route::get('/book/{id}', function ($id) {
//     $book = DB::table('books')
//         ->where('id', $id)
//         ->first();
//     // return view('book-detail', compact('book'));
//     return $book;
// })->name('book.detail');





// Route::prefix('category')->group(function(){

//     Route::get('/list', [CategoryController::class, 'index'])->name('category.index');
// });


// Phần book

// Route::get("/" ,[BookController::class, 'index'])->name('book.index');
// Route::get("/create" ,[BookController::class, 'create'])->name('book.create');
// Route::post("/create" ,[BookController::class, 'store'])->name('book.store');
// Route::get("/edit/{id}" ,[BookController::class, 'edit'])->name('book.edit');
// Route::put("/edit/{id}" ,[BookController::class, 'update'])->name('book.update');
// Route::delete("/delete/{id}" ,[BookController::class, 'destroy'])->name('book.destroy');



// Route::get("/test" ,[PostController::class, 'test']);
// Route::get("/post" ,[PostController::class, 'index']);








// Phần Travel

// Route::middleware(['auth'])->group(function() {
//     Route::get("/" ,[TravelController::class, 'index'])->name('travel.index');
//     Route::get("/tours-list" ,[TravelController::class, 'list'])->name('travel.list');
//     Route::get("/tours-detail/{id}" ,[TravelController::class, 'detail'])->name('travel.detail');


//     // Admin
//     Route::get("/tours-admin-list" ,[TravelController::class, 'listAdmin'])->name('travel.list.admin');
//     Route::get("/tours-admin-list-create" ,[TravelController::class, 'createAdmin'])->name('travel.create.admin');
//     Route::post("/tours-admin-list-create" ,[TravelController::class, 'storeAdmin'])->name('travel.store.admin');
//     Route::get("/tours-admin-list-edit/{id}" ,[TravelController::class, 'editAdmin'])->name('travel.edit.admin');
//     Route::put("/tours-admin-list-edit/{id}" ,[TravelController::class, 'updateAdmin'])->name('travel.update.admin');
//     Route::delete("/tours-admin-list-delete/{id}" ,[TravelController::class, 'destroyAdmin'])->name('travel.destroy.admin');


//     // User
//     Route::get("/tours-user-list" ,[TravelController::class, 'user'])->name('travel.list.user');
//     Route::get("/tours-user-list-create" ,[TravelController::class, 'createUser'])->name('travel.create.user');
//     Route::post("/tours-user-list-create" ,[TravelController::class, 'storeUser'])->name('travel.store.user');
//     Route::get("/tours-user-list-edit/{id}" ,[TravelController::class, 'editUser'])->name('travel.edit.user');
//     Route::put("/tours-user-list-edit/{id}" ,[TravelController::class, 'updateUser'])->name('travel.update.user');
//     Route::delete("/tours-user-list-delete/{id}" ,[TravelController::class, 'destroyUser'])->name('travel.destroy.user');
//     // Route::get('/user', [LoginController::class, 'user' ])->name('user.index');

//     });




// CRUD

// Route::get('/test', [PostController::class , 'test']);
// Route::get('/posts', [PostController::class, 'index'])->name('post.index');
// Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
// Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
// Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
// Route::put('/post/edit/{post}', [PostController::class, 'update'])->name('post.update');

// Route::delete('/post/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');






Route::get('/movies', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('movie.create');
Route::post('/movies/store', [MoviesController::class, 'store'])->name('movie.store');
Route::get('/movies/edit/{id}', [MoviesController::class, 'edit'])->name('movie.edit');
Route::put('/movies/edit/{id}', [MoviesController::class, 'update'])->name('movie.update');

Route::get('/movies/detail/{id}', [MoviesController::class, 'detail'])->name('movie.detail');

Route::delete('/movies/delete/{id}', [MoviesController::class, 'destroy'])->name('movie.destroy');



// Route::get('/login', [LoginController::class, 'login' ])->name('login');
// Route::post('/login', [LoginController::class, 'postLogin' ])->name('postLogin');
// Route::get('/logout', [LoginController::class, 'logout' ])->name('logout');
// Route::get('/register', [LoginController::class, 'register' ])->name('register');
// Route::post('/register', [LoginController::class, 'postRegister' ])->name('postRegister');


// Route::get('/active/{id}', [LoginController::class, 'active'])->name('active');


// Route::get('/edit_account/{id}', [LoginController::class, 'edit' ])->name('editAccount');
// Route::put('/edit_account/{id}', [LoginController::class, 'editAccount' ])->name('postEditAccount');


// Route::get('/password/update/{id}', [LoginController::class, 'pass' ])->name('password');
// Route::post('/password/update/{id}', [LoginController::class, 'updatePassword'])->name('password.update');
