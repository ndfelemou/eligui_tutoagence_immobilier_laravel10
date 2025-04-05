<div role="alert" {{ $attributes->merge(['class' => "alert alert-$type  alert-dismissible fade show"]) }}>
    <i class="bi bi-check-circle-fill"></i>
    {{-- <strong>Félicitation!</strong> {{ session('success') }}. --}}
    {{ $prefix }}{{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
