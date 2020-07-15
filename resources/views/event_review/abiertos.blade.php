@extends('layouts.app')
@section('title', 'Eventos abiertos realizados | Innovatium®')

  

@section('content')

<div class="container">
  @foreach($evabierto as $hol)
      @php
            setlocale(LC_TIME, 'es_MX.UTF-8');
           $end_date = strftime("%d %b %Y", strtotime($hol->end_date));
           $hol->end_date = $end_date;
           $start_date = strftime("%d %b %Y", strtotime($hol->start_date));
           $hol->start_date = $start_date;
            @endphp
         
             <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Nombre:</label>
               <h1 class="linea" style="color:black; display: inline; ">{{$hol->name}}</h1>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Tipo:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->tipo}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Modalidad:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->modalidad}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Fecha de inicio y finalización:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->start_date}} <b>-</b> {{$hol->end_date}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Ubicación:</label>
              @if($hol->state=="")
               <h2 class="linea" style="color:black; display: inline; ">{{$hol->city}}, {{$hol->country}}</h2>
               @else
               <h2 class="linea" style="color:black; display: inline; ">{{$hol->city}}, {{$hol->state}}, {{$hol->country}}</h2>
               @endif
            </div>
            <div style="line-height: 28px;width:100%;">
              <label class="linea" style=" color:black;width:50%; ">Reseña:</label>
               <h6 class="linea" style="word-wrap: break-word; font-size: 20px; font-family: 'Open Sans', Arial, sans-serif; font-weight: 500; color: black">{!!$hol->resena!!}</h6>
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