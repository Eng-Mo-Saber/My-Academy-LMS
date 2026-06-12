<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ManagementCoursesController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\instructor\DashboardController;
use App\Http\Controllers\instructor\ManageCoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\payment\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\student\ChatController;
use App\Http\Controllers\student\MyCoursesController;
use App\Http\Controllers\student\ProfileController;
use App\Http\Controllers\student\QuizController;
use App\Http\Controllers\student\StudentDashboardController;
use Illuminate\Support\Facades\Route;

// public pages
Route::get('/', [HomeController::class, 'index'])->name('home_page');
Route::get('/login', [LoginController::class, 'index'])->name('login_page');
Route::get('/register', [RegisterController::class, 'index'])->name('register_page');
Route::get('/courses', [CourseController::class, 'index'])->name('course_page');
Route::get('/course-details', [CourseController::class, 'show'])->name('course-details_page');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout_page');
    Route::get('/payment-success', [PaymentController::class, 'payment_success'])->name('payment_success_page');
    Route::get('/payment-failed', [PaymentController::class, 'payment_failed'])->name('payment_failed_page');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

});


// instructor pages
Route::middleware(['auth', 'instructor'])->group(function () {
    Route::get('/instructor-dashboard', [DashboardController::class, 'index'])->name('instructor_dashboard');
    Route::get('/manage-courses', [ManageCoursesController::class, 'index'])->name('instructor_manage_courses');
    Route::get('/manage-lesson/{id}', [ManageCoursesController::class, 'show'])->name('instructor_manage_lesson');
    Route::get('/create-course', [ManageCoursesController::class, 'create'])->name('instructor_create_courses');

});


// admin pages
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/admin-courses', [ManagementCoursesController::class, 'index'])->name('admin_courses');
    Route::get('/admin-add-course', [ManagementCoursesController::class, 'create'])->name('admin_add_courses');
    Route::get('/admin-orders', [OrdersController::class, 'index'])->name('admin_orders');
    Route::get('/admin-users', [UsersController::class, 'index'])->name('admin_users');
    Route::get('/admin-categories', [CategoriesController::class, 'index'])->name('admin_categories');

});


// student pages
Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/student-dashboard', [StudentDashboardController::class, 'index'])->name('student_dashboard');
    Route::get('/student-chat', [ChatController::class, 'index'])->name('student_chat');
    Route::get('/student-my-courses', [MyCoursesController::class, 'index'])->name('student_my_courses');
    Route::get('/student-lesson-player/{id}', [MyCoursesController::class, 'show'])->name('student_lesson_player');
    Route::get('/student-profile', [ProfileController::class, 'index'])->name('student_profile');
    Route::get('/student-quiz', [QuizController::class, 'index'])->name('student_quiz');
});
