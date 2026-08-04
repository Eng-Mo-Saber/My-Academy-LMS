<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin_insrtuctor\ManagementCoursesController;
use App\Http\Controllers\admin_insrtuctor\ManagementLessonsController;
use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\instructor\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\payment\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\student\ChatController;
use App\Http\Controllers\student\MyCoursesController;
use App\Http\Controllers\student\ProfileController;
use App\Http\Controllers\student\QuizController;
use App\Http\Controllers\student\StudentDashboardController;
use Illuminate\Support\Facades\Route;



// public pages
Route::get('/', [HomeController::class, 'index'])->name('home_page');
Route::get('/login', [LoginController::class, 'index'])->name('login_page');
Route::post('/login-store', [LoginController::class, 'store'])->name('login_store');
Route::get('/register', [RegisterController::class, 'index'])->name('register_page');
Route::post('/register-store', [RegisterController::class, 'store'])->name('register_store');
Route::get('/courses', [CourseController::class, 'index'])->name('course_page');
Route::get('/course-details', [CourseController::class, 'show'])->name('course-details_page');
// register socialite github
Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'auth_redirect'])->name('auth_redirect');
Route::get('/auth/callback/{provider}', [SocialiteController::class, 'auth_callback'])->name('auth_callback');

Route::middleware(['auth'])->group(function () {

    Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout_page');
    Route::get('/payment-success', [PaymentController::class, 'payment_success'])->name('payment_success_page');
    Route::get('/payment-failed', [PaymentController::class, 'payment_failed'])->name('payment_failed_page');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

});


// admin and instructor
Route::middleware(['auth', 'role:admin,instructor'])->group(function () {
    Route::get('/add-course', [ManagementCoursesController::class, 'create'])->name('add_courses');
    Route::get('/manage-courses', [ManagementCoursesController::class, 'index'])->name('manage_courses');
    Route::get('/manage-lesson', [ManagementLessonsController::class, 'index'])->name('manage_courses_lessons');
    Route::get('/manage-lesson/{id}', [ManagementLessonsController::class, 'show'])->name('manage_lesson');

});

// instructor pages
Route::middleware(['auth', 'instructor'])->group(function () {
    Route::get('/instructor-dashboard', [DashboardController::class, 'index'])->name('instructor_dashboard');

});

// admin pages
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/admin-orders', [OrdersController::class, 'index'])->name('admin_orders');
    Route::get('/admin-users', [UsersController::class, 'index'])->name('admin_users');
    Route::post('/add-user', [UsersController::class, 'store'])->name('add_users');
    Route::delete('/delete-user/{id}', [UsersController::class, 'destroy'])->name('delete_users');
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
