@extends('base')
@section('title', 'Tous nos biens')
@section('content')

    <div class="bg-light p-4 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Surface minimum" class="form-control rounded-1" name="surface"
                value="{{ $input['surface'] ?? '' }}">

            <input type="number" placeholder="Nombre de pieces minimum" class="form-control rounded-1" name="rooms"
                value="{{ $input['rooms'] ?? '' }}">

            <input type="number" placeholder="Budget max" class="form-control rounded-1" name="price"
                value="{{ $input['price'] ?? '' }}">

            <input placeholder="Mot clef" class="form-control rounded-1" name="title" value="{{ $input['title'] ?? '' }}">

            <button class="btn btn-sm btn-primary rounded-1 flex-grow-0 w-50">
                Rechercher <i class="bi bi-search"></i>
            </button>
        </form>
    </div>

    <div class="container mt-5">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col text-danger fw-bold">Aucun bien ne correspond à votre recherche</div>
            @endforelse
        </div>

        <div class="my-3">
            {{ $properties->links() }}
        </div>
    </div>
@endsection
