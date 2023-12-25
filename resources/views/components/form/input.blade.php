<div class="form-group">
    <label for="{{ $label ?? '' }}" class="label">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" placeholder="{{ $placeholder ?? '' }}" class="form-control @error($name ?? '') form-error @enderror" autocomplete="off" />
    @error($name ?? '')
        <span class="error">{{ $message }}</span>
    @enderror
</div>  
