<?php

Route::get("/","CJunitController@index");
Route::post("/","CJunitController@store")->name("junit.store");

// 测试路由
Route::get('test', 'TestController@index');