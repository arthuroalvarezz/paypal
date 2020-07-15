<h2>Nombre: {{ $contact['nombre'] }}</h2>
<h2>Correo: {{ $contact['email'] }}</h2>
@if($contact['status'] == 0)
  <h2>Asunto: {{ $contact['asunto'] }}</h2>
@elseif ($contact['status'] == 1)
  <h2>Teléfono: {{ $contact['asunto'] }}</h2>
@else
  <h2>Información indefinida</h2>
@endif
<h2>Mensaje: {{ $contact['mensaje'] }}</h2>
