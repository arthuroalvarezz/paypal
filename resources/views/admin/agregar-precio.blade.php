
@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<!--<div class="" id="agregarEventoPrivado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar evento abierto</h5>
        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            


    </div>
  </div>
</div>-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Agregar precio</h2>
                </div>
                <div class="card-body">

<form action="{{url('agregar_precio')}}" method="POST" class="needs-validation" novalidate>

      {{csrf_field()}}

      <input type="hidden" value="{{ Auth::user()->id }}" name="createdBy"/>




          <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Descripción<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputDes" placeholder="Descripción" value=""><!---name se usa para el upd con open---->
                            <div class="invalid-feedback">
                                Por favor, escribe una descripción.
                            </div>
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Precio MXN<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputPreciomx" placeholder="Precio MXN" value="">
                            <div class="invalid-feedback">
                                Por favor, escribe un precio MXN.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Precio USD<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputPreciousd" placeholder="Precio USD" value="">
                            <div class="invalid-feedback">
                                Por favor, escribe un precio USD.
                            </div>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Tipo<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                          
                          <select id="inputAddEvento" name="inputTipo" class="form-control">
                                     
                                 <option selected>Selecciona un tipo</option>
                                 <option value="Presencial">Promoción</option>
                                 <option value="Live Streaming">Cupón</option>
                                 <option value="Live Streaming">Precio de lista</option>
                           </select>
                           
                            </div>
                        </div>

 
                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Cupón<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="inputCalle" name="inputCupon" placeholder="Si seleccionaste Tipo Cupón captura el Cupón que deberá colocar el cliente para realizar su pago" value="">
                            <div class="invalid-feedback">
                                Por favor, escribe un cupón.
                            </div>
                            </div>
                        </div>
                            
                                     


                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Vigencia de inicio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" required id="inputCalle" name="inputVigenciaini" placeholder="Calle" value="">
                            <div class="invalid-feedback">
                                Por favor, escribe una vigencia de inicio.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Vigencia de fin<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" required id="inputCalle" name="inputVigenciafin" placeholder="Calle" value="">
                            <div class="invalid-feedback">
                                Por favor, escribe una vigencia de fin.
                            </div>
                            </div>
                        </div>


@foreach($evabierto as $e)




                         <div class="form-group row" style="display: none">
                            <label for="inputCalle" class="col-sm-2 col-form-label">x<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputId" placeholder="Calle" value="{{$e->id_evt_wrk}}">
                            <div class="invalid-feedback">
                                Por favor, escribe una vigencia de fin.
                            </div>
                            </div>
                        </div>
<br>


        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Agregar Precio</button>  
        <!--  <button type="button" onClick="window.location.reload();" id="cancelButton" class="btn btn-danger" data-dismiss="modal">Cancelar</button>-->
       <!-- <a href="{{url('eventos_abiertos')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>-->
        <a href="../open_event_edit/{!!$e->id_evt_wrk!!}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
        @endforeach

              
        </div>
      
      </form>


                 </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<style type="text/css">
      @media only screen and (max-device-width: 320px) and (min-device-width: 319px){
textarea.area {
width: 100%;
}
}
  @media only screen and (max-device-width: 360px) and (min-device-width: 359px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 411px) and (min-device-width: 410px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 375px) and (min-device-width: 374px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 414px) and (min-device-width: 413px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 768px) and (min-device-width: 767px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 1220px) and (min-device-width: 821px){
textarea.area {
    width: 100%;
}
}
 @media only screen and (max-device-width: 1620px) and (min-device-width: 1221px){
textarea.area {
width: 100%;
}
}
 @media only screen and (max-device-width: 1820px) and (min-device-width: 1621px){
textarea.area {
width: 100%;
}

}
 @media only screen and (max-device-width: 2220px) and (min-device-width: 1821px){
textarea.area {
width: 100%;
}

}

</style>

 <!--<div class="form-group row">
          <label for="inputAddResena" class="col-sm-2 col-form-label">Reseña<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="resena" type="text" class="form-control" id="inputAddResena">
            <div class="invalid-feedback">
              Por favor, escribe una reseña.
            </div>  
          </div>
        </div>
       <div class="form-group row">
          <label for="inputAddResena" class="col-sm-2 col-form-label">Foto<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="foto" type="text" class="form-control" id="inputAddResena"> 
          </div>
        </div>
             <div class="form-group row">
          <label for="inputAddResena" class="col-sm-2 col-form-label">Foto2<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="foto2" type="text" class="form-control" id="inputAddResena"> 
          </div>
        </div>
             <div class="form-group row">
          <label for="inputAddResena" class="col-sm-2 col-form-label">Fot3<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="foto3" type="text" class="form-control" id="inputAddResena"> 
          </div>
        </div>-->
     <!--   <div class="form-group row">
          <label for="inputAddStatus" class="col-sm-2 col-form-label">Estatus<b style="color: red;">*</b></label>
          <div class="col-sm-10">
              <select name="nombre" required class="form-control" id="inputAddStatus">
                  <option value="" selected>Selecciona un estatus</option>
              </select>
              <div class="invalid-feedback">
                Por favor, selecciona un estatus.
              </div>
          </div>
        </div>


        <div class="form-group row">
          <label for="inputAddEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="nombre" type="text" class="form-control" id="inputAddEvento">
            <div class="invalid-feedback">
              Por favor, escribe un evento.
            </div>  
          </div>
        </div>-->

          

     <!--   <div class="form-group row">
          <label for="inputAddCliente" class="col-sm-2 col-form-label">Cliente<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="cliente" type="text" required id="inputAddCliente" placeholder="Cliente">
            <div class="invalid-feedback">
              Por favor, escribe un cliente.
            </div>
          </div> 
        </div>


        <div class="form-group row">
          <label for="inputAddDuracion" class="col-sm-2 col-form-label">Duración<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="duracion" required id="inputAddDuracion" placeholder="Duración">
            <div class="invalid-feedback">
              Por favor, escribe una duración.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="initAdd-date-input" class="col-sm-2 col-form-label">Fecha de inicio<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="fecha_inicial" required type="date" id="initAdd-date-input">
            <div class="invalid-feedback">
              Por favor, escribe una fecha de inicio.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="finAdd-date-input" class="col-sm-2 col-form-label">Fecha de finalización<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="fecha_final" required type="date" id="finAdd-date-input">
            <div class="invalid-feedback">
              Por favor, escribe una fecha de fin.
            </div>
          </div>
        </div>

  

        <div class="form-group row">
          <label for="inputAddStatus" class="col-sm-2 col-form-label">Estatus<b style="color: red;">*</b></label>
          <div class="col-sm-10">
              <select name="estatus" required class="form-control" id="inputAddStatus">
                  <option value="" selected>Selecciona un estatus</option>
                  <option value="Disponible">Disponible</option>
                  <option value="Realizado">Realizado</option>
                  <option value="Cancelado">Cancelado</option>
                  <option value="Cupo lleno">Cupo lleno</option>
              </select>
              <div class="invalid-feedback">
                Por favor, selecciona un estatus.
              </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label"><b>Ubicación</b></label>
        </div>

        <div class="form-group row">
          <label for="inputAddCiudad" class="col-sm-2 col-form-label">Ciudad<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="ciudad" required id="inputAddCiudad" placeholder="Ciudad">
            <div class="invalid-feedback">
              Por favor, escribe una ciudad.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputAddEstado" class="col-sm-2 col-form-label">Estado</label>
          <div class="col-sm-10">
            <input class="form-control" name="estado" id="inputAddEstado" placeholder="Estado">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputAddPais" class="col-sm-2 col-form-label">País<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="pais" required id="inputAddPais" placeholder="País">
            <div class="invalid-feedback">
              Por favor, escribe una país.
            </div>
          </div>
        </div>-->