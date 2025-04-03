@extends('base')
@section('title', 'Détails du bien' . $property->title)
@section('content')
    <div class="container mt-4">
        <h1>Détails du bien {{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h2>

        <div class="text-primary fw-bold" style="font-size: 4rem">
            {{ number_format($property->price, thousands_separator: ' ') }} GNF
        </div>

        <hr>
        <div class="mt-4">
            @include('shared.flash')

            @if (!session('success'))
                <h4>Intéressé par ce bien ?</h4>
                <p>Vous pouvez nous contacter en remplissant le formulaire ci-dessous.</p>
                <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
                    @csrf
                    <div class="row">
                        @include('shared.input', [
                            'class' => 'col',
                            'name' => 'firstname',
                            'label' => 'Prénom',
                        ])

                        @include('shared.input', [
                            'class' => 'col',
                            'name' => 'lastname',
                            'label' => 'Nom',
                        ])

                        @include('shared.input', [
                            'class' => 'col',
                            'name' => 'phone',
                            'label' => 'Téléphone',
                        ])

                        @include('shared.input', [
                            'class' => 'col',
                            'name' => 'email',
                            'label' => 'Email',
                            'type' => 'email',
                        ])
                    </div>
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'message',
                        'label' => 'Votre message',
                        'type' => 'textarea',
                    ])

                    <div>
                        <button class="btn btn-sm btn-primary">Nous contacter <i class="bi bi-send"></i></button>
                    </div>
                </form>
            @endif
        </div>

        <div class="mt-4">
            <p>{!! nl2br($property->description) !!}</p>

            <div class="row">
                <div class="col-8">
                    <h2>Caractéristiques</h2>
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Surface habitable</td>
                            <td>{{ $property->surface }} m²</td>
                        </tr>
                        <tr>
                            <td>Pièces</td>
                            <td>{{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <td>Chambres</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td>Etage</td>
                            <td>{{ $property->floor ?: 'Rez de chaussé' }}</td>
                        </tr>

                        <tr>
                            <td>Localisation</td>
                            <td>
                                {{ $property->city }}<br>
                                {{ $property->address }} - ({{ $property->postal_code }})
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-4">
                    <h2>Spécificités</h2>
                    <ul class="list-group">
                        @foreach ($property->options as $option)
                            <li class="list-group-item">{{ $option->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
