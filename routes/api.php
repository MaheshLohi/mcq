<?php
/**
 * File name: api.php
 * Last modified: 19/01/21, 5:57 PM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

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
Route::post('user/add', 'App\Http\Controllers\Admin\UserApiController@addUser');

// Department
Route::post('department/add', 'App\Http\Controllers\Admin\UserApiController@storeCategory');

// Semesters
Route::post('semester/add', 'App\Http\Controllers\Admin\UserApiController@storeSubCat');

// Subjects
Route::post('subject/add', 'App\Http\Controllers\Admin\UserApiController@storeSections');

// Chapters
Route::post('chapter/add', 'App\Http\Controllers\Admin\UserApiController@storeSkills');
