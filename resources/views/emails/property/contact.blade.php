<x-mail::message>
# Nouvelle démande de contact

Une nouvelle démande de contact a été fait pour le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>

**Informations :** <br>

    - Prénom : {{ $data['firstname'] }}
    - Nom : {{ $data['lastname'] }}
    - Téléphone : {{ $data['phone'] }}
    - Email : {{ $data['email'] }}

**Message :** <br>

{{ $data['message'] }}

Merci !<br>
</x-mail::message>
