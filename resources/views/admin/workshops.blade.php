@extends('layouts.app3')

@section('content')


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

<div style="display: flex; justify-content: space-between;">
<div style="margin-top: 40px; margin-bottom: 50px;">
<h2>Talleres</h2>

</div>
<div>
<a class="btn" style="color: white; margin-top: 40px; margin-bottom: 50px; background: #0B5394;" href="{{route('admin.agregar-workshop')}}"><i style="color: white;" class="fas fa-plus-circle"></i> Agregar taller</a>
</div>
</div>

  <table id="table_workshops" class="display responsive nowrap" width="100%">
    <thead style="background: #0B5394;">
        <tr style="color: white;">
            <th>Taller</th>
            <th>Partner</th>
            <th>Secuencia</th> 
            <th>Modificado por</th>
            <th>Estado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($workshops as $row)
        <tr>
            <td>{{$row -> name}}</td>
            <td>{{$row -> partner}}</td>
            <td>{{$row -> order_workshop}}</td>
            <td>{{$row -> created_at}} {{$row -> email}}</td>
            <td style="text-align: center;">
                <div class="form-check">
                <?php if ($row->Activo=="Si"): ?>
                    Activo
                <?php else: ?>
                    Inactivo
                <?php endif ?>
                </div>
            </td>
            <td>
              <a href="{{route('admin.editar-workshop', $row -> workshop_id)}}" style="width: 100px; color: white;" class="btn btn-primary"><i style="color: white;" class="fa fa-edit"></i> Editar</a>
            </td>
            <td>
                <a href="{{route('admin.eliminar_workshop', $row -> workshop_id)}}" style="width: 100px; color: white;" class="btn btn-danger"><i style="color: white;" class="fa fa-trash"></i> Eliminar</a>

            </td>
        </tr>

        @endforeach
    </tbody>
</table>

</div>





@endsection