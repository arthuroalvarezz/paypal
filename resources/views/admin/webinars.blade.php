
@extends('layouts.app3')

@section('content')


<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  

<div style="display: flex; justify-content: space-between;">
<div style="margin-top: 40px; margin-bottom: 50px;">
<h2>Registros Webinars</h2>
</div>

</div>

  <table style="margin-top: 15px;" id="table_id_webinars" class="display responsive nowrap" width="100%">
    <thead style="background: #0B5394;">
        <tr style="color: white;">
            <th>Fecha y hora</th>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Estado</th>
            <th>Número de WhatsApp</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Webinar</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($mails as $row)

        <tr>
            <td >{{$row -> created_at}}</td>
            <td >{{$row -> name}}</td>
            <td>{{$row -> email}}</td>
            <td>{{$row -> estado}}</td>
            <td>{{$row -> phone}}</td>
            <td >{{$row -> city}}</td>
            <td>{{$row -> pais}}</td>
            <td>{{$row -> webinar}}</td>

        </tr>

    @endforeach 

    </tbody>
</table>

<style>


</style>