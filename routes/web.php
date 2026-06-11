<?php

use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\instructor\DashboardController;
use App\Http\Controllers\instructor\ManageCoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\payment\PaymentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;






//public pages
Route::get('/',[HomeController::class , 'index'])->name('home_page');
Route::get('/login',[LoginController::class , 'index'])->name('login_page');
Route::get('/register',[RegisterController::class , 'index'])->name('register_page');
Route::get('/courses',[CourseController::class , 'index'])->name('course_page');
Route::get('/course-details{id}',[CourseController::class , 'show'])->name('course-details_page');
Route::get('/checkout',[PaymentController::class , 'index'])->name('checkout_page');
Route::get('/payment-success',[PaymentController::class , 'payment_success'])->name('payment_success_page');
Route::get('/payment-failed',[PaymentController::class , 'payment_failed'])->name('payment_failed_page');

// instructor pages
Route::get('/instructor-dashboard',[DashboardController::class , 'index'])->name('instructor_dashboard');
Route::get('/manage-courses',[ManageCoursesController::class , 'index'])->name('instructor_manage_courses');
Route::get('/manage-lesson /{id}',[ManageCoursesController::class , 'show'])->name('instructor_manage_lesson');
Route::get('/create-course',[ManageCoursesController::class , 'create'])->name('instructor_create_courses');
