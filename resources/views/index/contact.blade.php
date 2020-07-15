

<section id="contact" class="section green">
  <div class="container">
    <h2 style=" font-size: 46px; font-weight: 700; margin-bottom: 40px; letter-spacing: -1px; color:white;text-align: center;">Contacto</h2>
   
    <p>Bienvenid@ a Innovatium®, no dudes en contactarnos para obtener mayor información de nuestros talleres, formas de pago y descuentos especiales. Tenemos la opción de realizar talleres y coaching in company con base a las necesidades de tu organización.</p>
    <p aling="center"></p>
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
                    <input type="text" class="form-control" name="asunto" id="subject" placeholder="Número de WhatsApp" data-rule="minlen:4" required="" oninvalid="this.setCustomValidity('Completa este campo')" oninput="setCustomValidity('')"/>
                    <input type="hidden" name="idContactoIndex" value="index">
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
                <input type="checkbox" required="" oninvalid="this.setCustomValidity('Selecciona esta casilla para continuar')" oninput="setCustomValidity('')" name="terms" /><span style="color: white;"> He leído y aceptado los términos descritos en las <a href="{{ asset('pdf/aviso_de_privacidad.pdf') }}" alt="aviso de privacidad"   target="_blank" style="color: white;"><b>Políticas de Privacidad</b></a></span>
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
</section>


