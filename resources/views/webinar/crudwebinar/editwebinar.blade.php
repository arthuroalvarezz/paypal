@extends('layouts.app3')

@section('content')


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Webinar</h2>                
                </div>
                <div class="card-body">
                    <form action="{{ url('guardarwebinar', $mostrar->webinar_id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <input type="hidden" value="{{ Auth::user()->id }}" name="modificationBy"/>

                   <div class="form-group row">
                        <label for="inputEditTaller" class="col-sm-2 col-form-label">Nombre del webinar<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="inputName" type="text" required id="fff" value="{{$mostrar->nombre}}" placeholder="Taller"><!----name = update--->
                            <div class="invalid-feedback">
                            Por favor, escribe el nombre de una taller.
                            </div>
                        </div> 
                        </div>



                        <div class="form-group row">
                        <label for="inputEditDuration" class="col-sm-2 col-form-label">Fecha<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="inputTime" required id="inputEditDuration" value="{{$mostrar->time}}" placeholder="Duración">
                            <div class="invalid-feedback">
                            Por favor, escribe la duración.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputEditSecuencia" class="col-sm-2 col-form-label">Horarios<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="inputHorario" required id="inputEditSecuencia" value="{!!$mostrar->descripcion!!}" placeholder="Secuencia">
                            <div class="invalid-feedback">
                            Por favor, escribe un número de secuencia.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEditUrl" class="col-sm-2 col-form-label">Temas<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="urlEdit" required value="{!!$mostrar->temas!!}" placeholder="Url del taller" name="inputTemas" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputFotoEditPrincipal" class="col-sm-2 col-form-label">Foto principal<b style="color: red;">*</b></label>
                            <div class="col-sm-10">

                              <div class="containerImages">
                                 <img src="{!!asset($mostrar->img)!!}" class="img-fluid shadow  bg-white rounded" alt="Responsive image">
                              </div>
                            
                            <div class="custom-file">
                                <input type="file" name="inputEdit" class="custom-file-input" id="inputGroupFile02Edit"/>
                                <label class="custom-file-label" for="inputGroupFile02Edit">Seleccionar Archivo</label>
                                <span class="custom-file-control"></span>
                                <div class="invalid-feedback">
                                    Por favor, selecciona una imagen.
                                </div>
                            </div>
                            </div>
                        </div>

                    
                     <div class="form-group row">
                            <label for="inputEditUrl" class="col-sm-2 col-form-label">Enlace zoom<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="urlEdit" required value="{{$mostrar->enlace}}" placeholder="Url del taller" name="inputEnlace" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>
                   
                     <div class="form-group row">
                            <label for="inputEditUrl" class="col-sm-2 col-form-label">Botongoogle<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="urlEdit" required value="{{$mostrar->botongoogle}}" placeholder="Url del taller" name="inputBoton" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="inputEditUrl" class="col-sm-2 col-form-label">Slug<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="urlEdit" required value="{{$mostrar->slug}}" placeholder="Url del taller" name="inputSlug" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>

                

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Guardar</button>
                            <a href="" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection