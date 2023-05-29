<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContractController;
use App\Http\Controllers\Api\FileDownloadController as ApiFileDownloadController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\QuotationController;
use App\Http\Controllers\Api\ReceiptController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/signup', [AuthController::class, 'signup']);
Route::post('/auth/signin', [AuthController::class, 'signin']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('permissions', PermissionController::class);

    Route::apiResource('users',UserController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::get('prj-chart',[ProjectController::class,'PrjChart'])->name('projects.PrjChart');
    Route::apiResource('quotations', QuotationController::class);
    Route::apiResource('contracts',ContractController::class);
    Route::apiResource('invoices',InvoiceController::class);
    Route::apiResource('receipts',ReceiptController::class);
    Route::get('/customers' , [UserController::class, 'customers']);
    Route::get('customer-chart',[UserController::class,'customersByMonth'])->name('customers.CustomerChart');
});
