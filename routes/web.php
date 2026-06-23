<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Models\Trip;

Route::get('/', function () {
return view('welcome');});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // أو أي صفحة تريد التوجيه لها بعد تسجيل الخروج
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/request', [RequestController::class, 'create'])->name('request.create');
    Route::post('/request', [RequestController::class, 'store'])->name('request.store');
});
require __DIR__.'/auth.php';



Route::get('/request/create', function () {
    return view('request'); 
})->name('request.create');

Route::get('/recommendations', function () {
    return view('recommendations'); 
})->name('recommendations');
Route::post('/recommendations', function () {
    return redirect()->back()->with('success', 'تم إرسال التقييم');
});



Route::get('/unauthorized', function () {
    return view('unauthorized'); 
})->name('unauthorized');
