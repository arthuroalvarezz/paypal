<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Email;

class WebEmailsController extends Controller
{
    public function showmails(){
        $mails = Email::all();
        return view('admin.emails')->with('mails',$mails);
    }
}
