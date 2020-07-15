@extends('layouts.app3')

@section('content')

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Precio</h2>
                </div>
                 
          
                <div class="card-body">
                    <form action="{{url('edit', $content->precios_id)}}" method="POST" class="needs-validation" novalidate>
                            {{csrf_field()}}
                        {{method_field('PUT')}}
                        
                        <input type="hidden" value="{{ Auth::user()->id }}" name="modificationBy"/>
              
  
   

                       <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b> {{ $content->precios_id }}</b></label>
                        </div>-->

                         
           

            <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Descripción<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputDes" placeholder="Descripción" value="{{ $content->descripcion }}"><!---name se usa para el upd con open---->
                            <div class="invalid-feedback">
                                Por favor, escribe una descripción.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Precio MXN<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputPreciomx" placeholder="Precio MXN" value="{{$content->preciomx }}">
                            <div class="invalid-feedback">
                                Por favor, escribe un precio MXN.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Precio USD<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputPreciousd" placeholder="Precio USD" value="{{$content->preciousd }}">
                            <div class="invalid-feedback">
                                Por favor, escribe un precio USD.
                            </div>
                            </div>
                        </div>


                       <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Tipo<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                          
                                <select id="inputAddEvento" name="inputTipo" class="form-control">
                                     <option selected >{{ $content->tipo }}</option>
                                     <?php if ($content->tipo!=="Promoción"): ?>
                                    <option value="Promoción">Promoción</option>
                                    <?php endif ?>
                                     <?php if ($content->tipo!=="Cupón"): ?>
                                    <option value="Cupón">Cupón</option>
                                    <?php endif ?>
                                     <?php if ($content->tipo!=="Precio de lista"): ?>                                    
                                    <option value="Precio de lista">Precio de lista</option>                                
                                <?php endif ?>
                                    
                                  
                                </select>
                            
                           
                            </div>
                        </div>
          


                                 <option selected style="display: none;">{{ $content->tipo }}</option>
                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Cupón<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="inputCalle" name="inputCupon" placeholder="Si seleccionaste Tipo Cupón captura el Cupón que deberá colocar el cliente para realizar su pago" value="{{ $content->cupon }}">
                            <div class="invalid-feedback">
                                Por favor, escribe un cupón.
                            </div>
                            </div>
                        </div>
                            
                                     


                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Vigencia de inicio<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" required id="inputCalle" name="inputVigenciaini" placeholder="Calle" value="{{ $content->vigencia_ini }}">
                            <div class="invalid-feedback">
                                Por favor, escribe una vigencia de inicio.
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Vigencia de fin<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" required id="inputCalle" name="inputVigenciafin" placeholder="Calle" value="{{ $content->vigencia_fin }}">
                            <div class="invalid-feedback">
                                Por favor, escribe una vigencia de fin.
                            </div>
                            </div>
                        </div>


                     
<!-------------------------------------------------------------------------------------------------->
       <!--
@if($content->tipo == "Cupón") 

<div class="form-group row" >
                        <label for="initAdd-date-input" class="col-sm-2 col-form-label">Cupón</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{ $content->cupon }}"  name="fecha_inicial" readonly type="">
                        </div>
                        </div>


                                 <option selected style="display: none;">{{ $content->tipo }}</option>------------------>
                      <!--  <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Código<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" required id="inputCalle" name="inputCupon" placeholder="Cupón" value="{{ $content->cupon }}">
                            <div class="invalid-feedback">
                                Por favor, escribe un cupón.
                            </div>
                            </div>
                        </div>-->
              <!-----    @endif 
<div class="form-group row">
                        <label for="inputAddquestion" class="col-sm-2 col-form-label">¿Es un Cupón?</label>
                        <div class="col-sm-10">
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Sí">
                              <label class="form-check-label" for="inlineRadio1">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                      </div>
                     <div style="display: none" class="calleExistente form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Cupón<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                            <input type="" class="form-control"   id="inputCalle" name="inputCupon" placeholder="Ingresa el código" value="{{$content->cupon}}">
                            <div class="invalid-feedback">
                                Por favor, escribe un cupón.
                            </div>
                            </div>
                        </div>----->

                     <!--   <div style="display: none" class="calleExistente form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Tipo<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                          
                                <select id="inputAddEvento" name="inputTipo" class="form-control">
                                   
                                    <option value="Promoción">Cupón</option>
 
                                  
                                </select>
                            
                           
                            </div>
                        </div>-->
                      <!--   <div style="display: none" class="calleExistente form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Tipo<b style="color: red;">*</b></label>
                            <div class="col-sm-10">
                          
                                <select id="inputAddEvento" name="inputTipo" class="form-control">
                                     <option selected >{{ $content->tipo }}</option>
                                     <?php ////if ($content->tipo!=="Promoción"): ?>
                                    <option value="Promoción">Promoción</option>
                                    <?php ////endif ?>
                                     <?php ////if ($content->tipo!=="Cupón"): ?>
                                    <option value="Cupón">Cupón</option>
                                    <?php ////endif ?>
                                     <?php ////if ($content->tipo!=="Precio de lista"): ?>                                    
                                    <option value="Precio de lista">Precio de lista</option>                                
                                <?php ////endif ?>
                                    
                                  
                                </select>
                            
                           
                            </div>
                        </div>--->
                        <!--  <div style="display: none" class="calleExistente form-group row">
                            <label for="inputAddStreet" class="col-sm-2 col-form-label">Calle existente</label>
                            <div class="col-sm-10">
                                <select class="form-control"   name="previewStreet" id="inputAddStreet">
                  <option value="" selected>Selecciona una calle</option>
                              
                    <option value=" ">dfgdf</option>
                  
                                </select>
                            </div>
                        </div>-->


            
                 
                        <!--    <div style="display: none" class="calle form-group row">
          <label for="inputAddCalle" class="col-sm-2 col-form-label">Calle<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="street" required placeholder="Calle" name="calle" type="text" class="form-control" id="inputAddCalle">
            <div class="invalid-feedback">
              Por favor, escribe una calle.
            </div>  
          </div>
        </div>

 <div style="display: none" class="ciudad form-group row">
          <label for="inputAddCiudad" class="col-sm-2 col-form-label">Ciudad<b style="color: red;">*</b></label>
          <div class="col-sm-10">
            <input id="city" required placeholder="Ciudad" name="ciudad" type="text" class="form-control" id="inputAddCiudad">
            <div class="invalid-feedback">
              Por favor, escribe una ciudad.
            </div>  
          </div>
        </div>
--->
 

@php 
                                  setlocale(LC_TIME, 'es_MX.UTF-8');
                                  $vigencia_ini = strftime("%d %b %Y", strtotime($content->vigencia_ini));
                                  $content->vigencia_ini = $vigencia_ini; 

                                  $vigencia_fin = strftime("%d %b %Y", strtotime($content->vigencia_fin));
                                  $content->vigencia_fin = $vigencia_fin;

$content->fk_id_precios = $content->fk_id_precios;

                                @endphp 

<div class="form-group row">
                        <label for="initAdd-date-input" class="col-sm-2 col-form-label">Datos actuales</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{ $content->descripcion }} ${{ number_format($content->preciomx, 2) }} MXN / ${{ number_format($content->preciousd, 2) }} USD (Vigente al {{ $content->vigencia_fin }}) " name="fecha_inicial" readonly type="">
                        </div>
                        </div>

<!------------------------------------------------------------------------------------------------>

                     
                       
                     

                      

  <div class="form-group row" style="float: right;">
                            <button type="submit" class="m-2 btn btn-primary">Guardar precio</button>
                            <a href="../open_event_edit/{!!$content->fk_id_precios!!}" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>
                          <!--  <a href="javascript:history.back(-1);" style="color: white;" class="m-2 btn btn-danger">Cancelar</a>-->
                           <!-- <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a>-->
                        </div>
                        
            </form>
         
                       
                 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>--------->

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
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

@endsection
