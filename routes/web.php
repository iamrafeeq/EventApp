

<?php
use Illuminate\Support\Facades\Route;
 // <-- semicolon added here

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});


Route::get('/ticket', function () {
    return view('Buyticket');
});


Route::get('/eventlist', function () {
    return view('eventlist');
});


Route::get('/singleevent', function () {
    return view('singleevent');
});



Route::get('/lonig', function () {
    return view('login');
});



Route::get('/register', function () {
    return view('Register');
});




Route::get('/forgetpssword', function () {
    return view('ForgotPassword');
});




Route::get('/FAQS', function () {
    return view('FAQS');
});


Route::get('/memories', function () {
    return view('ourmemories');
});



Route::get('/ourteam', function () {
    return view('ourteam');
});


Route::get('/singleteam', function () {
    return view('singleteam');
});


Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/pricing', function () {
    return view('pricing');
});


route::get('/allevent',function(){
return view('new_event');


});




route::get('/sitemap',function(){
return view('sitemap');


});