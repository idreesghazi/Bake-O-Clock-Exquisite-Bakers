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

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/signup', function () {
    return view('pages.signupScreen');
});

Route::get('/login', function () {
    return view('pages.loginScreen');
});



Route::get('/admin', function () {
    return view('pages.adminScreen');
});

Route::get('/forgotpassword', function () {
    return view('pages.ForgotPasswordScreen');
});

Route::get('/addtocart/{name}', function ($name) {
    $db = mysqli_connect('localhost', 'root', '', 'mybakery');
    $result_product = mysqli_query($db,"SELECT * FROM products");
    $result_customer = mysqli_query($db,"SELECT * FROM customers");
    $new_result = mysqli_query($db, "SELECT * FROM products where name = '$name'");
    while ($row = mysqli_fetch_array($new_result)) {
        $newname = $row['name'];
        $newprice = $row['price'];
    }
    return view('includes.navbar',compact('newname'));
});





