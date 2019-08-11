@component('mail::message')
# Orden Enviada

Ya está listo y configurado.

Tu API Token:
@component('mail::panel', ['api_token' => $api_token])
{{$api_token}}
@endcomponent

Gracias.<br>
@endcomponent