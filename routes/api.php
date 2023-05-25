<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContractController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\QuotationController;
use App\Http\Controllers\Api\ReceiptController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\UserProjectController;
use App\Models\Quotation;
use App\Models\UserProject;
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
Route::post('/auth/userUpdate/{id}',[AuthController::class,'userUpdate']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('roles', RoleController::class)->middleware('auth:sanctum');
Route::apiResource('permissions', PermissionController::class)->middleware('auth:sanctum');

Route::apiResource('users',UserController::class)->middleware('auth:sanctum');
Route::apiResource('categories', CategoryController::class)->middleware('auth:sanctum');
Route::apiResource('projects', ProjectController::class)->middleware('auth:sanctum');
Route::apiResource('quotations', QuotationController::class)->middleware('auth:sanctum');
Route::apiResource('contracts',ContractController::class)->middleware('auth:sanctum');
Route::apiResource('invoices',InvoiceController::class)->middleware('auth:sanctum');
Route::apiResource('receipts',ReceiptController::class)->middleware('auth:sanctum');
//Route::apiResource('userproject',UserProjectController::class)->middleware('auth:sanctum');

Route::get('/userproject/{id}', [ProjectController::class, 'user_project'])->middleware('auth:sanctum');
Route::get('/customers' , [UserController::class, 'customers'])->middleware('auth:sanctum');

Route::get('/customersWithName',[UserController::class, 'customersWithName'])->middleware('auth:sanctum');
Route::get('/userAdminWithName',[UserController::class,'userAdminWithName'])->middleware('auth:sanctum');
Route::get('/projectsActive',[ProjectController::class, 'projectsActive'])->middleware('auth:sanctum');

Route::get('/developers' , [UserController::class, 'developers'])->middleware('auth:sanctum');

