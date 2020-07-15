@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Reseña del Evento Abierto</h2>                
                </div>

                <div class="card-body">

                     <form id="editarResena" action="{{ url('guardar_resena_abiertos', $evabierto[0]->id_evt_wrk) }}" method="POST">{{csrf_field()}} {{method_field('PUT')}}</form>
                    <form id="filesResena" action="{{ url('resena_eventos_abiertos_img')}}" enctype="multipart/form-data" method="POST"></form>

                        <div class="form-group row">
                            <label for="inputAddEvento" class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                                <input readonly name="tipo" placeholder="Abierto" type="text" class="form-control">  
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputAddEvento" class="col-sm-2 col-form-label">Evento</label>
                            <div class="col-sm-10">

                                <input readonly placeholder="" value="{{$miTaller[0]->nombreCurso}}" name="evento" type="text" class="form-control">
                            
                            </div>
                        </div>

                       <!-- <div class="form-group row">
                        <label for="inputAddCliente" class="col-sm-2 col-form-label">Cliente</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly name="cliente" type="text" placeholder="">
                        </div> 
                        </div>-->


                        <div class="form-group row">
                        <label for="initAdd-date-input" class="col-sm-2 col-form-label">Fecha de inicio</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{$evabierto[0]->start_date}}" name="fecha_inicial" readonly type="date">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="finAdd-date-input" class="col-sm-2 col-form-label">Fecha de finalización</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{$evabierto[0]->end_date}}" name="fecha_final" readonly type="date">
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="inputAddInstructor" class="col-sm-2 col-form-label">Instructor</label>
                        <div class="col-sm-10">
                            <select name="instructor" disabled class="form-control">
                            <option selected >{{$evabierto[0]->nombre_instructor}} {{$evabierto[0]->last_name}}</option>
                            </select>
                        </div>
                        </div>

                         <div class="form-group row">
                        <label for="inputResena" class="col-sm-2 col-form-label">Reseña<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input type="hidden" form="editarResena" value="{{ Auth::user()->id }}" name="modificationBy"/>
                            <textarea id="editor" form="editarResena" name="resena" class="form-control" rows="3">{!!$evabierto[0]->resena!!}</textarea>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputResena" class="col-sm-2 col-form-label">Fotos<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                        
                        @foreach ($imagenes as $images)
                        <div class="containerImages">
                        <img src="{!!asset($images->path)!!}" class="img-fluid shadow  bg-white rounded" alt="Responsive image">
                        <form action="{{route('admin.eliminar-imagenResena-abiertos', $images -> id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-xs ml-5"><i class="fa fa-trash"></i> Eliminar</button>
                        </form>
                        </div>
                        @endforeach

                        <input form="filesResena" type="hidden" name="_token" value="{{csrf_token()}}">
                        <input form="filesResena" type="hidden" value="{{ $evabierto[0]->id_evt_wrk }}" name="tallerID"/>
                            <span class="btn btn-default btn-file">
                                <input form="filesResena" id="input-abiertos" name="inputAbiertos[]" type="file" multiple data-min-file-count="1" data-max-file-count="3" data-show-upload="true" data-show-caption="true">
                            </span>                    
                        </div>

                        </div>
                        

                        <div class="form-group row">
                            <button form="editarResena" type="submit" class="m-2 btn btn-primary">Guardar reseña</button>
                            <a href="{{url('eventos_abiertos')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                        </div>

                    </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor');
</script>
@endsection
