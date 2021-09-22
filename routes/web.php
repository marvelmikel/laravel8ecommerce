<?php
use App\Http\livewire\CartComponent;
use App\Http\livewire\CheckoutComponent;
use App\Http\livewire\HomeComponent;
use App\Http\livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\livewire\User\UserDashboardComponent;
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

//Route::get('/', function () {
    //return view('welcome');
//});

 Route::get('/',HomeComponent::class);
 Route::get('/shop',ShopComponent::class);
 Route::get('/cart',CartComponent::class);
 Route::get('/checkout',CheckoutComponent::class);
 Route::get('/product/{slug}',DetailsComponent::class)->name('product.detials');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  // return view('dashboard');
//})->name('dashboard');


//For  User or Customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
  Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');

});


 //For Admin
 Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
  Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

});

