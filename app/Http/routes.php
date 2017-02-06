<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('student.pages.home');
});

Route::get('faq', function () {
    return view('student.pages.faq');
});

Route::get('policy', function () {
    return view('student.pages.policy');
});

Route::get('term', function () {
    return view('student.pages.terms');
});

Route::get('invitation', function () {
    return view('student.pages.invite_form');
});

Route::get('invite-success', function () {
    return view('student.pages.invite_success');
});

Route::get('join', function () {
    return view('student.pages.join_form');
});

Route::get('join-success', function () {
    return view('student.pages.join_success');
});

Route::get('sponsor', function () {
    return view('sponsor.pages.homesponsor');
});

Route::get('enquiry', function () {
    return view('sponsor.pages.sponsor_enquiry');
});

Route::get('enquiry-success', function () {
    return view('sponsor.pages.enquiry_successful');
});

Route::get('under-construction', function () {
    return view('sponsor.pages.under_construction');
});

Route::get('under_construction', function () {
    return view('student.pages.under_construction_student');
});

Route::get('about', function () {
    return view('sponsor.pages.about');
});

Route::get('About', function () {
    return view('student.pages.about_student');
});
