<?php

use App\Solid\PdfExport;
use App\Solid\SaleReports;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    $saleReport = new SaleReports();
    $pdfExport = new PdfExport();

    return $pdfExport->export($saleReport->between('1 jan 2024', '20 oct 2024'));



    return view('welcome');
});

use App\Http\Controllers\SalesController;

Route::get('/sale-price/{productId}', [SalesController::class, 'calculateSalePrice']);
