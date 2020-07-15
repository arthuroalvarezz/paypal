<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Workshop;

class WorkshopAdminController extends Controller
{
    public function showworkshops(){

        $workshops = \DB::table('workshops')
        ->join('partners', 'workshops.id_partner', '=', 'partners.partner_id')
        ->join('users AS creation', 'workshops.fk_id_user', '=', 'creation.id')
        ->select('workshops.workshop_id','workshops.name', 'partners.name AS partner', 'workshops.order_workshop', 'workshops.created_at', 'creation.email','workshops.Activo')

        ->get();

        return view('admin.workshops',compact('workshops'));
    }

    public function addworkshop(Request $request){ 
        $addWorkshop = new Workshop;

        $addWorkshop->fk_id_user = $request->input('createdBy');
        $addWorkshop->name = $request->input('taller');
        $addWorkshop->subtitulo = $request->input('subtitulo');
        $addWorkshop->duration = $request->input('duration');
        $addWorkshop->order_workshop = $request->input('secuencia');
        $addWorkshop->slug = $request->input('url');
        $addWorkshop->description = $request->input('descripcion');
        $addWorkshop->audience = $request->input('forwho');
        $addWorkshop->what_include = $request->input('recibir');
        $addWorkshop->benefits = $request->input('benefits');
        $addWorkshop->agenda = $request->input('schedule');
        $addWorkshop->goals = $request->input('learning');

        if($request->hasfile('input')){
            $principal = $request->file('input');
            $imageName= $principal->getClientOriginalName();
            $principal ->move(public_path('images/img_talleres'),$imageName);
            $addWorkshop->img_main = "/images/img_talleres/".$imageName;
        }

        if($request->hasfile('inputTalleres')){
            $taller = $request->file('inputTalleres');
            $imageTallerName= $taller->getClientOriginalName();
            $taller ->move(public_path('images/logos'),$imageTallerName);
            $addWorkshop->img = "/images/logos/".$imageTallerName;
        }


        $addWorkshop->id_partner = $request->input('partner');
        $addWorkshop->Activo = $request->input('estatus');
        $addWorkshop->modalidad = $request->input('modalidad');
 
        $addWorkshop->fk_id_user_modification = 3;
        $addWorkshop->updated_at = NULL;
        

        $addWorkshop->save();
        
        return redirect('/talleres')->with('toast_success', 'Taller agregado correctamente');
    }

    public function mostrar_partner(){
        $show_partners = \DB::table('partners')
        ->select('partner_id','name AS partnerName')

        ->get();

        return view('admin.agregar-workshop',compact('show_partners')); 
    }

    public function editworkshop(Request $request, $id){

        $workshop_edit = Workshop::findOrFail($id);

        $show_partners = \DB::table('partners')
        ->select('partners.partner_id','partners.name AS partnerName')
        ->join('workshops', 'workshops.id_partner', '=', 'partners.partner_id')
        ->where('workshops.workshop_id', $id)

        ->get();

        $show_Allpartners = \DB::table('partners')
        ->select('partner_id','name AS partnerName')
        ->where('partner_id','<>',$show_partners[0]->partner_id)

        ->get();

        $modifico = \DB::table('users')
        ->join('workshops', 'users.id', '=', 'workshops.fk_id_user_modification')
        ->select('users.name AS persona','users.email')
        ->where('workshop_id', $id)

        ->get();

        $creo = \DB::table('users')
        ->join('workshops', 'users.id', '=', 'workshops.fk_id_user')
        ->select('users.name AS persona','users.email')
        ->where('workshop_id', $id)

        ->get();

        return view('admin.editar-workshop', compact('workshop_edit','show_partners','show_Allpartners','modifico','creo'));
    }

    public function update_workshop(Request $request, $id){

        $workshop_save_edit = Workshop::find($id);

        $workshop_save_edit->name = $request->input('tallerEdit');
        $workshop_save_edit->subtitulo = $request->input('subtituloEdit');
        $workshop_save_edit->duration = $request->input('durationEdit');
        $workshop_save_edit->order_workshop = $request->input('secuenciaEdit');
        $workshop_save_edit->slug = $request->input('urlEdit');
        $workshop_save_edit->description = $request->input('descripcion');
        $workshop_save_edit->audience = $request->input('forwho');
        $workshop_save_edit->what_include = $request->input('recibir');
        $workshop_save_edit->benefits = $request->input('benefits');
        $workshop_save_edit->agenda = $request->input('schedule');
        $workshop_save_edit->goals = $request->input('learning');

        if($request->hasfile('inputEdit')){
            $principalEdit = $request->file('inputEdit');
            $imageNameEdit= $principalEdit->getClientOriginalName();
            $principalEdit ->move(public_path('images/img_talleres'),$imageNameEdit);
            $workshop_save_edit->img_main = "/images/img_talleres/".$imageNameEdit;
        }

        if($request->hasfile('inputTalleresEdit')){
            $tallerEdit = $request->file('inputTalleresEdit');
            $imageTallerNameEdit= $tallerEdit->getClientOriginalName();
            $tallerEdit ->move(public_path('images/logos'),$imageTallerNameEdit);
            $workshop_save_edit->img = "/images/logos/".$imageTallerNameEdit;
        }


        $workshop_save_edit->id_partner = $request->input('partnerEdit');
        $workshop_save_edit->Activo = $request->input('estatusEdit');
        $workshop_save_edit->modalidad = $request->input('modalidad');
 
        $workshop_save_edit->fk_id_user_modification = $request->input('modificationBy');

        $workshop_save_edit->update();

        return redirect('/talleres')->with('toast_success', 'Taller editado correctamente');
    }

    public function borrartaller($id){

        $deletetaller = Workshop::findOrFail($id);
       
        $deletetaller->delete();

        return redirect('/talleres')->with('toast_success', 'Evento eliminado correctamente');
    }

 public function alerta($id){

     
$workshops = \DB::table('workshops')
        ->join('partners', 'workshops.id_partner', '=', 'partners.partner_id')
        ->join('users AS creation', 'workshops.fk_id_user', '=', 'creation.id')
        ->select('workshops.workshop_id','workshops.name', 'partners.name AS partner', 'workshops.order_workshop', 'workshops.created_at', 'creation.email','workshops.Activo')
       ->where('workshops.workshop_id',$id)
        ->get();

        

        return view('admin.eliminar_workshop',compact('workshops'));

    }

}
