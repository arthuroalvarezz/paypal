@extends('layouts.app')

@section('title', 'Eventos privados realizados | Innovatium®')

@section('content')
<div class="container" id="eventsprivate_id">
   <!--@foreach($evcerrado as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->name}}</td>
                <td>{{ $row->tipo}}</td>
            </tr>
 @endforeach-->

            @foreach($evcerrado as $e)
            @php
            setlocale(LC_TIME, 'es_MX.UTF-8');
           $end_date = strftime("%d %b %Y", strtotime($e->end_date));
           $e->end_date = $end_date;
           $start_date = strftime("%d %b %Y", strtotime($e->start_date));
           $e->start_date = $start_date;
            @endphp
         <!-- {{ $loop->iteration }}-->

<!--{{$e->eventsprivate_id}}-->
          

           <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Nombre:</label>
               <h1 class="linea" style="color:black; display: inline; ">{{$e->name}}</h1>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Tipo:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->tipo}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Modalidad:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->modalidad}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Cliente:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->client}}</h6>
            </div>

            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Fecha de inicio y finalización:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->start_date}} <b>-</b> {{$e->end_date}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Ubicación:</label>
              @if($e->state=="")
               <h2 class="linea" style="color:black; display: inline; ">{{$e->city}}, {{$e->country}}</h2>
               @else
               <h2 class="linea" style="color:black; display: inline; ">{{$e->city}}, {{$e->state}}, {{$e->country}}</h2>
               @endif
            </div>
            <div style="line-height: 28px;width:100%;">
              <label class="linea" style=" color:black;width:50%; ">Reseña:</label>
               <h6 class="linea" style="word-wrap: break-word; font-size: 20px; font-family: 'Open Sans', Arial, sans-serif; font-weight: 500; color: black">{!!$e->resena!!}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Foto:</label>
                <section style="padding-left: 0px">     
      <section style="padding-left: 0px">     
      <div class="flexslider">
        <ul class="slides">
        @foreach ($imagenes as $images)
        <li>
          <img class="img-responsive" src="{!!asset($images->path)!!}" />
        </li>
        @endforeach
        </ul>

      </div>
        </section>
 
            </div>
            </tr>
            <br>
            @endforeach
</div>


    </div>

          <br>

   
@endsection