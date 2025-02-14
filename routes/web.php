<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function (){
    route::get('/','Home')->name('home');
    route::get('/about','About')->name('about');
    route::get('/menu','Menu')->name('menu');
    route::get('/store','Store')->name('store');
    route::get('/partnership','Partnership')->name('partnership');
    route::get('/activation/big-order','Bigorder')->name('bigorder');
    route::get('/activation/bangor-berbagi','bangorberbagi')->name('bangor-berbagi');
    route::get('/activation/bangor-goestoschool','bangorgoestoschool')->name('bangor-goestoschool');
    route::get('/activation/bangor-goestoevent','bangorgoestoevent')->name('bangor-goestoevent');
    route::get('/activation/bangor-funcookingclass','bangorfuncookingclass')->name('bangor-funcookingclass');
    route::get('/activation/bangor-funstreetactivation','bangorstreetactivation')->name('bangor-streetactivation');
    route::get('/contact','Contact')->name('contact');

    route::get('/blog',action: 'Blog')->name('blog');
    route::get('/post/{slug}', 'Show');

    // route::get('/dongeng','dongeng')->name('public.dongeng');
    // route::post('send/contact','storeMessage')->name('send.contact');
    // route::post('send/form-download','storeForm')->name('send.downloadform');
    // route::get('data','getData')->name('public.data');

    route::get('/career','Career')->name('career');
    route::get('/career/Retail-Store-Careers','Retail')->name('retail');
    route::get('/career/Head-Officer-Careers','Headofficer')->name('headofficer');

});

