@extends('layouts.app3')

@section('content')


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

<div style="display: flex; justify-content: space-between;">
<div style="margin-top: 40px; margin-bottom: 50px;">
<h2>Webinarios</h2>

</div>
<div>
<a class="btn" style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" href=""><i style="color: white;" class="fas fa-plus-circle"></i> Agregar webinar</a>
</div>
</div>

  <table id="table_workshops" class="display responsive nowrap" width="100%">
    <thead style="background: #0B5394;">
        <tr style="color: white;">
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Horarios</th> 
      
            <th>enlace zoom</th>
            <th style="background-image: none;"></th>
            <th></th>
              <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($webinarinfo as $row)
        <tr>
            <td>{{$row->nombre}}</td>
            <td>{{$row->time}}</td>
            <td>{!!$row->descripcion!!}</td>
        
            <td style="text-align: center;">
              {!!$row->enlace!!}
            </td>
              <td style="">
           
            </td>
            <td>
              <a href="" style="width: 100px; color: white;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit"></i> Editar</a>
             <!-- <a href="{{route('webinar.crudwebinar.editwebinar', $row -> webinar_id)}}" style="width: 100px; color: white;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit"></i> Editar</a>-->
            </td>
            <td>
                <a href="" style="width: 100px; color: white;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a> 

            </td>
        </tr>
   @endforeach
    </tbody>
</table>

</div>





@endsection