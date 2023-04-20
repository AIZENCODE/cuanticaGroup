@component('mail::message')
# Hola Cuantica Group
{{$data['nombre']}} te ha enviado un mensaje desde la web de Cuantica Group.
@component('mail::panel')
{{$data['mensaje']}}
@endcomponent
Correo de Contacto: {{$data['correo']}}
<br>
Telefono de Contacto: {{$data['telefono']}}
@endcomponent
