<?php

namespace App\Http\Controllers\Admin;

use RealRashid\SweetAlert\Facades\Alert;
use App\EventsPrivate;
use App\EventsImages;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivateEventsController extends Controller
{

    //private $myArray;
    
    public $myArray = array("prueba");

    public function showevents(){

        $private_event = \DB::table('events_privates')
        ->join('instructors', 'events_privates.instructor_id', '=', 'instructors.instructor_id')
        ->join('users AS modify', 'events_privates.fk_id_user', '=', 'modify.id')
        ->join('users AS creation', 'events_privates.fk_id_user_creation', '=', 'creation.id')
        ->select('events_privates.eventsprivate_id','events_privates.name','events_privates.start_date','events_privates.end_date', 'events_privates.tipo', 'events_privates.status','events_privates.city','events_privates.state','events_privates.country','instructors.name AS nombre_instructor','instructors.last_name','events_privates.fk_id_user','modify.name AS nameModification', 'modify.email AS emailModification','events_privates.updated_at', 'creation.name AS nameCreation', 'creation.email AS emailCreation','events_privates.created_at')

        ->get();

        $show_instructors = \DB::table('instructors')
        ->select('instructor_id','name AS insName','last_name AS insApellido')

        ->get();

        return view('admin.eventos',compact('private_event','show_instructors')); 

    }

    public function addevents(Request $request){

        $addPrivateEvent = new EventsPrivate;

        $addPrivateEvent->name = $request->input('nombre');
        $addPrivateEvent->modalidad = $request->input('modo');
        $addPrivateEvent->client = $request->input('cliente');
        $addPrivateEvent->duration = $request->input('duracion');
        $addPrivateEvent->start_date = $request->input('fecha_inicial');
        $addPrivateEvent->end_date = $request->input('fecha_final');
        $addPrivateEvent->instructor_id = $request->input('instructor');
        $addPrivateEvent->status = $request->input('estatus');
        $addPrivateEvent->city = $request->input('ciudad');
        $addPrivateEvent->state = $request->input('estado');
        $addPrivateEvent->country = $request->input('pais');
        $addPrivateEvent->fk_id_user_creation = $request->input('createdBy');
        $addPrivateEvent->fk_id_user = 3;
        $addPrivateEvent->updated_at = NULL;
        $addPrivateEvent->tipo = "In Company";

        $addPrivateEvent->save();
        

        return redirect('/eventos_privados')->with('toast_success', 'Evento agregado correctamente');
    }

    public function editevents(Request $request, $id){


        $private_event_edit = EventsPrivate::findOrFail($id);


        $instructor = \DB::table('events_privates')
        ->join('instructors', 'instructors.instructor_id', '=', 'events_privates.instructor_id')
        ->select('instructors.instructor_id','instructors.name AS myName','instructors.last_name AS myLast')
        ->where('events_privates.eventsprivate_id',$id)
        
        ->get();


        $instructors = \DB::table('instructors')
        ->select('instructor_id','name AS nombre_instructor','last_name AS lastName_instructor')
        ->where('instructor_id','<>',$instructor[0]->instructor_id)

        ->get();

        $estatus = \DB::table('events_privates')
        ->select('status')
        ->where('eventsprivate_id',$id)

        ->get();

        $Modo = \DB::table('events_privates')
        ->select('modalidad')
        ->where('eventsprivate_id',$id)

        ->get();

        $modifico = \DB::table('users')
        ->join('events_privates', 'users.id', '=', 'events_privates.fk_id_user')
        ->select('users.name AS persona','users.email')
        ->where('eventsprivate_id', $id)

        ->get();

        $creo = \DB::table('users')
        ->join('events_privates', 'users.id', '=', 'events_privates.fk_id_user_creation')
        ->select('users.name AS persona','users.email')
        ->where('eventsprivate_id', $id)

        ->get();

        return view('admin.editar-eventos-privados',compact('private_event_edit','instructors','instructor','estatus','creo','modifico','Modo')); 

    }

    public function update_edit_events(Request $request, $id){
        $private_event_edit = EventsPrivate::find($id);
        $private_event_edit->name = $request->input('inputEvento');
        $private_event_edit->modalidad = $request->input('inputAddModalidad');
        $private_event_edit->client = $request->input('inputCliente');
        $private_event_edit->duration = $request->input('inputDuracion');
        $private_event_edit->start_date = $request->input('init-date-input');
        $private_event_edit->end_date = $request->input('fin-date-input');
        $private_event_edit->instructor_id = $request->input('inputInstructor');
        $private_event_edit->status = $request->input('inputStatus');
        $private_event_edit->city = $request->input('inputCiudad');
        $private_event_edit->state = $request->input('inputEstado');
        $private_event_edit->country = $request->input('inputPais');
        $private_event_edit->fk_id_user = $request->input('modificationBy');
        $private_event_edit->update();

        return redirect('/eventos_privados')->with('toast_success', 'Evento editado correctamente');
    }


    public function deleteevents($id){

        $evento = EventsPrivate::findOrFail($id);

        $borrandoImagenes = \DB::table('events_images')
        ->where('events_images.fk_id_events_privates', $id)
        
        ->delete();

        $evento->delete();

        return redirect('/eventos_privados')->with('toast_success', 'Evento eliminado correctamente');
    }
    
    public function alerta($id){

        $private_event = \DB::table('events_privates')
        ->join('instructors', 'events_privates.instructor_id', '=', 'instructors.instructor_id')
        ->join('users AS modify', 'events_privates.fk_id_user', '=', 'modify.id')
        ->join('users AS creation', 'events_privates.fk_id_user_creation', '=', 'creation.id')
        ->select('events_privates.eventsprivate_id','events_privates.name','events_privates.start_date','events_privates.end_date', 'events_privates.tipo', 'events_privates.status','events_privates.city','events_privates.state','events_privates.country','instructors.name AS nombre_instructor','instructors.last_name','events_privates.fk_id_user','modify.name AS nameModification', 'modify.email AS emailModification','events_privates.updated_at', 'creation.name AS nameCreation', 'creation.email AS emailCreation','events_privates.created_at')
        ->where('events_privates.eventsprivate_id',$id)


        ->get();


        return view('admin.eliminar_privados',compact('private_event')); 

    }


    public function mostrar_instuctores(){

        $show_instructors = \DB::table('instructors')
        ->select('instructor_id','name AS insName','last_name AS insApellido')

        ->get();

        return view('admin.agregar-eventos-privados',compact('show_instructors')); 

    }

    public function mostrar_resena(Request $request, $id){
        $events_private_resena = EventsPrivate::find($id);

        $instructor = \DB::table('events_privates')
        ->join('instructors', 'instructors.instructor_id', '=', 'events_privates.instructor_id')
        ->select('instructors.instructor_id','instructors.name AS myName','instructors.last_name AS myLast')
        ->where('events_privates.eventsprivate_id',$id)
        
        ->get();

        $imagenes= \DB::table('events_images')
        ->join('events_privates', 'events_privates.eventsprivate_id', '=', 'events_images.fk_id_events_privates')
        ->select('events_images.path','events_images.id')
    
        ->where('events_privates.eventsprivate_id', $id)
        
        ->get();

        return view('admin.resena-eventos-privados',compact('events_private_resena','instructor','imagenes')); 

    }

    public function saveResena(Request $request,$id){

        $addResenaPrivateEvent = EventsPrivate::find($id);

        $addResenaPrivateEvent->resena = $request->input('resena');
        $addResenaPrivateEvent->fk_id_user = $request->input('modificationBy');
        

        $addResenaPrivateEvent->update();
        
        return redirect('/eventos_privados')->with('toast_success', 'Reseña agregada correctamente');
    }



    public function storeimages(Request $request){

        $addResenaPrivateEvent = new EventsImages;


        $files = $request->file('input2');
        $taller = $request->input('tallerID');
        

        if(!empty($files)):
            foreach($files as $file):
                $imageName= $file->getClientOriginalName();
                $file->move(public_path('images/cprivado'),$imageName);

                $addResenaPrivateEvent->name=$imageName;
                $addResenaPrivateEvent->path = "/images/cprivado/".$imageName;
                $addResenaPrivateEvent->fk_id_events_privates = $taller;
                $addResenaPrivateEvent->fk_id_events_workshops = NULL;

                $addResenaPrivateEvent->save();
                
                
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
