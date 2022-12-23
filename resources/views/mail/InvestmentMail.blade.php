<x-mail::message>
# Hello {{ $mailData['name'] }} {{ $mailData['firstname'] }},

Vous venez de faire une demande d'investissement Chez Bank Trading .

Cette demande est en cours de traitement, veuillez patienter...

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->
Notre centre de traiment vous répondra dans quelques instant.

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
