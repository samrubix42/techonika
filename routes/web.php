<?php

use App\Livewire\Admin\Blog\AddBlog;
use App\Livewire\Admin\Blog\BlogList;
use App\Livewire\Admin\Blog\CategoryList;
use App\Livewire\Admin\Blog\UpdateBlog;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Faq\Faq;
use App\Livewire\Admin\Page\PageManagement;
use App\Livewire\Admin\RolePermission\PermissionList;
use App\Livewire\Admin\RolePermission\RoleList;
use App\Livewire\Admin\RolePermission\UserList;
use App\Livewire\Admin\Service\ServiceCategoryList;
use App\Livewire\Auth\Login;
use App\Livewire\PrivacyPolicy;
use App\Livewire\Public\About\About;
use App\Livewire\Public\Blog\Blog;
use App\Livewire\Public\Blog\BlogView;
use App\Livewire\Public\Home\Home;
use App\Livewire\Public\Home\Index;
use App\Livewire\Public\Portfolio\Portfolio;
use App\Livewire\Public\Service\Service;
use App\Livewire\Public\Service\ServiceView;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/',action: Home::class)->name('index');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/blog-view',BlogView::class)->name('blog.view');
Route::get('/about',About::class)->name('about');
Route::get('/portfolio',Portfolio::class)->name('portfolio');
Route::get('/services',Service::class)->name('services');
Route::get('/services-view',ServiceView::class)->name('services.view');
Route::get('/contact',App\Livewire\Public\Contact\Contact::class)->name('contact');
Route::get('/privacy-policy',PrivacyPolicy::class)->name('privacy-policy');
Route::get('/login',Login::class)->name('login');
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/',Dashboard::class)->name('dashboard');
    Route::get('/page-management',PageManagement::class)->name('page-management');
    Route::get('/service-category',ServiceCategoryList::class)->name('service-category');
    Route::get('/faq-management',Faq::class)->name('faq-management');
    Route::get('/Users',UserList::class)->name('users');
    Route::get('/permission',PermissionList::class)->name('permission');
    Route::get('/role-permission',RoleList::class)->name('role-permission');
    Route::get('/add-blog',AddBlog::class)->name('add-blog');
    Route::get('/contact',App\Livewire\Admin\Contact\Contact::class)->name('contact-list');
    Route::get('/update-blog/{post}',UpdateBlog::class)->name('update-blog');
    Route::get('/blog-list',BlogList::class)->name('blog-list');
    Route::get('/blog-category',CategoryList::class)->name('blog-category');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cache Cleared!";
});

Route::get("/logout", function () {
    auth()->logout();
    return redirect()->route('index');
})->name('logout');