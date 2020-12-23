<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  //Se agreha para enviar email

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Correo de Surfside Media',
            'body'  => 'Esto es para probar el correo usando gmail.'
        ];

        Mail::to("chamocelldeveloper@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
