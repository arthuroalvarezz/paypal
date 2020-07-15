@extends('layouts.app')
@section('title', 'Eventos abiertos realizados | Innovatium®')

  

@section('content')

<div class="container" id="id_evt_wrk">
<h1 style="margin-top: -2%;padding: 0px;">Eventos Abiertos Realizados</h1>

@php $currentOpenEvent = '' @endphp

@foreach($evabierto as $e)
@php
            setlocale(LC_TIME, 'es_MX.UTF-8');
           $end_date = strftime("%d %b %Y", strtotime($e->end_date));
           $e->end_date = $end_date;
           $start_date = strftime("%d %b %Y", strtotime($e->start_date));
           $e->start_date = $start_date;
            @endphp
    @if($e->id_evt_wrk != $currentOpenEvent)
    
    <div style="line-height: 28px;">
              <label class="linea" style=" color:black;padding: 0px; ">Nombre:</label>
               <h1 class="linea" style="color:black; display: inline;padding: 0px; ">{{$e->name}}</h1>
            </div>
            @php $currentOpenEvent = $e->id_evt_wrk @endphp
<div style="line-height: 28px;">
              <label class="linea" style=" color:black;padding: 0px; ">Tipo:</label>
               <p class="linea" style="color:black; display: inline;font-weight: 400;padding: 0px; ">{{$e->tipo}}</p>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black;padding: 0px; ">Modalidad:</label>
               <p class="linea" style="color:black; display: inline;font-weight: 400;padding: 0px; ">{{$e->modalidad}}</p>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; padding: 0px;">Fecha de inicio y finalización:</label>
               <p class="linea" style="color:black; display: inline;font-weight: 400;padding: 0px;">{{$e->start_date}} <b>-</b> {{$e->end_date}}</p>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black;padding: 0px;">Ubicación:</label>
              @if($e->state=="")
               <h2 class="linea" style="color:black; display: inline;padding: 0px; ">{{$e->city}}, {{$e->country}}</h2>
               @else
               <h2 class="linea" style="color:black; display: inline;padding: 0px; ">{{$e->city}}, {{$e->state}}, {{$e->country}}</h2>
               @endif
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black; width:50%;padding: 0px;">Reseña:</label>
               <!--<h6 class="linea" style="word-wrap: break-word; font-size: 20px; font-family: 'Open Sans', Arial, sans-serif; font-weight: 500; color: black">{!!$e->resena!!}</h6>-->
               <label  style="color:black; display: inline;font-weight: 400;margin-top: -2%;font-size: 20px;padding: 0px;">{!!$e->resena!!} </label>
            </div>
            <div style="line-height: 28px;">
              <label class="linea" style=" color:black;padding: 0px; ">Foto:</label>
                 
              

        
            </div>
            </tr>
            <br>

        
    @endif
    <section style="padding-left: 0px">     
      
 
    <div class="container">
	<div class="row">
		<div class="row">
            <div style="margin-top: -25px;" class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{!!asset($e->path)!!}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{!!asset($e->path)!!}">
                </a>
            </div>
            
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="{!!asset($e->path)!!}">
                    </div>
                    <div style="border-top: 1px solid #f7f7f700;" class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>




     </section>
@endforeach

                         
</div>

    </div>

          <br>

   
@endsection