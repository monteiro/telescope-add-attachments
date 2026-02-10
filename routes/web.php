<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-test-mail', function () {
    Mail::raw('Testing attachments in Telescope', function ($m) {
        $m->to('recipient@example.com')
            ->subject('Test Mail with Attachments')
            ->attachData('%PDF-1.4 sample pdf content', 'invoice.pdf', ['mime' => 'application/pdf'])
            ->attachData('Hello World!', 'readme.txt', ['mime' => 'text/plain']);
    });

    return 'Mail sent! <a href="/telescope/mail">View in Telescope</a>';
});
