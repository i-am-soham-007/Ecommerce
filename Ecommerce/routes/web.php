<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/{url}', [App\Http\Controllers\Frontend\ProductsController::class, 'listing']); // categories wise products
Route::get('/users/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::group(['middleware' => ['prevent-back-history']],function(){
        Route::get('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'ShowLoginForm'])->name('admin.login');
        Route::post('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
        
        // ADMIN SETTINGS
        Route::get('/settings',[App\Http\Controllers\AdminController::class, 'Setting'])->name('admin.Setting');
        Route::post('/update-password',[App\Http\Controllers\AdminController::class,'UpdateCurrentPassword'])->name('admin.UpdateCurrentPassword');
        Route::match(['get', 'post'],'update-admin-details',[App\Http\Controllers\AdminController::class,'updateAdminDetails'])->name('admin.updateAdminDetails');
        
        //SECTION ROUTES
        Route::get('/add-section',[App\Http\Controllers\SectionController::class, 'AddSection'])->name('admin.AddSection');
        Route::get('/section-list',[App\Http\Controllers\SectionController::class, 'SectionList'])->name('section.SectionList');
        Route::post('/update-section-status',[App\Http\Controllers\SectionController::class, 'UpdateStatus'])->name('section.UpdateStatus');
        
        // CATEGORY MODULE
        Route::get('/add-category', [App\Http\Controllers\AdminController::class, 'AddCategory'])->name('admin.AddCategory');
        Route::get('/category-list',[App\Http\Controllers\CategoryController::class, 'categories'])->name('category.categories');
        Route::post('/update-category-status',[App\Http\Controllers\CategoryController::class, 'UpdateStatus'])->name('category.UpdateStatus');
        Route::match(['get', 'post'],'/add-edit-category/{id?}',[App\Http\Controllers\CategoryController::class,'addEditCategory'])->name('category.addEditCategory');
        Route::post('/append-categories',[App\Http\Controllers\CategoryController::class, 'appendCategory'])->name('category.appendCategory');
        // DELETE IMAGES 
        Route::get('/delete-category-image/{id}',[App\Http\Controllers\CategoryController::class, 'deleteCategoryImage'])->name('category.deleteCategoryImage');
        Route::get('/delete-Category/{id}',[App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('category.deleteCategory');
        

        // SUBCATEGORY MODULE
        Route::get('/subcategory-list',[App\Http\Controllers\SubCategoryController::class, 'subcategories'])->name('subcategory.subcategories');
        Route::post('/update-subcategory-status',[App\Http\Controllers\SubCategoryController::class, 'UpdateStatus'])->name('subcategory.UpdateStatus');
        Route::match(['get', 'post'],'/add-edit-subcategory/{id?}',[App\Http\Controllers\SubCategoryController::class,'addEditSubCategory'])->name('subcategory.addEditSubCategory');
        Route::post('/append-subcategories',[App\Http\Controllers\SubCategoryController::class, 'appendSubCategory'])->name('subcategory.appendSubCategory');
        // SUBCATEGORY  IMAGES DELETE ROUTES 
        Route::get('/delete-subcategory-image/{id}',[App\Http\Controllers\SubCategoryController::class, 'deleteSubCategoryImage'])->name('subcategory.deleteSubCategoryImage');
        Route::get('/delete-subcategory/{id}',[App\Http\Controllers\SubCategoryController::class, 'deleteSubCategory'])->name('subcategory.deleteSubCategory');


        // Products Route
        Route::get('/product-list',[App\Http\Controllers\ProductsController::class, 'products'])->name('product.products');
        Route::match(['get', 'post'],'/add-edit-product/{id?}',[App\Http\Controllers\ProductsController::class, 'addEditProduct'])->name('product.addEditProduct');
        Route::post('/update-product-status',[App\Http\Controllers\ProductsController::class, 'UpdateStatus'])->name('product.UpdateStatus');
        Route::get('/delete-product/{id}',[App\Http\Controllers\ProductsController::class, 'deleteProduct'])->name('product.deleteProduct');
        // DELETE PRODUCTS IMAGES 
        Route::get('/delete-product-image/{id}',[App\Http\Controllers\ProductsController::class, 'deleteProductImage'])->name('product.deleteProductImage');
        Route::get('/delete-product-video/{id}',[App\Http\Controllers\ProductsController::class, 'deleteProductVideo'])->name('product.deleteProductVideo');
        

        // Products Attribute Route
        Route::match(['get', 'post'],'/add-attributes/{id}',[App\Http\Controllers\ProductsController::class, 'addAttributes'])->name('product.addAttributes');
        Route::post('/edit-attributes/{id}',[App\Http\Controllers\ProductsController::class, 'editAttributes'])->name('product.editAttributes');
        Route::post('/update-attribute-status',[App\Http\Controllers\ProductsController::class, 'UpdateAttributeStatus'])->name('product.UpdateAttributeStatus');
        Route::get('/delete-attribute/{id}',[App\Http\Controllers\ProductsController::class, 'deleteAttribute'])->name('product.deleteAttribute');
        
        // PRODUCT IMAGES TABLE ROUTES
        Route::match(['get', 'post'],'/add-images/{id}',[App\Http\Controllers\ProductsController::class, 'addImages'])->name('product.addImages');
        Route::post('/update-image-status',[App\Http\Controllers\ProductsController::class, 'UpdateImageStatus'])->name('product.UpdateImageStatus');
        Route::get('/delete-image/{id}',[App\Http\Controllers\ProductsController::class, 'deleteImage'])->name('product.deleteImage');
        
        
        // BRAND ROUTE
        Route::get('/brands-list',[App\Http\Controllers\BrandController::class, 'Brands'])->name('brand.Brands');
        Route::post('/update-brand-status',[App\Http\Controllers\BrandController::class, 'UpdateBrandStatus'])->name('brand.UpdateBrandStatus');
        Route::match(['get', 'post'],'/add-edit-brand/{id?}',[App\Http\Controllers\BrandController::class, 'addEditBrand'])->name('brand.addEditBrand');
        Route::get('/delete-brand/{id}',[App\Http\Controllers\BrandController::class, 'deleteBrand'])->name('product.deleteBrand');
        
        // Banner Route
        Route::get('/banner-list',[App\Http\Controllers\BannerController::class, 'Banners'])->name('banner.Banners');
        Route::match(['get', 'post'],'/add-edit-banner/{id?}',[App\Http\Controllers\BannerController::class, 'addEditBanner'])->name('banner.addEditBanner');
        Route::post('/update-banner-status',[App\Http\Controllers\BannerController::class, 'UpdateBannerStatus'])->name('banner.UpdateBannerStatus');
        Route::get('/delete-banner/{id}',[App\Http\Controllers\BannerController::class, 'deleteBanner'])->name('banner.deleteBanner');

        // Admin Settings Route
        Route::post('/check-current-pwd',[App\Http\Controllers\AdminController::class, 'chkCurrentPassword'])->name('admin.chkCurrentPass');

        Route::get('/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});

