<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $detail = [
            'title' => 'mail from vanis feutio',
            'body' => 'this is testing mail using gmail'
        ];
        Mail::to('root237dev@gmail.com')->send(new TestMail($detail));
        return 'Email send';
    }
}
