<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BestOffersAdminController;
use App\Http\Controllers\Admin\ServicesAdminController;
use App\Http\Controllers\Admin\UsersAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Links\CareerController;
use App\Http\Controllers\Links\ContactController;
use App\Http\Controllers\Links\EventsController;
use App\Http\Controllers\Links\PrivacyController;
use App\Http\Controllers\Links\FaqController;
use App\Http\Controllers\Admin\SubscriptionAdminController;
use App\Http\Controllers\Admin\TeamAdminController;
use App\Http\Controllers\Admin\ReviewAdminController;

Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Маршруты для авторизации
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Маршрут для личного кабинета
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard/update', [DashboardController::class, 'updateProfile'])->name('dashboard.update');

// Маршруты для подписок
Route::post('/subscriptions/purchase', [SubscriptionController::class, 'purchase'])->name('subscriptions.purchase');
Route::post('/subscriptions/process-payment', [SubscriptionController::class, 'processPayment'])->name('subscriptions.process_payment');
Route::get('/subscriptions/payment-success', [SubscriptionController::class, 'paymentSuccess'])->name('subscriptions.payment_success');
Route::get('/subscriptions/payment-failed', [SubscriptionController::class, 'paymentFailed'])->name('subscriptions.payment_failed');

// Маршруты для отзывов
Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store')->middleware('auth');
Route::delete('/reviews/{review}', [\App\Http\Controllers\ReviewController::class, 'destroy'])->name('reviews.destroy')->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/equipment', [PageController::class, 'equipment'])->name('equipment');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/trainers', [PageController::class, 'trainers'])->name('trainers');

// Админка
Route::prefix('admin')->group(function () {
    // User subscriptions management
    Route::get('/user-subscriptions', [SubscriptionAdminController::class, 'userSubscriptions'])->name('admin.subscriptions.user');
    Route::delete('/user-subscriptions/{subscription}', [SubscriptionAdminController::class, 'destroyUserSubscription'])->name('admin.subscriptions.user.destroy');

    Route::get('/indexHome', [HomeController::class, 'index'])->name('admin.home.index');
    Route::resource('bestoffers', BestOffersAdminController::class);
    Route::resource('ourService', ServicesAdminController::class);
    Route::resource('teams', TeamAdminController::class)->middleware('auth');
    Route::get('/ourServices', [ServicesAdminController::class, 'index'])->name('admin.ourService.index');
    Route::resource('subscriptions', SubscriptionAdminController::class);
    Route::get('/ourService/create', [ServicesAdminController::class, 'create'])->name('admin.ourService.create');
    Route::resource('users', UsersAdminController::class)->middleware('auth');
    Route::resource('contacts', ContactAdminController::class)->middleware('auth');
    Route::resource('reviews', ReviewAdminController::class)->except(['create', 'store'])->middleware('auth');
});
