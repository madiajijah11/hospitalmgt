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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin login route
Route::match(['get', 'post'],'/admin', 'AdminController@login');
//Admin Routes
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/settings','AdminController@settings');
Route::get('/admin/check-pwd','AdminController@chkPassword');
Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

//Patient's Routes (Admin)
Route::match(['get','post'],'/admin/patient/add_patient','PatientController@addPatient');
Route::match(['get','post'],'/admin/edit_patient/{id}','PatientController@editPatient');
Route::get('/admin/patient/view_patient','PatientController@viewPatient');

//Doctor's routes
//view patient records
Route::get('/admin/patient/view-patients','DoctorController@viewPatient');
Route::match(['get','post'],'/admin/add_lab/{id}','DoctorController@labTests');
Route::match(['get','post'],'/admin/add_prescription/{id}','DoctorController@addPrescription');
Route::get('/admin/doctors/view-labtests','DoctorController@viewLabTests');
Route::get('/admin/doctors/view-labresults','DoctorController@viewLabResults');

//LabTech's Routes
Route::get('/admin/labtechs/view-labtests','LabTechController@viewLabTests');
Route::match(['get','post'],'/admin/add_results/{id}','LabTechController@addLabResults');
Route::get('/admin/labtechs/view-labresults','LabTechController@viewLabResults');

//pharmacists route
Route::get('/admin/pharmacists/view-prescription','PharmacistController@viewPrescription');


Route::get('/logout', 'AdminController@logout');
