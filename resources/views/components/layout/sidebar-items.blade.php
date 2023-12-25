<a href="{{ $url ?? '' }}" class="menu-item" @isset($dropdown) data-bs-toggle="dropdown" @endisset>
    <i class="bi bi-{{ $icons ?? '' }}"></i> {{ $label ?? '' }}
</a>
