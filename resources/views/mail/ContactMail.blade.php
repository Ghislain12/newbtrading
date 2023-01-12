<x-mail::message>
    # Hello,

    Vous venez de revecoir un message de {{ $mailData['name'] }} .

    # Nom : {{ $mailData['name'] }}
    # Email : {{ $mailData['email'] }}
    # Phone : {{ $mailData['phone'] }}
    # Contenu : {{ $mailData['content'] }}

    Merci,
    {{ config('app.name') }}
</x-mail::message>