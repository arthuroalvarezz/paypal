@extends('layouts.app3')

@section('content')


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

<div style="display: flex; justify-content: space-between;">
<div style="margin-top: 40px; margin-bottom: 50px;">
<h2>Eventos Privados</h2>

</div>
<div>
<a class="btn" style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" href="{{route('admin.agregar-eventos-privados')}}"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar evento privado</a>
 <!--<button href="" style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" type="button" class="btn"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar evento privado</button>-->
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
    @foreach ($private_event as $row)

    @php

    setlocale(LC_TIME, 'es_MX.UTF-8');
    $start_date = strftime("%d %b %Y", strtotime($row->start_date));
    $row->start_date = $start_date; 
    $end_date = strftime("%d %b %Y", strtotime($row->end_date));
    $row->end_date = $end_date;

    @endphp

        <tr>
            <td>{{$row -> name}}</td>
            <td>{{$row -> tipo}}</td>
            <td>{{$row -> start_date}} - {{$row -> end_date}}</td>
            <td>{{$row -> city}} {{$row -> state}} {{$row -> country}}</td>
            <td>{{$row -> status}}</td>
            <td>{{$row -> nombre_instructor}} {{$row -> last_name}}</td>
            <?php if ($row->fk_id_user==3): ?>
            <td>{{$row -> created_at}} {{$row -> emailCreation}}</td>
            <?php else: ?>
              <td>{{$row -> updated_at}} {{$row -> emailModification}}</td>
            <?php endif ?>
            <td>
              <?php if ($row->status=="Realizado"): ?>
              <a style="width: 100px" class="btn btn-success" href="{{route('admin.resena-eventos-privados', $row -> eventsprivate_id)}}"><i class="far fa-file-alt"></i>  Reseña</a>
              <?php endif ?>
            </td>
            <td>
              <a href="{{route('admin.editar-eventos-privados', $row -> eventsprivate_id)}}" style="width: 100px; color: white;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit"></i> Editar</a>
            </td>
            <td>
                <a href="{{route('admin.eliminar_privados', $row -> eventsprivate_id)}}" style="width: 100px; color: white;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a>

           <!-- <form action="" method="POST">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <a href="{{route('admin.eliminar_privados', $row -> eventsprivate_id)}}" style="width: 100px; color: white;float: right;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a>
              </form>--->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>



@endsection