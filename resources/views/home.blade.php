@extends('base')
@section('title', 'Tous nos biens')
@section('content')

    <x-alert type="success">
        Des informations
    </x-alert>

    <div class="bg-light p-4 mb-5 text-center">
        <div class="container">
            <h1>Votre Confiance, Notre Priorité – <span class="text-primary">L'Elite Immobilière de Guinée (ELIGUI)</span> la
                Référence
            </h1>
            <p>
                Élite Immobilière de Guinée : Des biens haut-standing sélectionnés pour leur potentiel. <br>
                Piscines, générateurs, titres fonciers vérifiés – l'excellence immobilière à portée de clic.
                <br>
                <span class="d-inline-block mt-2">
                    <i class="bi bi-check-circle text-success"></i> Garantie sans frais cachés
                </span>
            </p>

            <div class="d-flex gap-3 justify-content-center">
                <a href="{{ route('property.index') }}" class="btn btn-primary btn-lg px-4 rounded-pill">
                    <i class="bi bi-house-door me-2"></i>Voir tous les biens
                </a>
                <a href="#contact" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                    <i class="bi bi-telephone me-2"></i>Nous contacter
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
