<?php

use Illuminate\Support\Facades\Route;

Route::get('getArc', 'ArcController@getArc');

Route::apiResource('thing', 'ThingController');
Route::get('getThing', 'ThingController@getThing');

Route::apiResource('terrain', 'TerrainController');
Route::get('getTerrain', 'TerrainController@getTerrain');

Route::apiResource('mood', 'MoodController');
Route::get('getMood', 'MoodController@getMood');
