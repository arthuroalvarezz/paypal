<?php
use App\EventsPrivate;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');





Route::post('/message', 'EmailController@recievedMessage')->name('message');
Route::resource('workshop','WorkshopController');
Route::resource('event','EventController');
Route::get('test','WorkshopController@getCalendarInfo');
//Route::get('/{id}','HomeController@index')->name('instructors');/**mande mi return a un controlador el primer parametro es nombre del controlador y lo del arroba es el nombre que le puse como identificador**/
Route::get('/descargar-ficha', 'HomeController@imprimirficha')->name('imprimirficha');
Route::get('/imprimirevento/{id}', 'HomeController@imprimirevento')->name('imprimirevento');
Route::get('/ver/{id}', 'HomeController@ver')->name('ver');



Route::get('/eventsprivates/{id}','EventsprivateController@eventsprivates');
Route::get('/privado/','HomeController@cerrado')->name('cerrado');
Route::get('/privado/{eventsprivate_id}','HomeController@cerrado');

Route::get('/abierto/{id_evt_wrk}','HomeController@abierto')->name('abierto');
Route::get('/listaabiertos','HomeController@listaabierto');
Route::get('/listaprivados','HomeController@listaprivado');
Route::get('/Paneluser','PaneluserController@index');
Route::get('/upgrade', function(){
	return view('admin.upgrade');
    });
Route::get('/webinar/{slug}','WebinarController@index');
Route::get('/cancelar_suscripcion/{email}','WebinarController@registro')->name('webinar.cancelar');
Route::put('/actualizar/{email}','WebinarController@updateregistro');
Route::get('/eliminado/','WebinarController@mensajeeliminado');





/**
 * RUTAS PAGAR
 */
Route::post('/payments/pay','PaymentController@pay')->name('pay');
Route::get('/payments/approval','PaymentController@approval')->name('approval');
Route::get('/payments/cancelled','PaymentController@cancelled')->name('cancelled');




/***
 * MOSTRAR EVENTOS
 * DEBEMOS ENVIAR EL id del WordShop $id_workshop y 
 * la plataforma de Pago (PayPal = 1, MercadoPago = 2 )
 */ 
Route::get('/mostrarevento/{id_evt_wrk}/{platform_id}/{precios_id}', 'OrderController@mostrarevento')->name('mostrarevento');

/*
*CREAR UNA ORDEN DE PAGO
*/
Route::post('/createorder' , 'OrderController@create' )->name('createorder');

/**
 * MUESTRA UNA ORDEN POR ID
 */
Route::get('/mostrarorden/{id}/' , 'OrderController@mostrarorden' )->name('mostrarorden');

/**
 * GRACIAS 
 */
Route::get('/gracias/{id}', 'OrderController@checkStatus')->name('gracias');


Route::get('/mensaje', function(){
    return view('webinar.alerta');
    });
Route::get('/pago_exitoso', function(){
    return view('pago.pexitoso');
    });
Route::get('/pago_cancelado', function(){
    return view('pago.error');
    });

Route::get('/pagar/{id}','Admin\OpenEventsController@showpago')->name('pago.index');
//primer parametro es la ruta como lo buscas luego el controlador seguido de la funcion de como se llama en el controlador por si es ruta get porque si es resource se queda asi limpio el controlador y lo de adelante del name es como lo quieres nombrar para que lo jales en los menus rutas etc
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function(){
	Route::get('/dashboard', function(){
        
	return view('admin.dashboard');
    });

    /* ---------------------------------------------------------------PRIVATE EVENTS------------------------------------------------------------------------------------- */

    Route::get('/eventos_privados','Admin\PrivateEventsController@showevents');

    Route::get('/private_event_edit/{id}','Admin\PrivateEventsController@editevents')->name('admin.editar-eventos-privados');
    Route::put('/eventos_privados/{id}','Admin\PrivateEventsController@update_edit_events');

    Route::get('/agregar_eventos_privados','Admin\PrivateEventsController@mostrar_instuctores')->name('admin.agregar-eventos-privados');
    Route::post('/add_eventos_privados','Admin\PrivateEventsController@addevents');

    Route::delete('/delete_eventos_privados/{id}','Admin\PrivateEventsController@deleteevents')->name('admin.eliminar-eventos-privados');


    Route::get('/resena_eventos_privados/{id}','Admin\PrivateEventsController@mostrar_resena')->name('admin.resena-eventos-privados');
    Route::put('/guardar_resena/{id}','Admin\PrivateEventsController@saveResena');
    Route::post('/resena_eventos_privados_img','Admin\PrivateEventsController@storeimages');
    Route::delete('/resena_eliminarImagenes_eventos_privados/{id}','Admin\PrivateEventsController@eliminar_imagenes')->name('admin.eliminar-imagenResena-privados');
    Route::get('/eliminar_privados/{id}','Admin\PrivateEventsController@alerta')->name('admin.eliminar_privados');

    /* ---------------------------------------------------------------OPEN EVENTS------------------------------------------------------------------------------------- */
   
   

    Route::get('/eventos_abiertos','Admin\OpenEventsController@showevents');
    Route::get('/eventos_abiertos','Admin\OpenEventsController@showevents')->name('admin.eventos_abiertos');
    Route::get('/open_event_edit/{id_evt_wrk}','Admin\OpenEventsController@editevents')->name('admin.editar-eventos-abiertos');

    Route::put('/eventos_abiertos/{id_evt_wrk}','Admin\OpenEventsController@update');
    //Route::put('/editprecios/{id_evt_wrk}','Admin\OpenEventsController@precioss');

    

    Route::get('/eliminar_abiertos/{id_evt_wrk}','Admin\OpenEventsController@alerta')->name('admin.eliminar_abiertos');


    Route::get('/agregar_eventos_abiertos','Admin\OpenEventsController@showagregar')->name('admin.agregar-eventos-abiertos');
    Route::post('/agregar_eventos_abiertos','Admin\OpenEventsController@addevents')->name('admin.agregar-eventos-abiertos');
    Route::delete('/delete_eventos_abiertos/{id_evt_wrk}','Admin\OpenEventsController@deleteevents')->name('admin.eliminar-eventos-abiertos');

    Route::get('/resena_eventos_abiertos/{id_evt_wrk}','Admin\OpenEventsController@mostrar_resena')->name('admin.resena-eventos-abiertos');
    Route::put('/guardar_resena_abiertos/{id_evt_wrk}','Admin\OpenEventsController@saveResena');
    Route::post('/resena_eventos_abiertos_img','Admin\OpenEventsController@storeimages');
    Route::delete('/resena_eliminarImagenes_eventos_abiertos/{id}','Admin\OpenEventsController@eliminar_imagenes')->name('admin.eliminar-imagenResena-abiertos');

    
    /* ---------------------------------------------------------------TALLERES------------------------------------------------------------------------------------- */
    
    Route::get('/talleres','Admin\WorkshopAdminController@showworkshops');

    Route::get('/agregarTaller','Admin\WorkshopAdminController@mostrar_partner')->name('admin.agregar-workshop');
    Route::post('/agregar_taller','Admin\WorkshopAdminController@addworkshop');

    Route::get('/workshop_edit/{id}','Admin\WorkshopAdminController@editworkshop')->name('admin.editar-workshop');
    Route::put('/workshop_save_edit/{id}','Admin\WorkshopAdminController@update_workshop');
   
    Route::get('/eliminar_workshop/{id}','Admin\WorkshopAdminController@alerta')->name('admin.eliminar_workshop');
    Route::delete('/delete_workshop/{id}','Admin\WorkshopAdminController@borrartaller')->name('admin.eliminar-taller');
    
    /* ---------------------------------------------------------------WEB EMAILS------------------------------------------------------------------------------------- */
    
    Route::get('/web_emails','Admin\WebEmailsController@showmails');

    /* ---------------------------------------------------------------WEBINARS registro------------------------------------------------------------------------------------- */
    
    Route::get('/register_webinars','Admin\WebinarController@showwebinarsregister');

     /* ---------------------------------------------------------------fin WEBINARS registro------------------------------------------------------------------------------------- */
      /* ---------------------------------------------------------------inicia WEBINARS------------------------------------------------------------------------------------- */
      Route::get('/webinarios','WebinarController@ver');
      Route::get('/mostrarwebinar/{id}','WebinarController@mostrarwebinar')->name('webinar.crudwebinar.editwebinar');
      Route::put('/guardarwebinar/{id}','WebinarController@savewebinar');

  /* ---------------------------------------------------------------aqui ando modificando------------------------------------------------------------------------------------ */
   /* ---------------------------------------------------------------aqui ando modificando------------------------------------------------------------------------------------ */
    Route::get('/agregar_precio/{id}','Admin\OpenEventsController@showagregarprecio');
    Route::post('/agregar_precio/{id}','Admin\OpenEventsController@addprecio')->name('admin.agregar-precio');
    Route::post('/agregar_precio/','Admin\OpenEventsController@addprecio')->name('admin.agregar-precio');
    Route::get('/editarprecio/{id}','Admin\OpenEventsController@editprecios')->name('admin.editar-precios');
    Route::put('/edit/{id}','Admin\OpenEventsController@precioss');
    Route::get('/eliminar_precio/{id}','Admin\OpenEventsController@eliminar_precio')->name('admin.eliminar_precio');
    Route::delete('/delete_precios/{id}','Admin\OpenEventsController@deletepre')->name('admin.eliminar-precios');





     // Route::get('/workshop_edit/{id}','Admin\WorkshopAdminController@editworkshop')->name('admin.editar-workshop');
   // Route::put('/workshop_save_edit/{id}','Admin\WorkshopAdminController@update_workshop');
   
    /*  Route::get('/webinarioss', function(){
    return view('webinar.crudwebinar.editwebinar');
    });*/
  /****  Route::get('/agregar_precio/{id}','Admin\OpenEventsController@showagregarprecio')->name('admin.agregar-precio');
    Route::post('/agregar_precio/{id}','Admin\OpenEventsController@addprecio')->name('admin.agregar-precio');
      Route::post('/agregar_precio/','Admin\OpenEventsController@addprecio')->name('admin.agregar-precio');

   Route::get('/editarprecio/{id}','Admin\OpenEventsController@editprecios')->name('admin.editar-precios');
   Route::put('/edit/{id}','Admin\OpenEventsController@precioss');***/

 /*   webinar.crudwebinar.webinarios

    Route::get('/eventos_privados','Admin\PrivateEventsController@showevents');

    Route::get('/private_event_edit/{id}','Admin\PrivateEventsController@editevents')->name('admin.editar-eventos-privados');
    Route::put('/eventos_privados/{id}','Admin\PrivateEventsController@update_edit_events');

    Route::get('/agregar_eventos_privados','Admin\PrivateEventsController@mostrar_instuctores')->name('admin.agregar-eventos-privados');
    Route::post('/add_eventos_privados','Admin\PrivateEventsController@addevents');

    Route::delete('/delete_eventos_privados/{id}','Admin\PrivateEventsController@deleteevents')->name('admin.eliminar-eventos-privados');
    

    Route::get('/resena_eventos_privados/{id}','Admin\PrivateEventsController@mostrar_resena')->name('admin.resena-eventos-privados');
    Route::put('/guardar_resena/{id}','Admin\PrivateEventsController@saveResena');
    Route::post('/resena_eventos_privados_img','Admin\PrivateEventsController@storeimages');
    Route::delete('/resena_eliminarImagenes_eventos_privados/{id}','Admin\PrivateEventsController@eliminar_imagenes')->name('admin.eliminar-imagenResena-privados');
    Route::get('/eliminar_privados/{id}','Admin\PrivateEventsController@alerta')->name('admin.eliminar_privados');
 
 ---------------------------------------------------------------fin WEBINARS------------------------------------------------------------------------------------- */
});