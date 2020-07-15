<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events_Workshops;
use App\Http\Controllers\DB;
use App;
use App\Event;
use App\Workshop;
use App\Instructor;
use App\EventsPrivate;
use App\Webinar;
use App\Precio;


class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()  
  {
  
    $date_now = date('Y-m-d');
    $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
     $fechaend = \DB::table('events_privates')
      ->join('instructors', 'events_privates.instructor_id', '=', 'instructors.instructor_id')
         
      ->select('events_privates.name','events_privates.start_date','events_privates.end_date','events_privates.duration','events_privates.client','events_privates.city','events_privates.state','events_privates.country','instructors.name AS nombre_instructor','instructors.last_name','events_privates.eventsprivate_id')
     
      ->whereBetween('end_date', [$date_now, $to])->orderBy('start_date','ASC')->get();


      $to2 = date("1959-10-24",strtotime(date('%d %b %Y')."- 1 day"));//segunda consulta para eventos realizados por fecha

    $instructors = App\Instructor::where('estatus','Activo')
    ->orderBy('name')
    ->get(); //ordenamiento de los instructores por nombre

      $abouts = App\About::orderBy('ordenamiento', 'ASC')->get();
    $evcerrado = EventsPrivate:://consulta de eventos realizados
    where('status','Realizado')
    ->whereBetween('end_date', [$to2, $date_now])
    ->orderBy('end_date','DESC')
    ->paginate(5);


           $now = new \DateTime();
 $now->format('d-m-Y H:i:s');

      //     $date_now = date('Y-m-d');
         $webinarinfo = Webinar:://consulta de eventos realizados
         
         //where('slug', $slug)
         whereBetween('time', [$now, $to])
         ->orderBy('time','ASC')

    ->get();


     $paises = \DB::table('paises')
        ->select('pais_id','nombre')

        ->get();

$evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')

           ->select('events_workshops.start_date','events_workshops.end_date','workshops.name','events_workshops.modalidad','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.id_evt_wrk','addresses.maps')


           ->where('tipo', 'abierto')
            ->where('status', 'Realizado')
            ->whereBetween('end_date', [$to2, $date_now])
            ->orderBy('end_date','DESC')
           ->paginate(5);

      return view('index',compact('abouts','instructors','fechaend','evcerrado','evabierto','now','to','webinarinfo','paises'));
  }


  public function imprimirficha(){   
     $pdf = \PDF::loadView('tech_sheet.descargarficha');
     return $pdf->download('ficha.pdf');


}



  public function imprimirevento($id_evt_wrk){

            $content = \DB::table('events_workshops') 
->select('workshops.name','events_workshops.id_evt_wrk','precios.*','events_workshops.start_date','events_workshops.end_date','events_workshops.id_precios','precios.fk_id_precios')  
->join('precios', 'precios.fk_id_precios', '=', 'events_workshops.id_evt_wrk')
->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
//->groupBy('precios.fk_id_precios')
->orderBy('start_date','ASC')
->where('events_workshops.id_evt_wrk', $id_evt_wrk)
 ->get();

  $events_Workshops = App\Events_Workshops::find($id_evt_wrk);
  $eventoName = $events_Workshops->workshops->name;
  $addressForNamePdf =$events_Workshops->address->city;
  $eventopdf = $events_Workshops->events;
  $workshoppdf =$events_Workshops->workshops;
  $addresspdf =$events_Workshops->address;
  $instructorpdf =$events_Workshops->instructor;


  
  setlocale(LC_TIME, 'es_MX.UTF-8');
        $start_date = strftime("%d %b %Y", strtotime($events_Workshops->start_date));
                  $events_Workshops->start_date = $start_date; 
                  $end_date = strftime("%d %b %Y", strtotime($events_Workshops->end_date));
                  $events_Workshops->end_date = $end_date;  

    $pdf = \PDF::loadView('events.descargarevento', compact('workshoppdf','eventopdf','events_Workshops','addresspdf','instructorpdf','content'));  
     return $pdf->download($eventoName.' '.$addressForNamePdf.'.pdf');


}

 public function ver($id_evt_wrk){

  $events_Workshops = App\Events_Workshops::find($id_evt_wrk);
  $eventoName = $events_Workshops->workshops->name;
  $addressForNamePdf =$events_Workshops->address->city;
  $eventopdf = $events_Workshops->events;
  $workshoppdf =$events_Workshops->workshops;
  $addresspdf =$events_Workshops->address;
  $instructorpdf =$events_Workshops->instructor;


  
  setlocale(LC_TIME, 'es_MX.UTF-8');
        $start_date = strftime("%d %b %Y", strtotime($events_Workshops->start_date));
                  $events_Workshops->start_date = $start_date;  
         $end_date = strftime("%d %b %Y", strtotime($events_Workshops->end_date));
                  $events_Workshops->end_date = $end_date; 
        return view('events.descargarevento',compact('workshoppdf','eventopdf','events_Workshops','addresspdf','instructorpdf'));

}

public function eventsprivates($eventsprivate_id)  
  {
    {
   $eventoprivado =App\EventsPrivate::find($eventsprivate_id);
   $eventoconten = $eventoprivado->events;
   
   $eventoinstructor = $eventoprivado->instructor;
      return view('index',compact('eventoprivado','eventoconten'));
  
  }
}

public function listaabierto()  
  {
     
    
    $date_now = date('Y-m-d');
    $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
     $fechaend = App\EventsPrivate::whereBetween('end_date', [$date_now, $to])->get();

      $to2 = date("1959-10-24",strtotime(date('%d %b %Y')."- 1 day"));//segunda consulta para

    $instructors = App\Instructor::orderBy('name')->get(); //ordenamiento de los instructores por nombre
        $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
 ->join('events_images', 'events_images.fk_id_events_workshops', '=', 'events_workshops.id_evt_wrk')

           ->select('events_images.path','events_workshops.start_date','events_workshops.end_date','workshops.name','events_workshops.modalidad','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.resena','events_workshops.id_evt_wrk','addresses.maps')  
           ->where('status', 'Realizado')
           ->whereBetween('end_date', [$to2, $date_now])
            ->orderBy('end_date','DESC')
           
         ->get();//para que agarre la letra ��� de rese���a ñ

    //     $imagenes= \DB::table('events_images')
 //   ->join('events_workshops', 'events_workshops.id_evt_wrk', '=', 'events_images.fk_id_events_workshops')
 //   ->select('events_images.path')
 //  ->where('events_images.fk_id_events_workshops', '=', 'events_workshops.id_evt_wrk')
  
//  ->get();
        
       return view('event_review.lista_abiertos',compact('evabierto','to2','date_now','fechaend','instructors','to'));
  }


public function abierto($id_evt_wrk)  
  {

    $imagenes= \DB::table('events_images')
    ->join('events_workshops', 'events_workshops.id_evt_wrk', '=', 'events_images.fk_id_events_workshops')
    ->select('events_images.path')


  
   ->where('events_workshops.id_evt_wrk', $id_evt_wrk)
  
  ->get();



    $instructors = App\Instructor::orderBy('name')->get(); //ordenamiento de los instructores por nombre
    $abouts = App\About::orderBy('ordenamiento', 'ASC')->get();


     $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->select('events_workshops.start_date','events_workshops.end_date','workshops.name','events_workshops.modalidad','addresses.street','addresses.maps','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.resena','events_workshops.id_evt_wrk')


         
          ->where('id_evt_wrk', $id_evt_wrk)
         
         ->get();
       return view('event_review.abiertos',compact('evabierto','instructors','abouts','imagenes'));

}

public function cerrado($eventsprivate_id)  
  {

    $imagenes= \DB::table('events_images')
    ->join('events_privates', 'events_privates.eventsprivate_id', '=', 'events_images.fk_id_events_privates')
    ->select('events_images.path')


  
   ->where('events_privates.eventsprivate_id', $eventsprivate_id)
  
  ->get();
    
    $date_now = date('Y-m-d');
    $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
     $fechaend = App\EventsPrivate::whereBetween('end_date', [$date_now, $to])->get();


      $to2 = date("1959-10-24",strtotime(date('%d %b %Y')."- 1 day"));//segunda consulta para


    $instructors = App\Instructor::orderBy('name')->get(); //ordenamiento de los instructores por nombre
    $abouts = App\About::orderBy('ordenamiento', 'ASC')->get();
    $evcerrado = EventsPrivate:://where('tipo','cerrado')//consulta de eventos realizados
    where('eventsprivate_id', $eventsprivate_id)

    ->get();
    $hola = ['Ignacio', 'Juanito', 'Pedrito' ];
       return view('event_review.privados',compact('hola','to2','date_now','fechaend','instructors','abouts','evcerrado','to','imagenes'));
  }

  public function listaprivado()  
  {

    $date_now = date('Y-m-d');
    $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
     $fechaend = App\EventsPrivate::whereBetween('end_date', [$date_now, $to])->get();


      $to2 = date("1959-10-24",strtotime(date('%d %b %Y')."- 1 day"));//segunda consulta para


    $instructors = App\Instructor::orderBy('name')->get(); //ordenamiento de los instructores por nombre
    $evcerrado = $evcerrado = \DB::table('events_privates')
    ->join('events_images', 'events_privates.eventsprivate_id', '=', 'events_images.fk_id_events_privates')
    
    ->select('events_privates.eventsprivate_id', 'events_privates.name','events_privates.modalidad', 'events_privates.tipo', 'events_privates.client', 'events_privates.start_date', 'events_privates.end_date', 'events_privates.city', 'events_privates.state', 'events_privates.country', 'events_privates.resena','events_images.fk_id_events_privates', 'events_images.path')
   
  ->where('status','Realizado')
   ->whereBetween('end_date', [$to2, $date_now])
    ->orderBy('end_date','DESC')
    ->get();
       return view('event_review.lista_privados',compact('to2','date_now','fechaend','instructors','evcerrado','to'));
  }
}
