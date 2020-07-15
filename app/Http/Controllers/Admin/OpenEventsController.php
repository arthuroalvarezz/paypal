<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Events_Workshops;
use App\Address;
use App\Event;
use App\EventsImages;
use App\Http\Controllers\Controller;
use App\Instructor;
use App\precio;
use App\Currency;
use App\PaymentPlatform;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;



class OpenEventsController extends Controller
{
     public function showevents(){

     $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
          // ->join('users', 'events_workshops.fk_user_id', '=', 'users.id')
           ->join('users AS modify', 'events_workshops.fk_user_id', '=', 'modify.id')
        ->join('users AS creation', 'events_workshops.fk_id_user_creation', '=', 'creation.id')
         
           ->select('events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.name AS nombre_instructor','instructors.last_name','events_workshops.fk_user_id','modify.name AS nameModification', 'modify.email AS emailModification','events_workshops.updated_at', 'creation.name AS nameCreation', 'creation.email AS emailCreation','events_workshops.created_at')
           ->get();  
          ///para jalas los variables para el agregar 



       $todosTalleres = \DB::table('workshops')
       ->select('name AS nombreTodosCurso','workshop_id')
       ->get();

       $todasDirecciones = \DB::table('addresses')
       ->select('address_id','street')
       ->get();

      //   $instructors = \DB::table('instructors')
       // ->select('instructor_id','name AS nombre_instructor','last_name AS lastName_instructor')
      //  ->where('instructor_id' '=' 'instructors_id')

     //   ->get();
           $instructors = \DB::table('instructors')
        ->select('instructor_id','name AS insName','last_name AS insApellido')

        ->get();

       return view('admin.eventosabiertos',compact('evabierto','todosTalleres','instructors','todasDirecciones'));
    }
  
      public function addevents(Request $request){

        $addOpenEvent = new Events_Workshops;
        $addOpenEventAddress = new Address;
        $addOpenEventEvent = new Event;



        if($request->input('inlineRadioOptions') == "No"){ 

          
          $addOpenEventAddress->street = $request->input('calle');
          $addOpenEventAddress->city = $request->input('ciudad');
          $addOpenEventAddress->state = $request->input('estado');
          $addOpenEventAddress->country = $request->input('pais');
          $addOpenEventAddress->maps = $request->input('url'); 

          $addOpenEventAddress->save();

          $consulta = \DB::table('addresses')
             ->select('address_id')
             ->where('street',$request->input('calle'))
             ->get();
          $addOpenEvent->id_address = $consulta[0]->address_id;

          $addOpenEvent->id_workshop = $request->input('nombre');
          $addOpenEvent->Modalidad = $request->input('modo');
          $addOpenEvent->status = $request->input('estatus');
          $addOpenEvent->start_date = $request->input('fechainicial');
          $addOpenEvent->end_date = $request->input('fechafinal');
          $addOpenEvent->tipo = "Abierto";
          $addOpenEvent->resena = NULL;
          $addOpenEvent->id_instructor = $request->input('instructor');
          $addOpenEvent->fk_id_user_creation = $request->input('createdBy');
          $addOpenEvent->fk_user_id = 3;
          $addOpenEvent->updated_at = NULL;

          $addOpenEventEvent->time= $request->input('horario');
          $addOpenEventEvent->price= $request->input('precio');
          $addOpenEventEvent->discount= $request->input('descuento');

          $addOpenEventEvent->save();


          $consultaEvent = \DB::table('events')
             ->select('event_id')
             ->where('time',$request->input('horario'))
             ->where('price',$request->input('precio'))
             ->where('discount',$request->input('descuento'))
             ->get();
          $addOpenEvent->id_event = $consultaEvent[0]->event_id;


          $addOpenEvent->save();
        
        }
        else{
          $addOpenEvent->id_address = $request->input('previewStreet');

          $addOpenEvent->id_workshop = $request->input('nombre');
          $addOpenEvent->Modalidad = $request->input('modo');
          $addOpenEvent->status = $request->input('estatus');
          $addOpenEvent->start_date = $request->input('fechainicial');
          $addOpenEvent->end_date = $request->input('fechafinal');
          $addOpenEvent->tipo = "Abierto";
          $addOpenEvent->resena = NULL;
          $addOpenEvent->id_instructor = $request->input('instructor');
          $addOpenEvent->fk_id_user_creation = $request->input('createdBy');
          $addOpenEvent->fk_user_id = 3;
          $addOpenEvent->updated_at = NULL;


          $addOpenEventEvent->time= $request->input('horario');
          $addOpenEventEvent->price= $request->input('precio');
          $addOpenEventEvent->discount= $request->input('descuento');

          $addOpenEventEvent->save();


          $consultaEvent = \DB::table('events')
             ->select('event_id')
             ->where('time',$request->input('horario'))
             ->where('price',$request->input('precio'))
             ->where('discount',$request->input('descuento'))
             ->get();
          $addOpenEvent->id_event = $consultaEvent[0]->event_id;


          $addOpenEvent->save();
        }
        
        
        return Redirect('/eventos_abiertos')->with('toast_success', 'Evento agregado correctamente');

    }

    public function editevents(Request $request, $id_evt_wrk)  
  {
     //ordenamiento de los instructores por nombre
//dd($evabiertos);

     $public_event_edit = Events_Workshops::findOrFail($id_evt_wrk);

     $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
           ->join('events', 'events.event_id', '=', 'events_workshops.id_event')
           ->select('events_workshops.id_address','events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','addresses.maps','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.instructor_id as miid','instructors.instructor_id','instructors.name AS nombre_instructor','instructors.last_name','events.time','events.price','events.discount','events.inscriptions')
          ->where('id_evt_wrk', $id_evt_wrk)
         
         ->get();

         $instructors = \DB::table('instructors')
        ->select('instructor_id','name AS nombre_instructor','last_name AS lastName_instructor')
        ->where('instructor_id','<>',$evabierto[0]->miid)

        ->get();

        $miTaller = \DB::table('workshops')
       ->select('workshops.name AS nombreCurso','events_workshops.id_workshop')
       ->join('events_workshops', 'events_workshops.id_workshop', '=', 'workshops.workshop_id')
       ->where('events_workshops.id_workshop', $evabierto[0]->id_workshop)
       ->get();


$Modo = \DB::table('events_workshops')
        ->select('modalidad')
        ->where('id_evt_wrk', $id_evt_wrk)

        ->get();


       $todosTalleres = \DB::table('workshops')
       ->select('name AS nombreTodosCurso','workshop_id')
       ->where('workshop_id', '<>' ,$evabierto[0]->id_workshop)
       ->get();

       $modifico = \DB::table('users')
        ->join('events_workshops', 'users.id', '=', 'events_workshops.fk_user_id')
        ->select('users.name AS persona','users.email')
        ->where('id_evt_wrk', $id_evt_wrk)

        ->get();
          $creo = \DB::table('users')
        ->join('events_workshops', 'users.id', '=', 'events_workshops.fk_id_user_creation')
        ->select('users.name AS persona','users.email')
        ->where('id_evt_wrk', $id_evt_wrk)

        ->get();

        $content = \DB::table('events_workshops') 
->select('workshops.name','events_workshops.id_evt_wrk','precios.*','events_workshops.start_date','events_workshops.end_date','precios.fk_id_precios')  
->join('precios', 'precios.fk_id_precios', '=', 'events_workshops.id_evt_wrk')
->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
//->groupBy('precios.fk_id_precios')
->orderBy('start_date','ASC')
->where('events_workshops.id_evt_wrk', $id_evt_wrk)
 ->get();


       return view('admin.editar-eventos-abiertos',compact('evabierto','modifico','instructors','miTaller','todosTalleres','public_event_edit','creo','Modo','content'));

}
    public function update(Request $request, $id_evt_wrk){
      $evabierto = Events_Workshops::find($id_evt_wrk);
      $evabierto->status = $request->input('inputStatus');
      $evabierto->modalidad = $request->input('inputAddModalidad');
      $evabierto->start_date = $request->input('init-date-input');
      $evabierto->end_date = $request->input('fin-date-input');
      $evabierto->id_instructor = $request->input('inputInstructor');
      $evabierto->id_workshop = $request->input('inputEvento');
      $evabierto->fk_user_id = $request->input('modificationBy');
      
        $evabierto->update();
        //$private_event_edit->name = $request->input('inputEvento');
            
         // $evabierto = \DB::table('events_workshops')


        $prueba = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
           ->join('events', 'events.event_id', '=', 'events_workshops.id_event')
           ->select('events_workshops.id_address','events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','addresses.maps','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.instructor_id as miid','instructors.instructor_id','instructors.name AS nombre_instructor','instructors.last_name','events.time','events.price','events.discount','events.inscriptions')
          ->where('id_evt_wrk', $id_evt_wrk)
         
         ->get();

        $evabiertoadress = Address::findOrFail($prueba[0]->id_address);
        $evabiertoadress->street = $request->input('inputCalle');
        $evabiertoadress->city = $request->input('inputCiudad');
        $evabiertoadress->state = $request->input('inputEstado');
        $evabiertoadress->country = $request->input('inputPais');
        $evabiertoadress->maps = $request->input('inputUrl');
        $evabiertoadress->update();
        //dd($prueba[0]->id_address);
 
        $prueba2 = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
           ->join('events', 'events.event_id', '=', 'events_workshops.id_event')
           ->select('events_workshops.id_event','events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','addresses.maps','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.instructor_id as miid','instructors.instructor_id','instructors.name AS nombre_instructor','instructors.last_name','events.time','events.price','events.discount','events.inscriptions')
          ->where('id_evt_wrk', $id_evt_wrk)
         
         ->get();

        $evabiertoss = Event::find($prueba2[0]->id_event);
        $evabiertoss->time = $request->input('inputHorario');
        $evabiertoss->price = $request->input('inputPrecio');
        $evabiertoss->discount = $request->input('inputDescuento');
     //   $evabiertoss->inscriptions = $request->input('inputInscripcion');

        $evabiertoss->update();
        //dd($prueba2[0]->id_event);




        return redirect('/eventos_abiertos')->with('toast_success', 'Evento editado correctamente');
    }

public function showpago(Request $request, $precios_id)  
  {

 $content = precio::findOrFail($precios_id);

  $currencies = Currency::all();
        $paymentPlatforms = PaymentPlatform::all();

     
       return view('pago.index',compact('content','currencies','paymentPlatforms'));

}


       public function editprecios(Request $request, $precios_id)  
  {

  /////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////



 $content = precio::findOrFail($precios_id);


       return view('admin.editar-precios',compact('content'));

}

    public function precioss(Request $request, $precios_id){
      if($request->input('inlineRadioOptions') == "No"){ 
   $precioup = precio::find($precios_id);
   $precioup->descripcion =  $request->input('inputDes');
   $precioup->tipo =  $request->input('inputTipo');
   $precioup->cupon =  $request->input('inputCupon');
   $precioup->preciomx =  $request->input('inputPreciomx');
   $precioup->preciousd =  $request->input('inputPreciousd');
   $precioup->vigencia_ini =  $request->input('inputVigenciaini');
   $precioup->vigencia_fin =  $request->input('inputVigenciafin');
   $precioup->update();
}
        else{
           $precioup = precio::find($precios_id);
   $precioup->descripcion =  $request->input('inputDes');
   $precioup->tipo =  $request->input('inputTipo');
   $precioup->cupon =  $request->input('inputCupon');
   $precioup->preciomx =  $request->input('inputPreciomx');
   $precioup->preciousd =  $request->input('inputPreciousd');
   $precioup->vigencia_ini =  $request->input('inputVigenciaini');
   $precioup->vigencia_fin =  $request->input('inputVigenciafin');
   $precioup->update();

        }
      
 $precioup->fk_id_precios = $precioup->fk_id_precios;



   return Redirect::to('open_event_edit/' . $precioup->fk_id_precios)->with('toast_success', 'Precio editado correctamente');
   //return redirect('open_event_edit/')->with('toast_success', 'Precio editado correctamente');

  //return back()->with('toast_success', 'Precio editado correctamente');

  //      return redirect('/eventos_abiertos')->with('toast_success', 'Precio editado correctamente');
    }

      public function showagregarprecio(Request $request, $id_evt_wrk){
         $content = \DB::table('events_workshops') 
->select('workshops.name','events_workshops.id_evt_wrk','precios.*','events_workshops.start_date','events_workshops.end_date','events_workshops.id_precios','precios.fk_id_precios')  
->join('precios', 'precios.fk_id_precios', '=', 'events_workshops.id_evt_wrk')
->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
//->groupBy('precios.fk_id_precios')
//->where('events_workshops.id_evt_wrk', $id_evt_wrk)
//->orderBy('start_date','ASC')
 ->get();
      
      $evabierto = \DB::table('events_workshops')
           //->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
          // ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->select('events_workshops.id_evt_wrk')


         
          ->where('id_evt_wrk', $id_evt_wrk)
         
         ->get();

       return view('admin.agregar-precio',compact('content','evabierto'));
    }

     public function addprecio(Request $request){
        //$addResenaOpenEvent = new EventsImages;
       $precioup = new precio;
       $precioup->descripcion =  $request->input('inputDes');
       $precioup->tipo =  $request->input('inputTipo');
       $precioup->cupon =  $request->input('inputCupon');
       $precioup->preciomx =  $request->input('inputPreciomx');
       $precioup->preciousd =  $request->input('inputPreciousd');
       $precioup->vigencia_ini =  $request->input('inputVigenciaini');
       $precioup->vigencia_fin =  $request->input('inputVigenciafin');
       $precioup->fk_id_precios = $request->input('inputId');
   

        $precioup->save();
        $precioup->fk_id_precios = $precioup->fk_id_precios;



   return Redirect::to('open_event_edit/' . $precioup->fk_id_precios)->with('toast_success', 'precio agregado correctamente');
     
       // return redirect('/eventos_abiertos')->with('toast_success', 'precio agregado correctamente');
       //return view('admin.agregar-precio',compact('content'));
    }
   public function eliminar_precio($precios_id){

          $variableprecio = \DB::table('precios')
           //->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
          // ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->select('precios.*')

 
          ->where('precios.precios_id', $precios_id)
         
         ->get();



         return view('admin.eliminar_precio',compact('variableprecio'));
    }

  public function deletepre($precios_id){
     $content = precio::findOrFail($precios_id);

        $content->delete();

$content->fk_id_precios = $content->fk_id_precios;
return Redirect::to('open_event_edit/' . $content->fk_id_precios)->with('toast_success', 'Precio eliminado correctamente');
     //   return redirect('/eventos_abiertos')->with('toast_success', 'Evento eliminado correctamente');
    }

    public function deleteevents($id_evt_wrk){

        $eventoAbierto = Events_Workshops::findOrFail($id_evt_wrk);

        $borrandoImagenes = \DB::table('events_images')
        ->where('events_images.fk_id_events_workshops', $id_evt_wrk)
        
        ->delete();

        $eventoAbierto->delete();


        return redirect('/eventos_abiertos')->with('toast_success', 'Evento eliminado correctamente');
    }

      public function alerta($id_evt_wrk){

     $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
          // ->join('users', 'events_workshops.fk_user_id', '=', 'users.id')
           ->join('users AS modify', 'events_workshops.fk_user_id', '=', 'modify.id')
        ->join('users AS creation', 'events_workshops.fk_id_user_creation', '=', 'creation.id')
         
           ->select('events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.name AS nombre_instructor','instructors.last_name','events_workshops.fk_user_id','modify.name AS nameModification', 'modify.email AS emailModification','events_workshops.updated_at', 'creation.name AS nameCreation', 'creation.email AS emailCreation','events_workshops.created_at')
             ->where('events_workshops.id_evt_wrk',$id_evt_wrk)

           ->get();  
          ///para jalas los variables para el agregar 



  
       return view('admin.eliminar_abiertos',compact('evabierto'));
    }



     public function showagregar(){

     $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
           ->join('users', 'events_workshops.fk_user_id', '=', 'users.id')
         
           ->select('events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.name AS nombre_instructor','instructors.last_name','users.name AS curso', 'users.email')
           ->get();  

       $todosTalleres = \DB::table('workshops')
       ->select('name AS nombreTodosCurso','workshop_id')
       ->get();

       $todasDirecciones = \DB::table('addresses')
       ->select('address_id','street')
       ->get();

           $instructors = \DB::table('instructors')
        ->select('instructor_id','name AS insName','last_name AS insApellido')

        ->get();

       return view('admin.agregar-eventos-abiertos',compact('evabierto','todosTalleres','instructors','todasDirecciones'));
    }
    public function mostrar_resena(Request $request, $id_evt_wrk){
            $evabierto = Events_Workshops::find($id_evt_wrk);


       $evabierto = \DB::table('events_workshops')
           ->join('workshops', 'workshops.workshop_id', '=', 'events_workshops.id_workshop')
           ->join('addresses', 'addresses.address_id', '=', 'events_workshops.id_address')
           ->join('instructors', 'instructors.instructor_id', '=', 'events_workshops.id_instructor')
          // ->join('users', 'events_workshops.fk_user_id', '=', 'users.id')
           ->join('users AS modify', 'events_workshops.fk_user_id', '=', 'modify.id')
        ->join('users AS creation', 'events_workshops.fk_id_user_creation', '=', 'creation.id')
         
           ->select('events_workshops.resena','events_workshops.id_workshop','events_workshops.start_date','events_workshops.end_date','workshops.name','addresses.street','addresses.city','addresses.state','addresses.country','events_workshops.tipo','events_workshops.status','events_workshops.id_evt_wrk','instructors.name AS nombre_instructor','instructors.last_name','events_workshops.fk_user_id','modify.name AS nameModification', 'modify.email AS emailModification','events_workshops.updated_at', 'creation.name AS nameCreation', 'creation.email AS emailCreation','events_workshops.created_at')
                   ->where('events_workshops.id_evt_wrk',$id_evt_wrk)

           ->get();  
          ///para jalas los variables para el agregar 
  $miTaller = \DB::table('workshops')
       ->select('workshops.name AS nombreCurso','events_workshops.id_workshop')
       ->join('events_workshops', 'events_workshops.id_workshop', '=', 'workshops.workshop_id')
       ->where('events_workshops.id_workshop', $evabierto[0]->id_workshop)
       ->get();

  $imagenes= \DB::table('events_images')
        ->join('events_workshops', 'events_workshops.id_evt_wrk', '=', 'events_images.fk_id_events_workshops')
        ->select('events_images.path','events_images.id')
    
        ->where('events_workshops.id_evt_wrk', $id_evt_wrk)
        
        ->get();

        return view('admin.resena-eventos-abiertos',compact('evabierto','miTaller','imagenes')); 

    }
    public function saveResena(Request $request,$id_evt_wrk){        

        $addEvabierto = Events_Workshops::find($id_evt_wrk);

        $addEvabierto->resena = $request->input('resena');
        $addEvabierto->fk_user_id = $request->input('modificationBy');

        $addEvabierto->update();
        
        return redirect('/eventos_abiertos')->with('toast_success', 'Rese単a agregada correctamente');
    }

    public function storeimages(Request $request){

        $addResenaOpenEvent = new EventsImages;


        $files = $request->file('inputAbiertos');
        $taller = $request->input('tallerID');
        

        if(!empty($files)):
            foreach($files as $file):
                $imageName= $file->getClientOriginalName();
                $file->move(public_path('images/cabierto'),$imageName);

                $addResenaOpenEvent->name=$imageName;
                $addResenaOpenEvent->path = "/images/cabierto/".$imageName;
                $addResenaOpenEvent->fk_id_events_privates = NULL;
                $addResenaOpenEvent->fk_id_events_workshops = $taller;

                $addResenaOpenEvent->save();
                
                
            endforeach;

        endif;

        return response()->json(['uploaded'=>$files]);
    }

    public function eliminar_imagenes($id){
        $images = EventsImages::findOrFail($id);
        $images->delete();

        return back()->with('toast_success', 'Imagen eliminada correctamente');
    }

}
