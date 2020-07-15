
<style type="text/css">
@media screen and (max-width: 422px) {
  .section.section h4 {
    font-size: 32px;
  }
}
@media screen and (max-width: 320px) {
  .section.section h4 {
    font-size: 22px;
  }
}
@media screen and (max-width: 768px) {
  div.centrado {
margin-left: 114px
  }
}
@media screen and (max-width: 375px) {
  div.centrado {
margin-left: 1px
  }
}
@media screen and (max-width: 414px) {
  div.centrado {
margin-left: 1px
  }
}


</style>
<section id="contact" class="section green">
  <div class="container">
  <h4 class="tit-responsive"> Quiero recibir más información para inscribirme o registrarme </h4>
    <div class="centrado">

   
    <div class="blankdivider30"></div>
    <div class="row">
      <div class="span12">
        <div class="cform" id="contact-form">
          <div id="sendmessage">Su mensaje ha sido enviado. Muchas gracias!</div>
            <div id="errormessage"></div>
        

          <form action="{{asset('contacto/enviar.php')}}" method="post" >
              <div class="row" style="margin-top: 15px;">
                <div class="span6">

                  <div class="field your-name form-group">
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"></input>
                    <div class="validation"></div>
                  </div>

                  <div class="field your-email form-group">
                    <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electrónico" data-rule="email" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>

                  <div class="field subject form-group">
                    <input type="text" class="form-control" name="asunto" data-rule="required" id="subject" placeholder="Teléfono 10 dígitos" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')" />
                    <input type="hidden" name="asunto2" value="{{$event->workshops->name}}">
                    <input type="hidden" name="idInfoEvento" value="evento">
                    <div class="validation"></div>
                  </div>

                </div>

                <div class="span6">
                  <div class="field message form-group" style="margin-top: 5px;">
                    <textarea class="form-control" name="mensaje" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Escribe tu mensaje" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"></textarea>
                    <div class="validation"></div>
                  </div>
                  
                
                  
                </div>
                
              </div>

              <form action="#" onsubmit="return checkForm(this);">
                <div style="margin-left: 15px; margin-top: 15px; ">
                <input type="checkbox" required="" oninvalid="this.setCustomValidity('Selecciona esta casilla para continuar')" oninput="setCustomValidity('')" name="terms" /><span style="color: white;"> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso.pdf') }}" target="_blank" style="color: white;"><b>Políticas de Privacidad</b></a></span>
                </div>
                <div style="margin-left: 15px;">
                  <input style="margin-top: 40px;" type="submit" value="Enviar" class="btn btn-theme pull-left">
                </div>
              </form>

            </form>

            
        </div>
      </div>

    </div>
  </div>
 </div>  
</section>