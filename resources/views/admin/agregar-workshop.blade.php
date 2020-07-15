@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Agregar Taller</h2>                
                </div>
                <div class="card-body">
                    <form action="{{ url('agregar_taller')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                        {{csrf_field()}}

                        <input type="hidden" value="{{ Auth::user()->id }}" name="createdBy"/>
                        
                        <div class="form-group row">
                        <label for="inputAddPartner" class="col-sm-2 col-form-label">Partner<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <select name="partner" required class="form-control" id="inputAddPartner">
                                <option value="" selected>Selecciona un partner</option>

                                @foreach($show_partners as $partner)
                                    <option value="{{$partner->partner_id}}">{{ $partner->partnerName }}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Por favor, selecciona un partner.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputAddTaller" class="col-sm-2 col-form-label">Nombre del taller<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="taller" type="text" required id="inputAddWorkshop" placeholder="Taller">
                            <div class="invalid-feedback">
                            Por favor, escribe el nombre de una taller.
                            </div>
                        </div> 
                        </div>


                        <div class="form-group row">
                        <label for="inputAddSubtitulo" class="col-sm-2 col-form-label">Subtítulo</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="subtitulo" id="inputAddSubtitulo" placeholder="Subtítulo">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputAddDuration" class="col-sm-2 col-form-label">Duración<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="duration" required id="inputAddDuration" placeholder="Duración">
                            <div class="invalid-feedback">
                            Por favor, escribe la duración.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputAddSecuencia" class="col-sm-2 col-form-label">Secuencia<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="secuencia" required id="inputAddSecuencia" placeholder="Secuencia">
                            <div class="invalid-feedback">
                            Por favor, escribe un número de secuencia.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputAddUrl" class="col-sm-2 col-form-label">Url<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="url" required placeholder="Url del taller" name="url" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="descripcion" class="editor" required name="descripcion" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputParaQUien" class="col-sm-2 col-form-label">Para quién es<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="forwho" required name="forwho" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe para quién es el taller.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputRecibir" class="col-sm-2 col-form-label">Qué recibiré<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="recibir" required name="recibir" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe lo que el participante recibirá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputBenefits" class="col-sm-2 col-form-label">Cuáles serán mis beneficios<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="benefits" required name="benefits" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe los beneficios que el participante recibirá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputSchedule" class="col-sm-2 col-form-label">Cuál es la agenda<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="schedule" required name="schedule" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe la agenda del taller.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputLearning" class="col-sm-2 col-form-label">Qué aprenderé<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="learning" required name="learning" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe lo que el participante aprenderá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputModalidad" class="col-sm-2 col-form-label">Modalidad<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="modalidad" required name="modalidad" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe la modalidad.
                            </div> 
                        </div>

                        

                        <div class="form-group row">
                            <label for="inputAddEstado" class="col-sm-2 col-form-label">Estado<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select name="estatus" required class="form-control" id="inputAddEstado">
                                    <option value="" selected>Selecciona el estado del taller</option>
                                    <option value="Si">Activo</option>
                                    <option value="No">Inactivo</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, selecciona un estado.
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="inputFotoPrincipal" class="col-sm-2 col-form-label">Foto principal<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            
                            <div class="custom-file">
                                <input type="file" name="input" class="custom-file-input" required id="inputGroupFile02"/>
                                <label class="custom-file-label" for="inputGroupFile02">Seleccionar Archivo</label>
                                <span class="custom-file-control"></span>
                                <div class="invalid-feedback">
                                    Por favor, selecciona una imagen.
                                </div>
                            </div>
                            </div>
                            
                        </div>


                        <div style="margin-top:20px; " class="form-group row">
                            <label for="inputAddPrincipal" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <label><b>IMPORTANTE</b> Considera que comprimir la imagen del taller para que pese menos y esto lo puedes hacer en Compress: <a href="https://compressjpeg.com/es/" target="_blank">https://compressjpeg.com/es/</a></label>
                            </div> 
                        </div>   
                        
                        <div class="form-group row">
                            <label for="inputFotoTaller" class="col-sm-2 col-form-label">Foto del taller</label>
                            <div class="col-sm-10">
                            
                            <div class="custom-file">
                                <input type="file" name="inputTalleres" class="custom-file-input" id="inputGroupFile01"/>
                                <label class="custom-file-label" for="inputGroupFile01">Seleccionar Archivo</label>
                                <span class="custom-file-control"></span>
                            </div>
                            </div>
                             
                        </div>


                        <div style="margin-top:20px;" class="form-group row">
                            <label for="inputAddTaller" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <label><b>IMPORTANTE</b> Considera que comprimir la imagen del taller para que pese menos y esto lo puedes hacer en Compress: <a href="https://compressjpeg.com/es/" target="_blank">https://compressjpeg.com/es/</a></label>
                            </div> 
                        </div>
                           

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Agregar Taller</button>
                            <a href="{{url('talleres')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

  

@endsection
