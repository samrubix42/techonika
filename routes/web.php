<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Faq\Faq;
use App\Livewire\Admin\Page\PageManagement;
use App\Livewire\Admin\RolePermission\PermissionList;
use App\Livewire\Admin\RolePermission\RoleList;
use App\Livewire\Admin\RolePermission\UserList;
use App\Livewire\Admin\Service\ServiceCategoryList;
use App\Livewire\Public\Home\Index;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/',action: Index::class)->name('index');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',Dashboard::class)->name('dashboard');
    Route::get('/page-management',PageManagement::class)->name('page-management');
    Route::get('/service-category',ServiceCategoryList::class)->name('service-category');
    Route::get('/faq-management',Faq::class)->name('faq-management');
    Route::get('/Users',UserList::class)->name('users');
    Route::get('/permission',PermissionList::class)->name('permission');
    Route::get('/role-permission',RoleList::class)->name('role-permission');
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