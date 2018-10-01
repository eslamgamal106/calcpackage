<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'MyVendor\Calc\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'MyVendor\Calc\CalculatorController@subtract');