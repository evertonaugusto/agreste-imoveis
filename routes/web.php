<?php

use App\Models\Imovel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [SystemController::class, 'index'])->name('system.index');

Route::get('/imoveis/create', [ImovelController::class, 'create'])
    ->name('imoveis.create');

Route::get('/imoveis', [ImovelController::class, 'index'])
    ->name('imoveis.index');

Route::get('/imoveis/{imovel}', [ImovelController::class, 'show'])
    ->name('imoveis.show');

Route::resource('imoveis', ImovelController::class)->only([
    'store', 'update', 'destroy', 'edit'
])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
