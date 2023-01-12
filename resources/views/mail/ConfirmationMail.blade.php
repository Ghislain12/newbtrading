<x-mail::message>
# Hello {{ $mailData['name'] }},

Vous venez de soumettre une demande à Bank Trading .

Cette demande est en cours de traitement, veuillez patienter...

Notre centre de traiment des demandes vous répondra dans quelques instant.

Cordialement,
{{ config('app.name') }}
</x-mail::message>