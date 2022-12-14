<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Panel\Tag\TagController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\ProfileController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\Panel\IniciosController;
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

/* Route::get('/', function () {
    return view('welcomeController');
}); */
Route::get('/inicio', function () {
    return view('inicio.inicio');
});

Route::get('/quienes-somos', function () {
    return view('inicio.somos');
});
Route::get('/contactanos', function () {
    return view('inicio.contacto');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


/* pagina principal */
Route::get('/', [InicioController::class, 'index']);
Route::get('/portafolio', [IniciosController::class, 'indexportafolio']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/category/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/tag/{tag}', [BlogController::class, 'tag'])->name('blog.tag');
Route::get('/post/{post}', [BlogController::class, 'show'])->name('blog.show');

/* categories */
Route::get('/categories', [CategoryController::class, 'index'])->middleware(['auth'])->name('panel.category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware(['auth'])->name('panel.category.create');
Route::get('/categories/{category}', [CategoryController::class, 'edit'])->middleware(['auth'])->name('panel.category.edit');

/* inicio */
Route::get('/inicio', [IniciosController::class, 'index'])->middleware(['auth'])->name('panel.inicio.index');
Route::get('/inicio/create', [IniciosController::class, 'create'])->middleware(['auth'])->name('panel.inicio.create');
Route::get('/inicio/{inicio}', [IniciosController::class, 'edit'])->middleware(['auth'])->name('panel.inicio.edit');

/* tags */
Route::get('/tags', [TagController::class, 'index'])->middleware(['auth'])->name('panel.tag.index');
Route::get('/tags/create', [TagController::class, 'create'])->middleware(['auth'])->name('panel.tag.create');
Route::get('/tags/{tag}', [TagController::class, 'edit'])->middleware(['auth'])->name('panel.tag.edit');

/* posts */
Route::get('/posts', [PostController::class, 'index'])->middleware(['auth'])->name('panel.post.index');
Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth'])->name('panel.post.create');
Route::get('/posts/{post}', [PostController::class, 'edit'])->middleware(['auth'])->name('panel.post.edit');

/* users */
Route::get('/users', [UserController::class, 'index'])->middleware(['auth'])->name('panel.user.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth'])->name('panel.user.create');
Route::get('/users/{user}', [UserController::class, 'edit'])->middleware(['auth'])->name('panel.user.edit');

/* profile */
Route::get('/profile', ProfileController::class)->middleware(['auth'])->name('panel.profile');

/* upload images via ckeditor */
Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');
