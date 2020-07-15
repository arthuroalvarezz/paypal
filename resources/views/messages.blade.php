@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{ $error }}
    </div>
  @endforeach
@endif

@if(Session::has('message'))
  <div class="alet {{ Session::get('alert-class') }} col-xs-12 black-text alert-dismissable" ng-if="message">
    {{ Session::get('message') }}
  </div>
@endif