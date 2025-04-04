@extends('admin.admin')
@section('title', $property->exists ? 'Editer un bien' : 'Créer un bien')
@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2"
        action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        {{-- Champs inputs --}}
        <div class="row">
            @include('shared.input', [
                'label' => 'Titre',
                'class' => 'col',
                'name' => 'title',
                'value' => $property->title,
            ])
            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'name' => 'surface',
                    'value' => $property->surface,
                ])
                @include('shared.input', [
                    'class' => 'col',
                    'name' => 'price',
                    'label' => 'Prix',
                    'value' => $property->price,
                ])
            </div>
        </div>


        @include('shared.input', [
            'name' => 'description',
            'type' => 'textarea',
            'value' => $property->description,
        ])
        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'name' => 'rooms',
                'label' => 'Pièces',
                'value' => $property->rooms,
            ])

            @include('shared.input', [
                'class' => 'col',
                'name' => 'bedrooms',
                'label' => 'Chambres',
                'value' => $property->bedrooms,
            ])

            @include('shared.input', [
                'class' => 'col',
                'name' => 'floor',
                'label' => 'Etage',
                'value' => $property->floor,
            ])
        </div>

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'name' => 'city',
                'label' => 'Ville',
                'value' => $property->city,
            ])

            @include('shared.input', [
                'class' => 'col',
                'name' => 'address',
                'label' => 'Adresse',
                'value' => $property->address,
            ])

            @include('shared.input', [
                'class' => 'col',
                'name' => 'postal_code',
                'label' => 'Code postal',
                'value' => $property->postal_code,
            ])
        </div>
        @include('shared.select', [
            'name' => 'options',
            'label' => 'Options',
            'value' => $property->options()->pluck('id'),
            'multiple' => true,
        ])
        @include('shared.checkbox', [
            'name' => 'sold',
            'label' => 'Vendu',
            'value' => $property->sold,
            'options' => $options,
        ])


        {{-- Bouttons --}}
        <div>
            <button type="submit" class="btn btn-sm rounded-0 btn-primary">
                @if ($property->exists)
                    Modifier le bien
                    <i class="bi bi-pencil-square"></i>
                @else
                    Enregistrer le bien
                    <i class="bi bi-floppy-fill"></i>
                @endif
            </button>
        </div>
    </form>
@endsection
