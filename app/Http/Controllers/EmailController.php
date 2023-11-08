<?php

namespace App\Http\Controllers;

use App\Mail\AlertEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to('watipasochirambo5@gmail.com')->send(new AlertEmail('watipaso.chirambo@nicotechnologies.com'));
        return response()->json(['message' => 'Email sent']);
    }
}
