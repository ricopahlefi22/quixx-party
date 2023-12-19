<button type="button"  @click="toggle" @click.outside="open = false" class="btn btn-red">
    {{ $label ?? '' }}
</button>