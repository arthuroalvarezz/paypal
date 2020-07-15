@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Taller</h2>                
                </div>
                <div class="card-body">
                    <form action="{{ url('workshop_save_edit', $workshop_edit->workshop_id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <input type="hidden" value="{{ Auth::user()->id }}" name="modificationBy"/>

                        <div class="form-group row">
                        <label for="inputEditPartner" class="col-sm-2 col-form-label">Partner<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <select name="partnerEdit" required class="form-control" id="inputEditPartner">
                                <option value="{{$show_partners[0]->partner_id}}" selected>{{$show_partners[0]->partnerName}}</option>

                                @foreach($show_Allpartners as $partner)
                                    <option value="{{$partner->partner_id}}">{{ $partner->partnerName }}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Por favor, selecciona un partner.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputEditTaller" class="col-sm-2 col-form-label">Nombre del taller<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="tallerEdit" type="text" required id="inputEditWorkshop" value="{{$workshop_edit->name}}" placeholder="Taller">
                            <div class="invalid-feedback">
                            Por favor, escribe el nombre de una taller.
                            </div>
                        </div> 
                        </div>


                        <div class="form-group row">
                        <label for="inputEditSubtitulo" class="col-sm-2 col-form-label">Subtítulo</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="subtituloEdit" id="inputEditSubtitulo" value="{{$workshop_edit->subtitulo}}" placeholder="Subtítulo">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputEditDuration" class="col-sm-2 col-form-label">Duración<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="durationEdit" required id="inputEditDuration" value="{{$workshop_edit->duration}}" placeholder="Duración">
                            <div class="invalid-feedback">
                            Por favor, escribe la duración.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="inputEditSecuencia" class="col-sm-2 col-form-label">Secuencia<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="secuenciaEdit" required id="inputEditSecuencia" value="{{$workshop_edit->order_workshop}}" placeholder="Secuencia">
                            <div class="invalid-feedback">
                            Por favor, escribe un número de secuencia.
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEditUrl" class="col-sm-2 col-form-label">Url<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input id="urlEdit" required value="{{$workshop_edit->slug}}" placeholder="Url del taller" name="urlEdit" type="text" class="form-control">
                                <div class="invalid-feedback">
                                Por favor, escribe una url.
                                </div>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEditDescripcion" class="col-sm-2 col-form-label">Descripción<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="descripcion" class="editor" required name="descripcion" class="form-control" rows="3">{!!$workshop_edit->description!!}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEditParaQUien" class="col-sm-2 col-form-label">Para quién es<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="forwho" required name="forwho" class="form-control" rows="3">{!!$workshop_edit->audience!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe para quién es el taller.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputEditRecibir" class="col-sm-2 col-form-label">Qué recibiré<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="recibir" required name="recibir" class="form-control" rows="3">{!!$workshop_edit->what_include!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe lo que el participante recibirá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputEditBenefits" class="col-sm-2 col-form-label">Cuáles serán mis beneficios<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="benefits" required name="benefits" class="form-control" rows="3">{!!$workshop_edit->benefits!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe los beneficios que el participante recibirá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputEditSchedule" class="col-sm-2 col-form-label">Cuál es la agenda<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="schedule" required name="schedule" class="form-control" rows="3">{!!$workshop_edit->agenda!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe la agenda del taller.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputEditLearning" class="col-sm-2 col-form-label">Qué aprenderé<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="learning" required name="learning" class="form-control" rows="3">{!!$workshop_edit->goals!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe lo que el participante aprenderá.
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="inputEditModalidad" class="col-sm-2 col-form-label">Modalidad<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <textarea id="modalidad" required name="modalidad" class="form-control" rows="3">{!!$workshop_edit->modalidad!!}</textarea>
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escribe la modalidad.
                            </div> 
                        </div>

                        

                        <div class="form-group row">
                            <label for="inputEditEstado" class="col-sm-2 col-form-label">Estado<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select name="estatusEdit" required class="form-control" id="inputEditEstado">
                                    <?php if ($workshop_edit->Activo=="Si"): ?>
                                        <option value="Si" selected>Activo</option>
                                        <option value="No">Inactivo</option>
                                    <?php else: ?>
                                        <option value="No" selected>Inactivo</option>
                                        <option value="Si">Activo</option>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, selecciona un estado.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputFotoEditPrincipal" class="col-sm-2 col-form-label">Foto principal<b style="color: red;">*</b></label>
                            <div class="col-sm-10">

                            <div class="containerImages">
                                <img src="{!!asset($workshop_edit->img_main)!!}" class="img-fluid shadow  bg-white rounded" alt="Responsive image">
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

                        <div style="margin-top:20px; " class="form-group row">
                            <label for="inputEditPrincipal" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <label><b>IMPORTANTE</b> Considera que comprimir la imagen del taller para que pese menos y esto lo puedes hacer en Compress: <a href="https://compressjpeg.com/es/" target="_blank">https://compressjpeg.com/es/</a></label>
                            </div> 
                        </div> 

                        <div class="form-group row">
                            <label for="inputFotoTaller" class="col-sm-2 col-form-label">Foto del taller</label>
                            <div class="col-sm-10">

                            <div class="containerImages2">
                                <img src="{!!asset($workshop_edit->img)!!}" class="img-fluid shadow bg-white rounded" alt="Responsive image">
                            </div>
                            
                            <div class="custom-file">
                                <input type="file" name="inputTalleresEdit" class="custom-file-input" id="inputGroupFile01Edit"/>
                                <label class="custom-file-label" for="inputGroupFile01Edit">Seleccionar Archivo</label>
                                <span class="custom-file-control"></span>
                            </div>
                            </div>
                             
                        </div>


                        <div style="margin-top:20px;" class="form-group row">
                            <label for="inputEditTaller" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <label><b>IMPORTANTE</b> Considera que comprimir la imagen del taller para que pese menos y esto lo puedes hacer en Compress: <a href="https://compressjpeg.com/es/" target="_blank">https://compressjpeg.com/es/</a></label>
                            </div> 
                        </div>

                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Bitácora</b></label>
                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Modificación taller: </b></label>
                            <label class="col-sm-12 col-form-label">{{$workshop_edit -> updated_at}}</label>
                            @foreach ($modifico as $modifica)
                                <label class="col-sm-12 col-form-label"> {{ $modifica -> email }}</label>
                            @endforeach                            
                            </div>
                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Creación taller: </b></label>
                            <label class="col-sm-12 col-form-label">{{$workshop_edit -> created_at}}</label>
                            @foreach ($creo as $crea)
                                <label class="col-sm-12 col-form-label"> {{ $crea -> email }}</label>
                            @endforeach 
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Guardar</button>
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
