<?php

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
    return redirect()->route('home');
});

 
Route::get('/admin-index', function () {
    return view('admin-index');
});

Route::post('/admin-login','Adminlogin@login');


Route::get('/admin-account', function () {
    return view('admin-account');
});



Route::get('/admin-add-a-notice', function () {
    return view('admin-add-a-notice');
});



/* add result started*/
Route::get('/admin-add-result', function () {
    return view('admin-add-result');
});

Route::post('/admin-add-result-information','AdminAddResult@info');

Route::post('/admin-add-result-six-eight','AdminAddResult@update');

Route::post('/admin-add-result-nine-ten-science','AdminAddResult@updateScience');

Route::post('/admin-add-result-nine-ten-business','AdminAddResult@updateBusiness');

Route::post('/admin-add-result-nine-ten-arts','AdminAddResult@updateArts');

Route::post('/admin-add-result-registration-check','AdminAddResult@registrationCheck');

Route::post('/admin-add-result-registration-six-eight','AdminAddResult@registrationSixToEight');

Route::post('/admin-add-result-registration-nine-ten-science','AdminAddResult@registrationNineTenScience');

Route::post('/admin-add-result-registration-nine-ten-business','AdminAddResult@registrationNineTenBusiness');


Route::post('/admin-add-result-registration-nine-ten-arts','AdminAddResult@registrationNineTenArts');


/* add result ended*/
/*view result started*/
Route::post('/admin-view-result-information','AdminViewResult@info');


/*view result ended*/

Route::get('/admin-change-password', function () {
    return view('admin-change-password');
});




Route::get('/admin-create-account', function () {
    return view('admin-create-account');
});

Route::post('/admin-create-account-save','Adminaccount@save');


Route::get('/admin-forgot-password', function () {
    return view('admin-forgot-password');
});



Route::get('/admin-home', function () {
    return view('admin-home');
});



Route::get('/admin-information-collection', function () {
    return view('admin-information-collection');
});

Route::post('/admin-information-collection-save','AdminInformationCollection@save');



Route::get('/admin-notice', function () {
    return view('admin-notice');
});



Route::get('/admin-update-information-select-registration', function () {
    return view('admin-update-information-select-registration');
});


Route::get('/admin-update-information', function () {
    return view('admin-update-information');
});



Route::get('/admin-view-result', function () {
    return view('admin-view-result');
});



/*test*/
/*Route::get('/test-table', function () {       // for print the table data
    return view('test-table');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');