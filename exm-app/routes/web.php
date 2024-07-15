<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Order;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/co/{id?}', function ($id=null) {

    $defaultId = 1; // Set your default ID here
    $id = $id ?? $defaultId; 


    $customer = Customer::find($id);
    $orders = $customer->orders;

    return view('customer', compact('customer'));
});
