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
Route::get('/viewpdffile', function () {
    return view('pdfviews.testpdf');
});
Route::get('/viewpdfwithdatafile', function () {
    $data =[
        ['name' => 'Audi',
        'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
        ],
        ['name'=>'Ford',
        'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
        ]
    ];
    return view('pdfviews.pdfwithdata',compact('data'));
});
Route::get('/viewpdf', function(){
$pdf = PDF::loadView('pdfviews.testpdf');
return $pdf->stream('test.pdf');
});

Route::get('/pdfwithdata', function(){
    $data =[
        ['name' => 'Audi',
        'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
        ],
        ['name'=>'Ford',
        'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
        ]
    ];
    $pdf = PDF::loadView('pdfviews.pdfwithdata',compact('data'));
   // $pdf->setOrientation('landscape');
   // $pdf->setOption('header-right','Page [page]');
 //  $pdf->setOption('header-right','[date]');
 //$pdf->setOptions([
    // 'header-left'=>'Page [page]',
    // 'header-right'=>'[date]',
    // 'footer-right'=>'Chathura Dissanayaka - BIT Project Class'

//  ]);

    return $pdf->stream('test.pdf');
});




Route::get('/pdf', function(){
    $html ='<h1>Hello PDF</h1>';
    $pdf = PDF:: loadHtml($html); 
    $date ="2021/01/20";
    return $pdf->stream('test-'.$date.'');
    });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2', function () {
    return view('welcome2');
});

Route::resource('blogs','BlogController');

Route::resource('jeny','jenyController');
Route::resource('report','ReportController');
Route::resource('theme','themeController');
Route::resource('test','TestModelController');
Route::resource('picturestore','PictureStoreController');
Route::resource('notify','NotifyController');
Route::resource('ajax','AjaxController');
Route::resource('chart','ChartController');
Route::resource('supplier','SupplierController');
Route::resource('customer','CustomerController');

Route::get('report1', 'ReportController@report1')->name('report.report1');
Route::get('report2', 'ReportController@report2')->name('report.report2');
Route::get('report3', 'ReportController@report3')->name('report.report3');

Route::get('blog/export/','BlogController@export')->name('blog.export');
Route::get('export/income/','ExportController@exportIncome')->name('export.income');