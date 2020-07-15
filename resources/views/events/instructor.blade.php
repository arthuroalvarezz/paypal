<section id="" style="background-color: #033E6B">
  <div class="container" style="background-color: #033E6B">
    <br>
    <h5 class="h55" style="color: white; font-size: 32px"> ¿Quién es el instructor? </h5>
    <div class="col-md-6">
      <img src="{{ asset($event->instructor->photo) }}" class="img-responsive" width="60%" height="40%">
      <br>
    </div>

    <div class="col-md-6" style="margin-top: -3%">
      <p style="text-align: justify; color: white"><b>{{$event->instructor->name}} {{$event->instructor->last_name}}</b></p>
      <p style="text-align: justify; color: white">{{$event->instructor->description}}</p>
      <br/><br/>
    </div>
  </div>
</section>


<style type="text/css">
@media screen and (max-width: 700px){
h5.h55{
font-size:12px;
}

}
   
      

</style>