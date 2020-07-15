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

@media screen and (max-width: 414px) {
 #contact-form input[type=text] {
    height: 60px;
    margin-bottom: 0px;
    margin-left: 15px;
}
}
@media screen and (max-width: 414px) {
.form-control {

    padding: 6px 23px;
border-radius: 0px;
}
}

</style>



<section id="contact_tech" class="section green">
  <div class="container">
    <h2 style=" font-size: 46px; font-weight: 700; margin-bottom: 40px; letter-spacing: -1px; color:white;text-align: center;">Necesito más información</h2>
  @foreach ($workshop as $ho)
    <p align="center">{{$ho->name}}</p>
    <div class="blankdivider30"></div>
    <div class="row">
      <div class="span12">
        <div class="cform" id="contact-form">
        <div id="sendmessage">Su mensaje ha sido enviado. Muchas gracias!</div>
            <div id="errormessage"></div>
         <form action="{{asset('contacto/enviar.php')}}" method="post" >
              <div class="row">
                <div class="span6">
                  <div class="field your-name form-group">
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                  <div class="field your-email form-group">
                    <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electrónico" data-rule="email" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <div class="validation"></div>
                  </div>
                  <div class="field subject form-group">
                    <input type="text" class="form-control" name="asunto" data-rule="required" id="subject" placeholder="Número de WhatsApp" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')" />
                                  
                    <input type="hidden" name="asunto2" value="{{$ho->name}}">@endforeach
                    <input type="hidden" name="idContactoFicha" value="ficha">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="span6">
                  <div class="field message form-group" style="margin-top: 5px;">
                    <textarea class="form-control" name="mensaje" rows="8" data-rule="required" placeholder="Escribe tu mensaje" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')" ></textarea>
                    <div class="validation"></div>
                  </div>
                  


                </div>
              </div>

              <form action="#" onsubmit="return checkForm(this);">
                <div style="margin-left: 15px; margin-top: 15px; ">
                <input type="checkbox" required="" oninvalid="this.setCustomValidity('Selecciona esta casilla para continuar')" oninput="setCustomValidity('')" name="terms" /><span style="color: white;"> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad" target="_blank" style="color: white;"><b>Políticas de Privacidad.</b></a> Autorizo el envío de comunicaciones informativas relativas a las actividades o servicios por correo electrónico o cualquier otro medio equivalente.</span>
                </div>
                <div style="margin-left: 15px;">
                  <input style="margin-top: 40px;" type="submit" value="¡Enviar ahora!" class="btn btn-theme pull-left">
                </div>
              </form>

            </form>
        </div>
      </div>
     
    </div>
  </div>
</section>

<script>

  function checkForm(form)
  {
    ...
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }

</script>


