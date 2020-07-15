<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebinarController extends Controller
{
    public function showwebinarsregister(){

        $webinar = \DB::table('registro_webinar')
        ->select('paises.nombre AS pais', 'webinars.nombre AS webinar', 'registro_webinar.name', 'registro_webinar.email', 'registro_webinar.phone', 'registro_webinar.city', 'registro_webinar.created_at','registro_webinar.estado')
        ->join('paises', 'paises.pais_id', '=', 'registro_webinar.id_country')
        ->join('webinars', 'webinars.webinar_id', '=', 'registro_webinar.id_webinar')

        ->get(); 

        return view('admin.webinars')->with('mails',$webinar);
    }
}
