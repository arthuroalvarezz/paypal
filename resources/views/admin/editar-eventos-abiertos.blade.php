@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Evento Abierto</h2>
                </div>
                    @foreach ($evabierto as $row3)
                 
                <div class="card-body">
                    <form action="{{url('eventos_abiertos', $row3 -> id_evt_wrk)}}" method="POST" class="needs-validation" novalidate>
                            {{csrf_field()}}
                        {{method_field('PUT')}}
                        
                        <input type="hidden" value="{{ Auth::user()->id }}" name="modificationBy"/>
                        <div class="form-group row">
                            <label for="inputEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select id="inputEvento" name="inputEvento" class="form-control" id="">

                                    <option value="{{$miTaller[0]->id_workshop}}" selected >{{$miTaller[0]->nombreCurso}}</option>

                                    @foreach($todosTalleres as $talleres)
                                        <option value="{{$talleres->workshop_id}}">{{ $talleres->nombreTodosCurso }}</option>
                                    @endforeach
                                    


                                </select>
                            </div>
                        </div>

             

                        

                        <div class="form-group row">
                            <label for="inputAddModalidad" class="col-sm-2 col-form-label">Modalidad<b style="color: red;">*</b></label>
                       <div class="col-sm-10">
                       <select class="form-control" name="inputAddModalidad" id="inputAddModalidad">
                       <option  selected>{{$Modo[0]->modalidad}}</option>
                      <?php if ($Modo[0]->modalidad!=="Presencial"): ?>
                                    <option value="Presencial">Presencial</option>
                                    <?php endif ?>
                       <?php if ($Modo[0]->modalidad!=="Live Streaming"): ?>
                                    <option value="Live Streaming">Live Streaming</option>
                                    <?php endif ?>
                      <!-- <option value="Live Streaming">Live Streaming</option>--->
                       </select>
                      <div class="invalid-feedback">
                     Por favor, selecciona una modalidad.
                    </div>
                    </div>
                     </div>

                     
                        <div class="form-group row">
                            <label for="init-date-input" class="col-sm-2 col-form-label">Fecha de inicio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" required type="date" name="init-date-input" id="init-date-input" value="{{$row3->start_date}}">
                            </div>
                            <div class="invalid-feedback">
                                    Por favor, escribe una fecha de inicio.
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fin-date-input" class="col-sm-2 col-form-label">Fecha de finalización<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" required type="date" name="fin-date-input" id="fin-date-input" value="{{$row3->end_date}}">
                                <div class="invalid-feedback">
                                    Por favor, escribe una fecha de fin.
                                </div>
                            </div>
                        </div>
                       
                       <div class="form-group row">
                            <label for="inputInstructor" class="col-sm-2 col-form-label">Instructor<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="inputInstructor" id="inputInstructor">

                                    <option value="{{$evabierto[0]->instructor_id}}" selected >{{$evabierto[0]->nombre_instructor}} {{$evabierto[0]->last_name}}</option>
                                    <option value="9">Sin instructor</option>
                                    @foreach($instructors as $instructor)
                                    @if($instructor->instructor_id != "9") 
                                        <option value="{{$instructor->instructor_id}}">{{ $instructor->nombre_instructor }} {{ $instructor->lastName_instructor }}</option>
                                        @endif
                                    @endforeach
                                    


                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-2 col-form-label">Estatus<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="inputStatus" id="inputStatus">
                                
                                    <option selected >{{$evabierto[0]->status}}</option>
                                     <?php if ($evabierto[0]->status!=="Disponible"): ?>
                                    <option value="Disponible">Disponible</option>
                                    <?php endif ?>
                                     <?php if ($evabierto[0]->status!=="Realizado"): ?>
                                    <option value="Realizado">Realizado</option>
                                    <?php endif ?>
                                     <?php if ($evabierto[0]->status!=="Cancelado"): ?>                                    
                                    <option value="Cancelado">Cancelado</option>                                                             <?php endif ?>
                                     <?php if ($evabierto[0]->status!=="Cupo lleno"): ?>
                                    <option value="Cupo lleno">Cupo lleno</option>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Ubicación</b></label>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Calle<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputCalle" placeholder="Calle" value="{{$row3->street}}">
                            <div class="invalid-feedback">
                                Por favor, escribe una calle.
                            </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" required class="form-control" id="inputCiudad" name="inputCiudad" placeholder="Ciudad" value="{{$row3->city}}">
                            <div class="invalid-feedback">
                                Por favor, escribe una ciudad.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEstado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="inputEstado" name="inputEstado" placeholder="Estado" value="{{$row3->state}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPais" class="col-sm-2 col-form-label">País<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputPais" name="inputPais" value="{{$row3->country}}" placeholder="País">
                            <div class="invalid-feedback">
                                Por favor, escribe un país.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputUrl" class="col-sm-2 col-form-label">Url de Ubicación<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputUrl" name="inputUrl" value="{{$row3->maps}}" placeholder="Url de Ubicación">
                            <div class="invalid-feedback">
                                Por favor, escribe una URL.
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHorario" class="col-sm-2 col-form-label">Horario<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                             <textarea value="{{$row3->time}}" class="area" required name="inputHorario" id="inputHorario" style="height: 90%">  {{$row3->time}}</textarea>
                             <div class="invalid-feedback">
                                Por favor, escribe un horario.
                            </div>
                            <br>
                            <br>
                            </div>
                        </div>

                         <!--  <div class="form-group row">
                            <label for="inputPrecio" class="col-sm-2 col-form-label">Precio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                             <textarea class="area" required name="inputPrecio" id="inputPrecio"  style="height: 90%">{{$row3->price}}</textarea>
                             <div class="invalid-feedback">
                                Por favor, escribe un precio.
                            </div>
                            <br>
                            <br>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputDescuento" class="col-sm-2 col-form-label">Descuento<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                             <textarea class="area" required name="inputDescuento" id="inputDescuento"  style="height: 90%">{{$row3->discount}}</textarea>
                             <div class="invalid-feedback">
                                Por favor, escribe los descuentos.
                            </div>
                            <br>
                            <br>
                            </div>
                        </div>-->

                              
                  
            
            @foreach($content as $contenido)
   @php 
                                  setlocale(LC_TIME, 'es_MX.UTF-8');
                                  $vigencia_ini = strftime("%d %b %Y", strtotime($contenido->vigencia_ini));
                                  $contenido->vigencia_ini = $vigencia_ini; 

                                   $vigencia_fin = strftime("%d %b %Y", strtotime($contenido->vigencia_fin));
                                  $contenido->vigencia_fin = $vigencia_fin; 
                                @endphp  
                                

    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Precios y Descuentos<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{ $contenido->descripcion }} ${{ number_format($contenido->preciomx, 2) }} MXN / ${{ number_format($contenido->preciousd, 2) }} USD (Vigente al {{ $contenido->vigencia_fin }}) {{ $contenido->tipo }} " name="fecha_inicial" readonly type="">
                        </div>
                        </div>

                        <div class="form-group row" style="margin-top: -3.2%">
                           <label for="" class="col-sm-2 col-form-label" ></label>
                              <div class="col-sm-10">
                              
                                
<!--<a href="{{route('admin.editar-precios', $contenido->precios_id)}}" style="width: 100px; color: white;float: right;" class="btn btn-success"><i style="color: white;" class="fa fa-edit"></i> crear</a> 

<a href="{{route('admin.editar-precios', $contenido->precios_id)}}" style="width: 150px; color: white;float: right;" class="btn btn-danger"><i style="color: white;" class="fa fa-edit"></i> eliminar</a>

-->
<!--<input type="submit" src="/sitio.com/mipagina.php" value="enviar" /> 

 <a type="submit" href="{{route('admin.editar-precios', $contenido->precios_id)}}" style="width: 100px; color: white;float: right;" class="btn btn-primary">ddd</a>
<input type ='submit' value = 'textoboton' onclick="window.open('../editarprecio/{{$contenido->precios_id}}', 'width=800,height=600');"/>
-->
<!--<input type ='button' value = 'texto boton' onclick="window.open('../editarprecio/1', 'width=800,height=600');"/>

<input type="submit" name="button" id="button" value="Más Info2"
 onclick="location.href = 'loquesea.html' ">

<input type="submit" name="button" id="../open_event_edit/2" value="Más Info"
 onclick="location.href = '../open_event_edit' ">-->

      
<a href="{{route('admin.eliminar_precio', $contenido->precios_id)}}" style="width: 110px; color: white;float: right;border-radius: -22%" class="btn btn-danger"><i style="color: white;" class="fa fa-trash "></i> Eliminar</a>


              <a href="{{route('admin.editar-precios', $contenido->precios_id)}}" style="width: 100px; color: white;float: right;margin-right: 2%;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit "></i> Editar</a>

         
                                 
                                    
                              </div>
                        </div>

            @endforeach

<a href="{{ url('/agregar_precio/'.$row3 -> id_evt_wrk) }}" style="width: 160px; color: white;float: right;" class="btn btn-success"><i style="color: white;" class="fa fa-edit"></i> Agregar precio</a>
            <!--   <a href="{{route('admin.agregar-precio', $row3 -> id_evt_wrk)}}" style="width: 100px; color: white;float: right;" class="btn btn-success"><i style="color: white;" class="fa fa-edit"></i> crear</a> -->
                        <br> <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Bitácora</b></label>
                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Modificación evento: </b></label>
                            <label class="col-sm-12 col-form-label">{{$public_event_edit -> updated_at}}</label>
                            @foreach ($modifico as $modifica)
                                <label class="col-sm-12 col-form-label"> {{ $modifica -> email }}</label>
                            @endforeach                            
                            </div>
                           

                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Creación evento: </b></label>
                            <label class="col-sm-12 col-form-label">{{$public_event_edit -> created_at}}</label>
                            @foreach ($creo as $crea)
                                <label class="col-sm-12 col-form-label"> {{ $crea -> email }}</label>
                            @endforeach 
                            </div>


                        </div>
                            

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Guardar</button>
                            <a href="{{url('eventos_abiertos')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>--------->

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
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

@endsection
