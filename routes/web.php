<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', function () {
    return view('user.homepage');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/gambar', function () {
    return view('user.gambar');
});

Route::get('/gambar2', function () {
    return view('user.gambar2');
});

// Route::get('/ragam2', function () {
//     return view('user.ragam2');
// });

// Route::get('/koleksi', function () {
//     return view('user.koleksi');
// });

// Route::get('/ragam', function () {
//     return view('user.ragam');
// });

// Route::get('/order', function () {
//     return view('admin.order');
// });

// Route::get('/konfirmasi', function () {
//     return view('admin.konfirmasi');
// });

//route resource
// Route::get('/product', [ProductController::class, 'index'])->name('admin.product');

// Route::post('/product', [ProductController::class, 'store'])->name('admin.store');

// Route::get('/create', [ProductController::class, 'create'])->name('admin.create');

// // Route untuk menampilkan form edit
// Route::get('/admin/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit');

// // Route untuk memproses update data
// Route::put('/product/{id}', [ProductController::class, 'update'])->name('admin.update');

// Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');

Route::controller(\App\Http\Controllers\AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

//USER
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
   
});



//ADMIN
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    Route::resource('/produk', ProductController::class);

    Route::resource('/order', \App\Http\Controllers\OrderController::class);
    
    Route::resource('/batik', \App\Http\Controllers\BatikController::class);
    
    Route::resource('/event', \App\Http\Controllers\EventController::class);
    
 
   
});







Route::resource('/produk', ProductController::class);

Route::resource('/order', \App\Http\Controllers\OrderController::class);

Route::resource('/batik', \App\Http\Controllers\BatikController::class);

Route::resource('/event', \App\Http\Controllers\EventController::class);

Route::get('/event2', [\App\Http\Controllers\EventController::class, 'showevent']);

Route::get('/event3/{id}', [\App\Http\Controllers\EventController::class, 'showEvent2'])->name('show.event2');

Route::get('/ragam', [\App\Http\Controllers\BatikController::class, 'showragam'])->name('show.ragam');

Route::get('/koleksi', [\App\Http\Controllers\ProductController::class, 'showkoleksi'])->name('show.koleksi');

Route::get('/koleksi2/{id}', [\App\Http\Controllers\ProductController::class, 'showKoleksi2'])->name('show.koleksi2');

Route::post('/add_to_cart', [\App\Http\Controllers\CartController::class, 'add_to_cart']);
// Route::post('/cart', [\App\Http\Controllers\CartController::class, 'cart']);
// Route::post('/cart', [\App\Http\Controllers\CartController::class, 'addToCart']);
// Route::get('/cart', [\App\Http\Controllers\CartController::class, 'showCart'])->name('cart.show');

Route::get('/checkout', [\App\Http\Controllers\OrderController::class, 'showCheckoutForm']);
Route::post('/checkout', [\App\Http\Controllers\OrderController::class, 'processCheckout']);

Route::post('/dashboard', [\App\Http\Controllers\OrderController::class, 'showdashboard']);

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');







