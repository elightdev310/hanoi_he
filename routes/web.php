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

Route::get('submissions',
    ['as' => 'submissions_page', 'uses' => 'EventController@submissions_page' ]);
Route::get('submissions/export',
    ['as' => 'submissions_export', 'uses' => 'EventController@submissions_export' ]);

Route::get('hcm-eblast',
    ['as' => 'hcm_eblast_page', 'uses' => 'EventController@hcm_eblast_page' ]);
Route::get('hanoi-eblast',
    ['as' => 'hanoi_eblast_page', 'uses' => 'EventController@hanoi_eblast_page' ]);


Route::get('register/{type}',
    ['as' => 'register_form_page', 'uses' => 'EventController@register_form_page' ]);
Route::post('register/{type}',
    ['as' => 'register_action', 'uses' => 'EventController@register_action' ]);


/** Webinar Pages */
Route::get('semi',
    ['as' => 'semi_page', 'uses' => 'EventController@semi_page' ]);
Route::post('semi_page',
    ['as' => 'webinar_register_action', 'uses' => 'EventController@webinar_register_action' ]);
Route::get('submissions/webinar',
    ['as' => 'submissions_webinar_page', 'uses' => 'EventController@submissions_webinar_page' ]);
Route::get('submissions/webinar/export',
    ['as' => 'submissions_webinar_export', 'uses' => 'EventController@submissions_webinar_export' ]);