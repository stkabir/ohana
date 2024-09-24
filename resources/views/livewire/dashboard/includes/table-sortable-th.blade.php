<th wire:click="setSortBy('{{ $name }}')">
    <button class="btn btn-sm fw-bold">
        {{ $label }}
        @if ($sortBy !== $name)
            <i class="bi bi-arrow-down-up"></i>
        @elseif($sortDir === 'ASC')
            <i class="bi bi-sort-up"></i>
        @else
            <i class="bi bi-sort-down"></i>
        @endif
    </button>
</th>