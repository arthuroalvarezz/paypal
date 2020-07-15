
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
                    <h2>Agregar evento abierto</h2>
                </div>
                <div class="card-body">

<form action="{{url('agregar_eventos_abiertos')}}" method="POST" class="needs-validation" novalidate>

      {{csrf_field()}}

      <input type="hidden" value="{{ Auth::user()->id }}" name="createdBy"/>

  <!--<div class="form-group row">
          <label for="inputAddEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="nombre" type="text" class="form-control" id="inputAddEvento">
            <div class="invalid-feedback">
              Por favor, escribe un evento.
            </div>  
          </div>
        </div>-->
                 <div class="form-group row">
                         <label for="inputAddEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select id="inputAddEvento" required name="nombre" class="form-control">
                                   <option value="" selected>Selecciona un taller</option>
                                    @foreach($todosTalleres as $talleres)
                                        <option value="{{$talleres->workshop_id}}" required>{{ $talleres->nombreTodosCurso }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                  <div class="form-group row">
                        <label for="inputAddModalidad" class="col-sm-2 col-form-label">Modalidad<b style="color: red;">*</b></label>
                         <div class="col-sm-10">
                 <select name="modo" required class="form-control" id="inputAddModalidad">
                  <option selected>Selecciona una modalidad</option>
                    <option value="Presencial">Presencial</option>
                    <option value="Live Streaming">Live Streaming</option>
                 

              </select>
              <div class="invalid-feedback">
                Por favor, selecciona una modalidad.
              </div>
          </div>
        </div>
     
                              <div class="form-group row">
          <label for="initAdd-date-input" class="col-sm-2 col-form-label">Fecha de inicio<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="fechainicial" required type="date" id="initAdd-date-input">
            <div class="invalid-feedback">
              Por favor, escribe una fecha de inicio.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="finAdd-date-input" class="col-sm-2 col-form-label">Fecha de finalización<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input class="form-control" name="fechafinal" required type="date" id="finAdd-date-input">
            <div class="invalid-feedback">
              Por favor, escribe una fecha de fin.
            </div>
          </div>
        </div>

  <div class="form-group row">
          <label for="inputAddInstructor" class="col-sm-2 col-form-label">Instructor<b style="color: red;">*</b></label>
          <div class="col-sm-10">
              <select name="instructor" required class="form-control" id="inputAddInstructor">
                  <option value="" selected>Selecciona un instructor</option>
                   <option value="9">Sin instructor</option>
                  @foreach($instructors as $myInstructor)
                  @if($myInstructor->instructor_id != "9") 
                    <option value="{{$myInstructor->instructor_id}}">{{ $myInstructor->insName }} {{ $myInstructor->insApellido }}</option>
                    @endif
                  @endforeach

              </select>
              <div class="invalid-feedback">
                Por favor, selecciona un instructor.
              </div>
          </div>
        </div>

               <div class="form-group row">
                            <label for="inputStatus" class="col-sm-2 col-form-label">Estatus<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" required  name="estatus" id="inputStatus">
                  <option value="" selected>Selecciona un estatus</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="Realizado">Realizado</option>                                    
                                    <option value="Cancelado">Cancelado</option>
                                    <option value="Cupo lleno">Cupo lleno</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Ubicación</b></label>
                        </div>

                        <div class="form-group row">
                        <label for="inputAddquestion" class="col-sm-2 col-form-label">¿Usar dirección existente?</label>
                        <div class="col-sm-10">
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Sí">
                              <label class="form-check-label" for="inlineRadio1">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                      </div>

                      <div style="display: none" class="calleExistente form-group row">
                            <label for="inputAddStreet" class="col-sm-2 col-form-label">Calle existente</label>
                            <div class="col-sm-10">
                                <select class="form-control"   name="previewStreet" id="inputAddStreet">
                  <option value="" selected>Selecciona una calle</option>
                                    @foreach($todasDirecciones as $streets)
                    <option value="{{$streets->address_id}} ">{{ $streets->street }}</option>
                  @endforeach
                                </select>
                            </div>
                        </div>


         <div style="display: none" class="calle form-group row">
          <label for="inputAddCalle" class="col-sm-2 col-form-label">Calle<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="street" required placeholder="Calle" name="calle" type="text" class="form-control" id="inputAddCalle">
            <div class="invalid-feedback">
              Por favor, escribe una calle.
            </div>  
          </div>
        </div>

 <div style="display: none" class="ciudad form-group row">
          <label for="inputAddCiudad" class="col-sm-2 col-form-label">Ciudad<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="city" required placeholder="Ciudad" name="ciudad" type="text" class="form-control" id="inputAddCiudad">
            <div class="invalid-feedback">
              Por favor, escribe una ciudad.
            </div>  
          </div>
        </div>

 <div style="display: none" class="estado form-group row">
          <label for="inputAddEstado" class="col-sm-2 col-form-label">Estado</label>
          <div class="col-sm-10">
            <input id="state"  placeholder="Estado" name="estado" type="text" class="form-control">
            <div class="invalid-feedback">
              Por favor, escribe un estado.
            </div>  
          </div>
        </div>

 <div style="display: none" class="pais form-group row">
          <label for="inputAddPais" class="col-sm-2 col-form-label">País<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="country" required placeholder="País" name="pais" type="text" class="form-control">
            <div class="invalid-feedback">
              Por favor, escribe un país.
            </div>  
          </div>
        </div>
 <div style="display: none" class="url form-group row">
          <label for="inputAddUrl" class="col-sm-2 col-form-label">Url de la ubicación<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="url" required placeholder="Url de la ubicación" name="url" type="text" class="form-control">
            <div class="invalid-feedback">
              Por favor, escribe una url de la ubicación.
            </div>  
          </div>
        </div>

        <div class="form-group row">
                 <label for="inputHorario" class="col-sm-2 col-form-label">Horario<b style="color: red;">*</b></label>
                 <div class="col-sm-10">
                  <textarea class="area" required name="horario" id="inputHorario" style="height: 90%"></textarea><div class="invalid-feedback">
                                Por favor, escribe un horario.
                            </div>
                 </div>
        </div>

                       <!--  <div class="form-group row">
                            <label for="inputPrecio" class="col-sm-2 col-form-label">Precio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                             <textarea class="area" required name="precio" id="inputPrecio"  style="height: 90%"></textarea>
                             <div class="invalid-feedback">
                                Por favor, escribe un precio.
                            </div>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="inputDescuento" class="col-sm-2 col-form-label">Descuento<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                             <textarea class="area" required name="descuento" id="inputDescuento"  style="height: 90%"></textarea><div class="invalid-feedback">
                                Por favor, escribe los descuentos.
                            </div>
                            </div>
                        </div>--->


        <div class="modal-footer">
        <!--  <button type="button" onClick="window.location.reload();" id="cancelButton" class="btn btn-danger" data-dismiss="modal">Cancelar</button>-->
        <a href="{{url('eventos_abiertos')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>

          <button type="submit" class="btn btn-primary">Agregar Evento</button>      
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