<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {

        Mail::to('richardjonhshm@gmail.com','Richard Lopes')->send(new Contact([
            'fromEmail' => request()->input('email'),
            'formMessage' => request()->input('message')
        ]));

    }
}
