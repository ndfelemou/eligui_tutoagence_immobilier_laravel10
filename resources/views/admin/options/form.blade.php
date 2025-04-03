@extends('admin.admin')
@section('title', $option->exists ? 'Editer une option' : 'Créer une option')
@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}"
        method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')

        {{-- Champs inputs --}}
        <div class="row">
            @include('shared.input', [
                'label' => 'Nom',
                'class' => 'col',
                'name' => 'name',
                'value' => $option->name,
            ])
        </div>


        {{-- Bouttons --}}
        <div>
            <button type="submit" class="btn btn-sm rounded-0 btn-primary">
                @if ($option->exists)
                    Modifier l'option
                    <i class="bi bi-pencil-square"></i>
                @else
                    Enregistrer l'option
                    <i class="bi bi-floppy-fill"></i>
                @endif
            </button>
        </div>
    </form>
@endsection
