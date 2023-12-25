<a href="{{ $url ?? '' }}" @isset($modal) data-bs-toggle="modal" @endisset class="btn btn-icons btn-{{ $class ?? '' }}">
    <i class="bi bi-{{ $icons ?? 'plus' }}"></i>
</a>
