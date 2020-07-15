@extends('layouts.app')

  

@section('content')

<div class="container" id="c">
  @foreach($evabierto as $hol)
  {{ $loop->iteration }}
         {{$hol->id_evt_wrk}}
             <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Nombre:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->name}}</h6>
            </div>
<div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Tipo:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->tipo}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Fecha de inicio y finalización:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->start_date}} {{$hol->end_date}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Ubicación:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$hol->city}} {{$hol->state}} {{$hol->country}}</h6>
            </div>
            <div style="line-height: 28px;width:100%;">
              <label class="linea" style=" color:black;width:50%; ">Reseña:</label>
               <p style="word-wrap: break-word;">{{$hol->reseña}}</p>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Foto:</label>
               <h6 class="linea" style="color:black; display: inline; "></h6>
            </div>
             
              <br>
               @endforeach
</div>

<div class="container" id="eventsprivate_id">
   @foreach($evcerrado as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->name}}</td>
                <td>{{ $row->tipo}}</td>
            </tr>
 @endforeach

            @foreach($evcerrado as $e)
         <!-- {{ $loop->iteration }}-->

{{$e->eventsprivate_id}}
           <br>

                         <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Nombre:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->name}}</h6>
            </div>
<div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Tipo:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->tipo}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Cliente:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->client}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Fecha de inicio y finalización:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->start_date}} {{$e->end_date}}</h6>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ;">Ubicación:</label>
               <h6 class="linea" style="color:black; display: inline; ">{{$e->city}} {{$e->state}} {{$e->country}}</h6>
            </div>
            <div style="line-height: 28px; width: 100%">
              <label class="linea" style=" color:black; width:50%;">Reseña:</label>
               <p style="word-wrap: break-word;">{{$e->reseña}}</p>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; ">Foto:</label>
               <h6 class="linea" style="color:black; display: inline; "></h6>
            </div>

            
            </tr>
            @endforeach
</div>
           


 
@endsection