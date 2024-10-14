<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\MemberController;
use App\Http\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

//게시판
Route::get('/boards', [BoardController::class, 'index'])->name('boards.index');
Route::get('/boards/view/{id}/{page}', [BoardController::class, 'view'])->name('boards.view');
//Route::get('/boards/write', [BoardController::class, 'write'])->name('auth.write')->middleware(Authenticate::class);
//Route::post('/boards/create', [BoardController::class, 'create'])->name('boards.create');

// laravel 11.x 미들웨어 방법
Route::middleware([Authenticate::class])->group(function(){
    Route::get('/boards/write', [BoardController::class, 'write'])->name('boards.write');
    Route::post('/boards/create', [BoardController::class, 'create'])->name('boards.create');
});

//회원
Route::get('/login', [MemberController::class, 'login'])->name('auth.login');
Route::get('/signup', [MemberController::class, 'signup'])->name('auth.signup');
Route::post('/signupok', [MemberController::class, 'signupok'])->name('auth.signupok');
Route::post('/emailcheck', [MemberController::class, 'emailcheck'])->name('auth.emailcheck');
Route::post('/loginok', [MemberController::class, 'loginok']) -> name('auth.loginok');
Route::post('/logout', [MemberController::class, 'logout']) -> name('auth.logout');



