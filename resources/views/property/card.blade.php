<div class="card rounded-1">
    <div class="card-body ">
        <h5 class="cart-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}"
                class="">{{ $property->title }}</a>
        </h5>

        @if ($property->sold == 0)
            <span class="badge rounded-pill text-bg-danger">Vendu</span>
        @else
            <small class="badge rounded-pill text-bg-success">Disponible</small>
        @endif

        <p class="card-text">{{ $property->surface }} m² / {{ $property->city }} - {{ $property->address }}
            ({{ $property->postal_code }})</p>

        <div class="text-primary fw-bold" style="font-size: 1.4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }} GNF
        </div>
    </div>
</div>
