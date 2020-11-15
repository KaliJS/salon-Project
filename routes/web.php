<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TodaysAppointmentController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\SalesInvoicesController;
use App\Http\Controllers\SalesPurchasesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InventorySalonUsesController;
use App\Http\Controllers\InventoryRetailProductsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\StaffSkillsController;
use App\Http\Controllers\StaffDesignationController;
use App\Http\Controllers\ProductsGenricController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductsBrandsController;
use App\Http\Controllers\ServicesCategoriesController;
use App\Http\Controllers\ServicesSubCategoriesController;
use App\Http\Controllers\ServicesPreSubCategoriesController;
use App\Http\Controllers\ContactUsController;
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
//    // return view('welcome');
//     If(Auth::check())
//         {
//             return redirect('/login');
//         }else{
//             return redirect('/login');
//         }
// });

Route::get('/',function(){
	return view('users.index');
});
Route::get('/about',function(){
	return view('users.about');
});
Route::get('/gallery',function(){
	return view('users.gallery');
});
Route::get('/services',function(){
	return view('users.services');
});

Route::get('/covid',function(){
	return view('users.covid');
});

Route::resource('/contact', ContactUsController::class);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::prefix('admin')->group(function () {
    
Route::resource('/dashboard', DashboardController::class);
Route::resource('/customers', CustomersController::class);
Route::resource('/todays-appointment', TodaysAppointmentController::class);

Route::resource('/dashboard-user', DashboardUserController::class);

Route::resource('/appointments', AppointmentsController::class);

Route::resource('/sales-invoices', SalesInvoicesController::class);

/******************Start Purchases*******************/

Route::resource('/sales-purchases', SalesPurchasesController::class);

/********************End Purchases********************/



//users or customers
Route::resource('/users', CustomersController::class);
Route::get('/editCustomer/{id}', [CustomersController::class, 'editCustomer']);
Route::post('/updateCustomer/{id}', [CustomersController::class, 'updateCustomer']);
Route::post('/destroyCustomer/{id}', [CustomersController::class, 'destroyCustomer']);

//services
Route::get('/services', [ServicesController::class, 'index']);

//services-categories
Route::resource('/services-categories', ServicesCategoriesController::class);
Route::get('/services-categories/editCategory/{id}', [ServicesCategoriesController::class, 'editCategory']);
Route::post('/services-categories/updateCategory/{id}', [ServicesCategoriesController::class, 'updateCategory']);
Route::post('/services-categories/destroyCategory/{id}', [ServicesCategoriesController::class, 'destroyCategory']);

//services-subcategory
Route::resource('/services-subcategories',ServicesSubCategoriesController::class);
Route::get('/services-subcategories/editSubCategory/{id}', [ServicesSubCategoriesController::class, 'editSubCategory']);
Route::post('/services-subcategories/updateSubCategory/{id}', [ServicesSubCategoriesController::class, 'updateSubCategory']);
Route::post('/services-subcategories/destroySubCategory/{id}', [ServicesSubCategoriesController::class, 'destroySubCategory']);

//services-presubcategories
Route::resource('/services-presubcategories', ServicesPreSubCategoriesController::class);
Route::get('/services-presubcategories/editPreSubCategory/{id}', [ServicesPreSubCategoriesController::class, 'editPreSubCategory']);
Route::post('/services-presubcategories/updatePreSubCategory/{id}', [ServicesPreSubCategoriesController::class, 'updatePreSubCategory']);
Route::post('/services-presubcategories/destroyPreSubCategory/{id}', [ServicesPreSubCategoriesController::class, 'destroyPreSubCategory']);

//products
Route::resource('/products', ProductsController::class);
Route::get('/products/editProduct/{id}', [ProductsController::class, 'editProduct']);
Route::post('/products/updateProduct/{id}', [ProductsController::class, 'updateProduct']);
Route::post('/products/destroyProduct/{id}', [ProductsController::class, 'destroyProduct']);

//categories
Route::resource('/products-categories', ProductCategoryController::class);
Route::get('/products-categories/editCategory/{id}', [ProductCategoryController::class, 'editCategory']);
Route::post('/products-categories/updateCategory/{id}', [ProductCategoryController::class, 'updateCategory']);
Route::post('/products-categories/destroyCategory/{id}', [ProductCategoryController::class, 'destroyCategory']);

//brands
Route::resource('/products-brands', ProductsBrandsController::class);
Route::get('/products-brands/editBrand/{id}', [ProductsBrandsController::class, 'editBrand']);
Route::post('/products-brands/updateBrand/{id}', [ProductsBrandsController::class, 'updateBrand']);
Route::post('/products-brands/destroyBrand/{id}', [ProductsBrandsController::class, 'destroyBrand']);

//genrics
Route::resource('/products-genrics', ProductsGenricController::class);
Route::get('/products-genrics/editGenric/{id}', [ProductsGenricController::class, 'editGenric']);
Route::post('/products-genrics/updateGenric/{id}', [ProductsGenricController::class, 'updateGenric']);
Route::post('/products-genrics/destroyGenric/{id}', [ProductsGenricController::class, 'destroyGenric']);


/*************************Start Salon-Uses********************/

Route::resource('/salon-uses', InventorySalonUsesController::class);
Route::get('/salon-uses/editSalonUse/{id}', [InventorySalonUsesController::class, 'editSalonUse']);
Route::post('/salon-uses/updateSalonUse/{id}', [InventorySalonUsesController::class, 'updateSalonUse']);
Route::post('/salon-uses/destroySalonUse/{id}', [InventorySalonUsesController::class, 'destroySalonUse']);

/*************************End Salon-Uses****************salon-uses

/*********************Start Retail-Products*****************/
Route::resource('/retail-products', InventoryRetailProductsController::class);
Route::get('/retail-products/editRetailProduct/{id}', [InventoryRetailProductsController::class, 'editRetailProduct']);
Route::post('/retail-products/updateRetailProduct/{id}', [InventoryRetailProductsController::class, 'updateRetailProduct']);
Route::post('/retail-products/destroyRetailProduct/{id}', [InventoryRetailProductsController::class, 'destroyRetailProduct']);

/*********************End Retail-Products********************/


/********************* Staff Start *******************/

Route::resource('/staff', StaffController::class);

/********************* Staff End ************************/


/********************* Appointments Start ***************/

Route::post('/appointments/getStylistData',[AppointmentsController::class,'getStylistData']);
Route::get('/appointments/getCustomerData', [AppointmentsController::class,'getCustomerData']);
Route::post('/appointments/getServiceData',[AppointmentsController::class,'getServiceData']);
Route::resource('/appointments', AppointmentsController::class);

/********************* Appointments End ***************/

//skills
Route::resource('/staff-skills', StaffSkillsController::class);
Route::get('/staff-skills/editSkill/{id}', [StaffSkillsController::class, 'editSkill']);
Route::post('/staff-skills/updateSkill/{id}', [StaffSkillsController::class, 'updateSkill']);
Route::post('/staff-skills/destroySkill/{id}', [StaffSkillsController::class, 'destroySkill']);

//designation
Route::resource('/staff-designation', StaffDesignationController::class);
Route::get('/staff-designation/editDesignation/{id}', [StaffDesignationController::class, 'editDesignation']);
Route::post('/staff-designation/updateDesignation/{id}', [StaffDesignationController::class, 'updateDesignation']);
Route::post('/staff-designation/destroyDesignation/{id}', [StaffDesignationController::class, 'destroyDesignation']);



/******************Start Offer******************/

Route::resource('/offers', OffersController::class);

/*******************End Offer*******************/



});

});


//Route::get('/','');