
@extends('layouts.app3')

@section('content')
<link rel = "icon" href = "{{asset('/images/logo.ico')}}" type = "image/x-icon"> 
<body style="background-color: gray">

  <a href="{{url('eventos_abiertos')}}"  class="close" title="Close Modal">×</a>
  <form class="modal-content" action="" method="POST" style="background-color: #eeeeee"  >
              {{csrf_field()}}
              {{method_field('DELETE')}}

    <div class="container">
      <h1 class="mb-3" style="color: #313131">¿Deseas eliminar el precio <b style="color: #2d6aa2;"> </b> ?</h1>  
      <div class="clearfix">


    @foreach($variableprecio as $precioeliminar)
       @php 
                                  setlocale(LC_TIME, 'es_MX.UTF-8');
                                  $vigencia_ini = strftime("%d %b %Y", strtotime($precioeliminar->vigencia_ini));
                                  $precioeliminar->vigencia_ini = $vigencia_ini; 

                                   $vigencia_fin = strftime("%d %b %Y", strtotime($precioeliminar->vigencia_fin));
                                  $precioeliminar->vigencia_fin = $vigencia_fin; 
                                @endphp  
   

      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Precios y Descuentos<b style="color: red;">*</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{ $precioeliminar->descripcion }} ${{ number_format($precioeliminar->preciomx, 2) }} MXN / ${{ number_format($precioeliminar->preciousd, 2) }} USD (Vigente al {{ $precioeliminar->vigencia_fin }}) {{ $precioeliminar->tipo }} " name="fecha_inicial" readonly type="">
                        </div>
                        </div>




       <!-- <a  type="button" class="btn btn-primary" href="{{url('eventos_abiertos')}}" class="cancelbtn">Cancel</a>-->
        <button formaction="{{route('admin.eliminar-precios', $precioeliminar -> precios_id)}}"  type="submit" class="btn btn-danger btn-lg mr-5"> Eliminar</button>
          <a class="btn-primary btn" style="font-size: 1.25rem;" href="../open_event_edit/{!!$precioeliminar->fk_id_precios!!}"> Cancelar</a>


       
        @endforeach

      <!--  <button  class="deletebtn">Delete</button>-->
   
      </div>
    </div>
  </form>
@endsection

</body>
<style>


/* Add padding and center-align text to the container */
.container {
  padding: 10%;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>