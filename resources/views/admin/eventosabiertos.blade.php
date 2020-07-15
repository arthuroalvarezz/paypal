
@extends('layouts.app3')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>




<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

<div style="display: flex; justify-content: space-between;">
<div style="margin-top: 40px; margin-bottom: 50px;">
<h2>Eventos Abiertos</h2>
</div>
<div>
<!--<button style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" type="button" class="btn"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar evento abierto</button>--->

<!-- <button style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" type="button" data-toggle="modal" data-target="#agregarEventoPrivado" class="btn"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar evento abierto</button>-->
  <a style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" type="button" href="{{url('agregar_eventos_abiertos')}}" class="btn"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar evento abierto</a>
</div>
</div>

  <table id="table_id" class="display responsive nowrap" width="100%">
    <thead style="background: #0B5394;">
        <tr style="color: white;">
            <th>Evento</th>
            <th>Tipo</th>
            <th>Inicio-Fin</th>
            <th>Ubicación</th>
            <th>Estado</th>
            <th>Instructor</th>
            <th>Modificado por</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            @foreach ($evabierto as $showabierto)
              @php

           setlocale(LC_TIME, 'es_MX.UTF-8');
          
           $end_date = strftime("%d %b %Y", strtotime($showabierto->end_date));
           $showabierto->end_date = $end_date;

           $start_date = strftime("%d %b %Y", strtotime($showabierto->start_date));
           $showabierto->start_date = $start_date;

          @endphp
        <tr>
            <td>{{$showabierto -> name}}</td>
            <td>{{$showabierto -> tipo}}</td>
            <td>{{$showabierto -> start_date}} - {{$showabierto -> end_date}}</td>
            <td>{{$showabierto -> city}} {{$showabierto -> state}} {{$showabierto -> country}}</td>
            <td>{{$showabierto -> status}}</td>
            <td>{{$showabierto -> nombre_instructor}} {{$showabierto -> last_name}}</td>
<?php if ($showabierto->fk_user_id==3): ?>
            <td>{{$showabierto -> created_at}} {{$showabierto -> emailCreation}}</td>
            <?php else: ?>
              <td>{{$showabierto -> updated_at}} {{$showabierto -> emailModification}}</td>
            <?php endif ?>
                        <td>
              <?php if ($showabierto->status=="Realizado"): ?>
              <a style="width: 100px" class="btn btn-success" href="{{route('admin.resena-eventos-abiertos', $showabierto -> id_evt_wrk)}}"><i class="far fa-file-alt"></i>  Reseña</a>
              <?php endif ?>
             <!-- <button style="width: 100px" class="btn btn-success"><i class="far fa-file-alt"></i> Reseña</button>-->
            </td>
            <td>
              <a href="{{route('admin.editar-eventos-abiertos', $showabierto -> id_evt_wrk)}}" style="width: 100px; color: white;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit"></i> Editar</a>


            </td>
          

            <td>
            <!------  <form action="" method="POST"  >
              {{csrf_field()}}
              {{method_field('DELETE')}}------->
            <!--  <button formaction="{{route('admin.eliminar-eventos-abiertos', $showabierto -> id_evt_wrk)}}" onclick="
return confirm('Estas seguro que deseas eliminar? ya no lo podras recuperar')" type="submit" style="width: 100px; color: white; float: right;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</button>-->



 <!--<a  style="width: 100px; color: white;" class="btn btn-danger" onclick="document.getElementById('id01').style.display='block'"><i style="color: white;" class="fa fa-trash"></i> Eliminar2si</a>--->

<!------ <a href="{{route('admin.eliminar_abiertos', $showabierto -> id_evt_wrk)}}" style=" color: white;float: right;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a>
              </form>
-->

        
             <a href="{{route('admin.eliminar_abiertos', $showabierto -> id_evt_wrk)}}" style="width: 100px; color: white;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a>


            


            </td>
        </tr>
          @endforeach
    </tbody>
</table>
<!--
            @foreach ($evabierto as $showabierto)

 <a  style="width: 100px; color: white;" class="btn btn-danger" onclick="document.getElementById('id01').style.display='block'"><i style="color: white;" class="fa fa-trash"></i> Eliminar2si</a>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="" method="POST"  >
              {{csrf_field()}}
              {{method_field('DELETE')}}
    <div class="container">
      <h1>El evento se eliminara</h1>
      <p>Estas seguro?</p>
    
      <div class="clearfix">
        <a  type="button" class="btn btn-primary" href="{{url('eventos_abiertos')}}" class="cancelbtn">Cancel</a>
        <button formaction="{{route('admin.eliminar-eventos-abiertos', $showabierto -> id_evt_wrk)}}"  type="submit" style="width: 100px; color: white; float: right;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</button>
     <!--  {!! Form::open(['method' => 'DELETE','route' => ['admin.eliminar-eventos-abiertos', $showabierto -> id_evt_wrk],'style'=>'display:inline']) !!}            <button class="btn btn-danger" id="delete">Delete3</button>
              {!! Form::close() !!}-->
<!--      </div>
    </div>
  </form>
</div>
          @endforeach
-->



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<style>


/* Set a style for all buttons */
.botoneliminar {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}



.botoneliminar:hover {
  opacity:1;
}


/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
    color: white;
  width: 50%;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
    cursor: pointer;

   opacity: 0.9;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
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

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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
<body>








</div>


                       <!--     <button class="btn btn-success" onclick="pregunta()">Pulsar pregunta</button>
<script>
function pregunta()
{
if(confirm("Esta seguro"))
  document.getElementById("demo").innerHTML = "Hello World";
else
document.location.href="{{url('eventos_abiertos')}}";
}
</script>

              <button onclick="mensaje()">Pulsar</button>




<p id="demo"></p>
<button type="button" class="btn btn-danger btn-sm delete">hhh<i class="la la-small la-trash"></i></button>


<script type="text/javascript">
  $('.delete').on('click', function() {

        swal({
          title: "¿Desea eliminar el usuario?",
          text: "",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Si!!",
          cancelButtonText: "No!!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {

            swal({
                title:'¡El usuario será eliminado!',
                text: '',
                type: 'success'
            }, 
            function() {
              $("#myform").submit();
            });

          } else {

            swal("Cancelled", "El usuario no será eliminado!!", "error");

          }
        });

    })

</script>

       

       @foreach ($evabierto as $showabierto)
        <tr>
          <td></td>
          <td>
{!! Form::open(['method' => 'DELETE','route' => ['admin.eliminar-eventos-abiertos', $showabierto -> id_evt_wrk],'style'=>'display:inline']) !!}            <button class="btn btn-danger" id="delete">Delete3</button>
              {!! Form::close() !!}
           </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<script type="text/javascript">
      $('button#delete').on('click', function(){
            swal({
              title             : "Are you sure?",
              text              : "You will not be able to recover this Album!",
              type              : "warning",
              showCancelButton  : true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText : "Yes, delete it!",
              cancelBUttonText  : "No, Cancel delete!",
              closeOnConfirm    : false,
              closeOnCancel     : false
            },
      function(isConfirm){
        if(isConfirm){
          swal("Deleted!","your album has been deleted", "success");
          $("#delete_form").submit();
        }
        else{
          swal("cancelled","Your album is safe", "error");
        }
      }
);});
</script>-->
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