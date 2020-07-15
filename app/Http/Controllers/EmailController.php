<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmailValidator;
use App\Mail\ContacConfirmation;
use Session;
use Mail;

class EmailController extends Controller
{
    public function recievedMessage(EmailValidator $request)
    {
      $sendTo = "contacto@innovatium.mx";
      $contact = $request->all();
      Mail::to($sendTo)->send(new ContacConfirmation($contact));
      return redirect()->back();
    }
}
