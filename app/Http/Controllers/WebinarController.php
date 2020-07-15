<?php

namespace App\Http\Controllers;

use App\Webinar;
use App\WebinarRegistro;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {

        $now = new \DateTime();
 $now->format('d-m-Y H:i:s');

      //     $date_now = date('Y-m-d');
    $to = date("2059-10-24",strtotime(date('%d %b %Y')."- 1 day"));
         $webinarinfo = Webinar:://consulta de eventos realizados
         where('slug', $slug)
         ->whereBetween('time', [$now, $to])


    ->get();

   


     $paises = \DB::table('paises')
        ->select('pais_id','nombre')

        ->get();
            return view('webinar.index',compact('webinarinfo','paises','date_now','to'));
    }

  public function registro(Request $request, $email)
    {
        $persona = WebinarRegistro:://consulta de eventos realizados
   where('email', $email)

    ->get();
     //     $persona = \DB::table('registro_webinar')
       //   ->join('webinars', 'webinars.webinar_id', '=', 'registro_webinar.id_webinar')
        //->select('registro_webinar.estado','registro_webinar.idRegistro','registro_webinar.slug','registro_webinar.name','registro_webinar.email','webinars.nombre','webinars.fecha','webinars.descripcion')
        
        //->where('idRegistro', $idRegistro)

        //->get();
 
    
            return view('webinar.cancelar',compact('persona'));
    }

        public function updateregistro(Request $request, $email){
      $persona = WebinarRegistro::find($email);
     // $persona->estado = $request->input('inputInactivo');
       $persona->estado = "Inactivo";


   //    $persona->estado = "Inactivo";
   //   $evabierto->estado = $request->input('inputInactivo');
 
      
        $persona->update();

  //       $app = App\WebinarRegistro::find($idRegistro);
//$app->where("idRegistro", $idRegistro)
  //  ->update(["Inactivo" => $estado]);
          
        return redirect('/eliminado')->with('toast_success', 'Evento editado correctamente');
    }

     public function mensajeeliminado()
    {
  //      $persona = WebinarRegistro:://consulta de eventos realizados
  // where('slug', $slug)

    //->get();
       
 
    
            return view('webinar.eliminado',compact('persona'));
    }

      public function ver()
    {
               $webinarinfo = Webinar:://consulta de eventos realizados
       
         //->whereBetween('time', [$now, $to])


    get();
        return view('webinar.webinarios',compact('webinarinfo'));
    }
    
      public function mostrarwebinar(Request $request, $webinar_id)
    {
           //    $mostrar = Webinar::
           //get();
   $mostrar = Webinar::findOrFail($webinar_id);

        return view('webinar.crudwebinar.editwebinar',compact('mostrar'));
    }

        public function savewebinar(Request $request, $webinar_id){
        $webinar_edit = Webinar::find($webinar_id);

        $webinar_edit->nombre = $request->input('inputName');
        $webinar_edit->time = $request->input('inputTime');
        $webinar_edit->descripcion = $request->input('inputHorario');
        $webinar_edit->temas = $request->input('inputTemas');
        $webinar_edit->enlace = $request->input('inputEnlace');
        $webinar_edit->botongoogle = $request->input('inputBoton');
        $webinar_edit->slug = $request->input('inputSlug');

         if($request->hasfile('inputEdit')){
            $principalEdit = $request->file('inputEdit');
            $imageNameEdit= $principalEdit->getClientOriginalName();
            $principalEdit ->move(public_path('images/img_webinar'),$imageNameEdit);
            $webinar_edit->img = "/images/img_webinar/".$imageNameEdit;
        }


        $webinar_edit->update();

        return redirect('/webinarios')->with('toast_success', 'Evento editado correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function show(Webinar $webinar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinar $webinar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webinar $webinar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinar $webinar)
    {
        //
    }
}
