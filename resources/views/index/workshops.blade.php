<section id="talleres" class="section orange" align="center" style="background-color: rgba(255,255,255,.79)">
   <div class="container">
     <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2 style=" font-size: 46px; font-weight: 700; margin-bottom: 40px; letter-spacing: -1px; color:#444">Talleres</h2>
          <p style="font-size: 22px; text-shadow: 2px 2px 4px white;  margin: 20px 10px 60px 10px; color: #444"><b>Conoce nuestra oferta de capacitación y coaching</b></p>
        </div>
      </div>
    </div>
    @foreach($partners as $partner)
      <div class="container">
        <div class="row e" style="background-color: white">
          <div class="col-md-5">
            <div class="row">
              <img src="{{asset($partner['logo'])}}" alt="innovatium" class="img-responsive log" />
            </div>
          </div>
          <div class="col-md-7">
            <br><br>
            <!-- Talleres -->
            @foreach($partner->workshops->sortBy('order_workshop') as $workshop)
            @if($workshop['Activo']=="Si")
              <div class="row" id="row-{{$workshop->workshop_id}}" onmouseout="out('row-{{$workshop->workshop_id}}',0);" onmouseover="over('row-{{$workshop->workshop_id}}',0);">
                <div class="col-md-1"></div>
                <div class="col-md-5"><h2 class="b3" style="font-size: 100%; font-size: 15px;font-weight: 700"><a style="text-decoration: none;" href="{{url('workshop',$workshop->slug)}}" >{{$workshop->name}}</a></h2></div>
                <div class="col-md-3" style="margin-top: 2.5%; "><b class="" style="font-size: 100%; font-size: 12px;"><b class="b3">{{$workshop->duration}}</b></b></div>
                <div class="col-md-2"><a href="{{url('workshop',$workshop->slug)}}" type="button" class="btn " style="margin-top: 6px; background-color:  #6fa8dc;color: white">Ficha técnica</a></div><!---liga para los talleres---->

              </div>
              <div class="row e">
                <img src="{{asset('images/linea.png')}}" alt="innovatium" class="img-responsive row3" />
              </div>
              @endif
            @endforeach
            <!-- Termina Taller -->
          </div>
        </div>
      </div>
    @endforeach
    <div class="container">
      <div align="left">
        <b style="color: #4c4949; font-size: 12px">
          PMP y el logotipo PMI Registred Education Provider son marcas registradas del Project Management Institute, Inc.
        </b>
      </div>
    </div>
   </div>
 </section>

<style type="text/css">
  @media (min-width: 1024px){
.col-md-3 {
    width: 19%;
}
}
  @media screen (min-width: 600px) {
    .h22{
      background-color: red;
    color: red
    }
  }

    @media only screen and (max-device-width: 769px) and (min-device-width: 700px){
div.row.e {
margin-right: 3%;
}
img.img-responsive.row3 {
margin-left: 9%;
}
img.img-responsive.log{
  margin-left: 12%;/**ipad**/

}

}


    @media only screen and (max-device-width: 1025px) and (min-device-width: 1022px){
div.row.e {
margin-right: 3%;
}
img.img-responsive.row3 {
margin-left: 9%;
}
img.img-responsive.log{
  margin-left: 2%;

}

}
 
</style>
