@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Agregar Evento Privado</h2>                
                </div>
                <div class="card-body">
                    <form action="{{ url('add_eventos_privados')}}" method="POST" class="needs-validation" novalidate>

                        {{csrf_field()}}

                        <input type="hidden" value="{{ Auth::user()->id }}" name="createdBy"/>
                        
                        <div class="form-group row">
          <label for="inputAddEvento" class="col-sm-2 col-form-label">Evento<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input required placeholder="Evento" name="nombre" type="text" class="form-control" id="inputAddEvento">
            <div class="invalid-feedback">
              Por favor, escribe un evento.
            </div>  
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
          <label for="inputAddInstructor" class="col-sm-2 col-form-label">Instructor<b style="color: red;">*</b></label>
          <div class="col-sm-10">
              <select name="instructor" required class="form-control" id="inputAddInstructor">
                  <option value="" selected>Selecciona un instructor</option>

                  @foreach($show_instructors as $myInstructor)
                    <option value="{{$myInstructor->instructor_id}}">{{ $myInstructor->insName }} {{ $myInstructor->insApellido }}</option>
                  @endforeach

              </select>
              <div class="invalid-feedback">
                Por favor, selecciona un instructor.
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
        </div>

                        <div class="form-group row">
                            <button type="submit" class="m-2 btn btn-primary">Agregar evento</button>
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
