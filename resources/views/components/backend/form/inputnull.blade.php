<div class="container">
    <div class="form-group">
        <label for="">{{ $label }}</label>
        <input type="{{ $type }}" class="form-control border-primary " name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }} " {{ $disabled ? 'disabled' : '' }>
    </div>
</div>