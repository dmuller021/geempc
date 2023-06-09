<?php
use App\Models\Presets;
use App\Models\order;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\BuildsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\componentController;
use App\Http\Controllers\orderhistory;
use App\Http\Controllers\discountController;
//use App\Http\Controllers\PresetController;


use App\Http\Controllers\PDFController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/builder', function () {
    return view('pc-builder.builder');
});

Route::get('/builder-select/{type_id}',
    'BuildsController@view')
->name('builder.select');

//Route::get('/preset', [PresetController::class, 'preset_lol']);

//Route::get('/presets', function () {
//    return view('presets.presets');
//});

Route::resource('presets', PresetController::class);


Route::get('/cart', function () {
    return view('cart');
});

Route::post('/discount', [discountController::class, 'builder_submit'])->name('discount');

Route::post('/builder-cart',
    'CartController@submitBuild')
    ->name('cart.build');

Route::post('generate-pdf', [PDFController::class, 'index'])->name('generate.invoice');

Route::middleware(['admin'])->group(function () {
    Route::get('/user', function () {
        return view('user.profile');
    });

    /* part index page */

    Route::get('/components',
        'ComponentsController@index')
        ->name('comp.index');

    /* parts route starts here */

    Route::get('/part',
        'ComponentsController@part_index')
        ->name('comp.part');

    Route::get('/part-destroy/{id}',
        'ComponentsController@destroy')
        ->name('comp.destroy');

    Route::get('/part-create/{id}',
        'ComponentsController@create')
        ->name('comp.create');

    Route::get('/part-store',
        'ComponentsController@store')
        ->name('comp.store');

    Route::get('/part-edit/{id}',
        'ComponentsController@edit')
        ->name('comp.edit');

    Route::get('/part-update/{id}',
        'ComponentsController@update')
        ->name('comp.update');

    /* parts route ends here */

    Route::get('/builds',
        'BuildsController@index')
        ->name('builds.index');

    Route::get('/build-create',
        'BuildsController@create')
        ->name('builds.create');

    Route::get('/build-store',
        'BuildsController@store')
        ->name('builds.store');

    Route::get('/build-destroy/{id}',
        'BuildsController@destroy')
        ->name('builds.destroy');
});



Route::get('/viewpdf', function () {
    return view('myPDF');
});

Route::get('/orders',  [orderhistory::class, 'index']);

Route::get('/afrekenen',
    [\App\Http\Controllers\afrekenen::class, 'index']);

Route::post('/repair' , [\App\Models\repair::class, 'repair'])->name('repair');
Route::get('/repair', [\App\Http\Controllers\repair::class,'repair']);
Route::post('/afrekenen2',
    [\App\Http\Controllers\afrekenen::class, 'afrekenen'])
->name('cart.pay');



Route::post('kortinginvoeren',[\App\Http\Controllers\korting::class,'korting'])->name('kortingcode');
Route::post('checkout',[\App\Http\Controllers\afrekenen::class,'afrekenen'])->name('afrekenen');
Route::get('/korting',[\App\Http\Controllers\korting::class,'form'])->name('Korting');

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        $user = User::all();
        return view('admin.users', [
            "users" => $user,
        ]);
    });


//Route::prefix('admin')->group(function () {
//    Route::get('/orders', function () {
//        $order = order::all();
//        return view('admin.orders', [
//            "orders" => $order,
//        ]);
//    });
    //});
    Route::get('/builds', function () {
        return view('admin.builds');
    });

});

//fetches the component
Route::get('/getComponent', [componentController::class, 'showComponents']);

//supposed to add component to localstorage
Route::get('/addComponent', [componentController::class, 'addComponent']);

//deleting all sessions
Route::get('/deleteSession', [componentController::class, 'deleteSession']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/logout', [UserController::class, 'logout']);

require __DIR__.'/auth.php';
