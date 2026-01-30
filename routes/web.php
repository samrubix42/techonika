<?php

use App\Livewire\Admin\Blog\AddBlog;
use App\Livewire\Admin\Blog\BlogList;
use App\Livewire\Admin\Blog\CategoryList;
use App\Livewire\Admin\Blog\UpdateBlog;
use App\Livewire\Admin\Contact\PackageEnquires;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Faq\Faq;
use App\Livewire\Admin\Page\PageManagement;
use App\Livewire\Admin\Portfolio\PortfolioList;
use App\Livewire\Admin\RolePermission\PermissionList;
use App\Livewire\Admin\RolePermission\RoleList;
use App\Livewire\Admin\RolePermission\UserList;
use App\Livewire\Admin\Service\ServiceCategoryList;
use App\Livewire\Admin\Testimonial\TestimonialList;
use App\Livewire\Auth\Login;
use App\Livewire\FooterPage\Disclaimer;
use App\Livewire\FooterPage\RefundCancellation;
use App\Livewire\FooterPage\TermAndCondition;
use App\Livewire\PrivacyPolicy;
use App\Livewire\Public\About\About;
use App\Livewire\Public\Blog\Blog;
use App\Livewire\Public\Blog\BlogView;
use App\Livewire\Public\Branding\CompanyProfileDesign;
use App\Livewire\Public\Branding\Index as BrandingIndex;
use App\Livewire\Public\Branding\LogoDesign;
use App\Livewire\Public\Branding\PackageDesign;
use App\Livewire\Public\Branding\VideoExplainer;
use App\Livewire\Public\Branding\VisitingCard;
use App\Livewire\Public\DigitalMarketing\ContentWriting;
use App\Livewire\Public\DigitalMarketing\Copywriting;
use App\Livewire\Public\DigitalMarketing\LocalSeo;
use App\Livewire\Public\DigitalMarketing\PpcService;
use App\Livewire\Public\DigitalMarketing\SearchEngineOptmization;
use App\Livewire\Public\DigitalMarketing\SmmService;
use App\Livewire\Public\DigitalMarkting\Index as DigitalMarktingIndex;
use App\Livewire\Public\GraphicDesigning\Index as GraphicDesigningIndex;
use App\Livewire\Public\Home\Home;
use App\Livewire\Public\Home\Home2;
use App\Livewire\Public\Home\Index;
use App\Livewire\Public\MobileDevelopment\AndriodDevelopment;
use App\Livewire\Public\MobileDevelopment\FlutterDevelopment;
use App\Livewire\Public\MobileDevelopment\HybridWebDevelopment;
use App\Livewire\Public\MobileDevelopment\IosDevelopment;
use App\Livewire\Public\MobileDevelopment\ReactNativeDevelopment;
use App\Livewire\Public\Package\SeoPackage;
use App\Livewire\Public\Package\SmoPackage;
use App\Livewire\Public\Package\StartupPackage;
use App\Livewire\Public\Portfolio\Portfolio;
use App\Livewire\Public\Service\Service;
use App\Livewire\Public\Service\ServiceView;
use App\Livewire\Public\Webdesign\CoorporateWebDesign;
use App\Livewire\Public\Webdesign\EcommerceDesign;
use App\Livewire\Public\Webdesign\HindiWebsiteDesign;
use App\Livewire\Public\Webdesign\ResponsiveDesign;
use App\Livewire\Public\Webdesign\StaticWebsiteDesigning;
use App\Livewire\Public\WebDesigning\Index as WebDesigningIndex;
use App\Livewire\Public\WebDevelopment\CodeigniterDevelopment;
use App\Livewire\Public\WebDevelopment\Index as WebDevelopmentIndex;
use App\Livewire\Public\WebDevelopment\LaravelDevelopment;
use App\Livewire\Public\WebDevelopment\MagentoDevelopment;
use App\Livewire\Public\WebDevelopment\MernDevelopment;
use App\Livewire\Public\WebDevelopment\PhpDevelopment;
use App\Livewire\Public\WebDevelopment\ShopifyDevelopment;
use App\Livewire\Public\WebDevelopment\WooCommerce;
use App\Livewire\Public\WebDevelopment\WordpressDevelopment;
use App\Livewire\Public\WebDevelopment\YiiDevelopment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', action: Home::class)->name('home');
Route::get('/website-development-company-in-noida', WebDevelopmentIndex::class)->name('webdevelopment');
Route::get('/seo-package', SeoPackage::class)->name('seo-package');
Route::get('/smo-package', SmoPackage::class)->name('smo-package');
Route::get('/startup-package', StartupPackage::class)->name('startup-package');
Route::get('/digital-marketing-agency-in-noida', DigitalMarktingIndex::class)->name('digital-marketing');
Route::get('/website-designing-company-in-noida', WebDesigningIndex::class)->name('webdesigning');
Route::get('/mobile-app-development', App\Livewire\Public\MobileDevelopment\Index::class)->name('mobileappdevelopment');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog-view/{slug}', BlogView::class)->name('blog.view');
Route::get('/about', About::class)->name('about');
Route::get('/portfolio', Portfolio::class)->name('portfolio');
Route::get('/contact', App\Livewire\Public\Contact\Contact::class)->name('contact');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/refund-policy', RefundCancellation::class)->name('refund-policy');
Route::get('/terms-and-conditions', TermAndCondition::class)->name('terms-conditions');
Route::get('/disclaimer', Disclaimer::class)->name('disclaimer');
Route::get('/branding', BrandingIndex::class)->name('branding');

//web development routes
Route::get('laravel-development', LaravelDevelopment::class)->name('laravel-development');
Route::get('mern-development', MernDevelopment::class)->name('mern-development');
Route::get('wordpress-development', WordpressDevelopment::class)->name('wordpress-development');
Route::get('shopify-development', ShopifyDevelopment::class)->name('shopify-development');
Route::get('woo-commerce-development', WooCommerce::class)->name('woo-commerce-development');
Route::get('codeigniter-development', CodeigniterDevelopment::class)->name('codeigniter-development');
Route::get('/magento-development', MagentoDevelopment::class)->name('magento-development');
Route::get('/php-development',PhpDevelopment::class)->name('php-development');
Route::get('/symfony-development', App\Livewire\Public\WebDevelopment\SymfonyDevelopment::class)->name('symfony-development');
Route::get('/yii-development',YiiDevelopment::class)->name('yii-development');
Route::get('/wix-development',App\Livewire\Public\WebDevelopment\WixDevelopment::class)->name('wix-development');

//mobile development routes
Route::get('android-development', AndriodDevelopment::class)->name('android-development');
Route::get('ios-development', IosDevelopment::class)->name('ios-development');
Route::get('/hybrid-app-development',HybridWebDevelopment::class)->name('hybrid-app-development');
Route::get('react-native-development',ReactNativeDevelopment::class)->name('react-native-development');
Route::get('flutter-development',FlutterDevelopment::class)->name('flutter-development');

//digital marketing routes
Route::get('search-engine-optimization',SearchEngineOptmization::class)->name('search-engine-optimization');
Route::get('local-seo',LocalSeo::class)->name('local-seo');
Route::get('ppc-services',PpcService::class)->name('ppc-services');
Route::get('smo-services',App\Livewire\Public\DigitalMarketing\SmoService::class)->name('smo-services');
Route::get('smm-services',SmmService::class)->name('smm-service');
Route::get('/orm-services',App\Livewire\Public\DigitalMarketing\OrmService::class)->name('orm-services');
Route::get('copywriting',Copywriting::class)->name('copywriting');
Route::get('/content-writing',ContentWriting::class)->name('content-writing');


//web designing routes
Route::get('/responsive-web-design',ResponsiveDesign::class)->name('responsive-web-design');
Route::get('ecommerce-web-design',EcommerceDesign::class)->name('ecommerce-web-design');
Route::get('hindi-website-design',HindiWebsiteDesign::class)->name('hindi-website-design');
Route::get('corporate-website-design',CoorporateWebDesign::class)->name('corporate-website-design');
Route::get('/graphic-designing', GraphicDesigningIndex::class)->name('graphicdesigning');
Route::get('/static-website-design',StaticWebsiteDesigning::class)->name('static-website-design');


//branding routes
Route::get('/logo-designing',LogoDesign::class)->name('logo-designing');
Route::get('visit-card-designing',VisitingCard::class)->name('visit-card-designing');
Route::get('company-profile-designing',CompanyProfileDesign::class)->name('company-profile-designing');
Route::get('package-designing',PackageDesign::class)->name('package-designing');
Route::get('/2d-video-explaination',VideoExplainer::class)->name('2d-video-explaination');

Route::get('/login', Login::class)->name('login');
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/page-management', PageManagement::class)->name('page-management');
    Route::get('/service-category', ServiceCategoryList::class)->name('service-category');
    Route::get('/package-enquiry', PackageEnquires::class)->name('package-enquiry');
    Route::get('/faq-management', Faq::class)->name('faq-management');
    Route::get('/Users', UserList::class)->name('users');
    Route::get('/permission', PermissionList::class)->name('permission');
    Route::get('/role-permission', RoleList::class)->name('role-permission');
    Route::get('/add-blog', AddBlog::class)->name('add-blog');
    Route::get('/contact', App\Livewire\Admin\Contact\Contact::class)->name('contact-list');
    Route::get('/portfolio', PortfolioList::class)->name('portfolio.list');
    Route::get('/update-blog/{post}', UpdateBlog::class)->name('update-blog');
    Route::get('/blog-list', BlogList::class)->name('blog-list');
    Route::get('/testimonial', TestimonialList::class)->name('testimonial');
    Route::get('/blog-category', CategoryList::class)->name('blog-category');
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
