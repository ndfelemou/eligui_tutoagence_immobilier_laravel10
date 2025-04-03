@extends('admin.admin')
@section('title', 'Toutes les options')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>

        <a href="{{ route('admin.option.create') }}" class="btn btn-primary btn-sm">Ajouter une option <i
                class="bi bi-plus-circle"></i></a>
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-sm btn-primary rounded-0">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('admin.option.destroy', $option) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-sm btn-danger rounded-0"><i
                                        class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $options->links() }}
@endsection
