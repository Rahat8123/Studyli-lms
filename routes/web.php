<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;

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

Route::get('/', [UserController::class, 'Index'])->name('index');

Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
   Route::post('/user/profile/update', [UserController::class, 'UserProfileUpdate'])->name('user.profile.update');
   Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
      Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');


    Route::controller(CategoryController::class)->group(function(){


    Route::get('/all/category','AllCategory')->name('all.category');
    Route::get('/add/category','AddCategory')->name('add.category');
    Route::post('/add/category', [CategoryController::class, 'StoreCategory'])->name('store.category');
    Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
    Route::post('/update/category','UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');










});


Route::controller(CategoryController::class)->group(function(){


    Route::get('/all/subcategory','AllSubCategory')->name('all.subcategory');


    Route::get('/add/subcategory','AddCategory')->name('add.subcategory');


    Route::post('/add/subcategory','StoreCategory')->name('store.subcategory');


    Route::get('/edit/subcategory/{id}','EditSubCategory')->name('edit.subcategory');


    Route::post('/update/subcategory','UpdateSubCategory')->name('update.subcategory');


    Route::get('/delete/subcategory/{id}','DeleteSubCategory')->name('delete.subcategory');





});
// Instructor All Route


Route::controller(AdminController::class)->group(function(){


    Route::get('/all/instructor','AllInstructor')->name('all.instructor');
     Route::post('/update/user/stauts','UpdateUserStatus')->name('update.user.stauts');








});

});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/become/instructor', [AdminController::class, 'BecomeInstructor'])->name('become.instructor');
Route::post('/instructor/register', [AdminController::class, 'InstructorRegister'])->name('instructor.register');
// ->middleware(RedirectIfAuthenticated::class);

Route::middleware(['auth', 'roles:instructor'])->group(function () {
    Route::get('/instructor/dashboard', [InstructorController::class, 'InstructorDashboard'])->name('instructor.dashboard');
    Route::get('/instructor/logout', [InstructorController::class, 'InstructorLogout'])->name('instructor.logout');

Route::get('/instructor/profile', [InstructorController::class, 'InstructorProfile'])->name('instructor.profile');


Route::post('/instructor/profile/store', [InstructorController::class, 'InstructorProfileStore'])->name('instructor.profile.store');




Route::get('/instructor/change/password', [InstructorController::class, 'InstructorChangePassword'])->name('instructor.change.password');


Route::post('/instructor/password/update', [InstructorController::class, 'InstructorPasswordUpdate'])->name('instructor.password.update');
});//end ins group middleware

Route::get('/instructor/login', [InstructorController::class, 'InstructorLogin'])->name('instructor.login');
