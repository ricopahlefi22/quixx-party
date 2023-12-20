<button type="button" class="group btn btn-{{ $class ?? '' }}" @click="toggle">
    @isset($icons)
        <i data-feather="{{ $icon ?? "" }}" class="group-hover:text-slate-200"></i>
    @endisset
</button>