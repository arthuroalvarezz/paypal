@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Evento Privado</h2>                
                </div>
                <div class="card-body">
                    <form action="{{ url('eventos_privados', $private_event_edit->eventsprivate_id) }}" method="POST" class="needs-validation" novalidate>

                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <input type="hidden" value="{{ Auth::user()->id }}" name="modificationBy"/>
                        
                        <div class="form-group row">
                            <label for="inputEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input class="form-control" required name="inputEvento" id="inputEvento" value="{{$private_event_edit->name}}" placeholder="Evento">
                            <div class="invalid-feedback">
                                Por favor, escribe un evento.
                            </div>
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
                            <label for="inputCliente" class="col-sm-2 col-form-label">Cliente<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input class="form-control" required name="inputCliente" id="inputCliente" value="{{$private_event_edit->client}}" placeholder="Cliente">
                            <div class="invalid-feedback">
                                Por favor, escribe un cliente.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDuracion" class="col-sm-2 col-form-label">Duración<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input class="form-control" required name="inputDuracion" id="inputDuracion" value="{{$private_event_edit->duration}}" placeholder="Duración">
                            <div class="invalid-feedback">
                                Por favor, escribe una duración.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="init-date-input" class="col-sm-2 col-form-label">Fecha de inicio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" required name="init-date-input" value="{{$private_event_edit->start_date}}" type="date" id="init-date-input">
                                <div class="invalid-feedback">
                                    Por favor, escribe una fecha de inicio.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fin-date-input" class="col-sm-2 col-form-label">Fecha de finalización<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" required name="fin-date-input" value="{{$private_event_edit->end_date}}" type="date" id="fin-date-input">
                                <div class="invalid-feedback">
                                    Por favor, escribe una fecha de fin.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputInstructor" class="col-sm-2 col-form-label">Instructor<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="inputInstructor" id="inputInstructor">
                                    <option value="{{$instructor[0]->instructor_id}}" selected >{{$instructor[0]->myName}} {{$instructor[0]->myLast}}</option>

                                    @foreach($instructors as $instructor)
                                        <option value="{{$instructor->instructor_id}}">{{ $instructor->nombre_instructor }} {{ $instructor->lastName_instructor }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-2 col-form-label">Estatus<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="inputStatus" id="inputStatus">
                                  <option selected >{{$estatus[0]->status}}</option>
                                  <?php if ($estatus[0]->status!=="Disponible"): ?>
                                    <option value="Disponible">Disponible</option>
                                    <?php endif ?>
                                    <?php if ($estatus[0]->status!=="Realizado"): ?>
                                    <option value="Realizado">Realizado</option>
                                    <?php endif ?>
                                    <?php if ($estatus[0]->status!=="Cancelado"): ?>
                                    <option value="Cancelado">Cancelado</option>
                                    <?php endif ?>
                                    <?php if ($estatus[0]->status!=="Cupo lleno"): ?>
                                    <option value="Cupo lleno">Cupo lleno</option>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Ubicación</b></label>
                        </div>

                        <div class="form-group row">
                            <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input class="form-control" required name="inputCiudad" id="inputCiudad" value="{{$private_event_edit->city}}" placeholder="Ciudad">
                            <div class="invalid-feedback">
                                Por favor, escribe una ciudad.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEstado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                            <input class="form-control" name="inputEstado" id="inputEstado" value="{{$private_event_edit->state}}" placeholder="Estado">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPais" class="col-sm-2 col-form-label">País<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input class="form-control" required name="inputPais" id="inputPais" value="{{$private_event_edit->country}}" placeholder="País">
                            <div class="invalid-feedback">
                                Por favor, escribe una país.
                            </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Bitácora</b></label>
                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Modificación evento: </b></label>
                            <label class="col-sm-12 col-form-label">{{$private_event_edit -> updated_at}}</label>
                            @foreach ($modifico as $modifica)
                                <label class="col-sm-12 col-form-label"> {{ $modifica -> email }}</label>
                            @endforeach                            
                            </div>
                            <div class="col-sm-5">
                            <label class="col-sm-12 col-form-label"><b>Creación evento: </b></label>
                            <label class="col-sm-12 col-form-label">{{$private_event_edit -> created_at}}</label>
                            @foreach ($creo as $crea)
                                <label class="col-sm-12 col-form-label"> {{ $crea -> email }}</label>
                            @endforeach 
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Guardar</button>
                            <a href="{{url('eventos_privados')}}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
