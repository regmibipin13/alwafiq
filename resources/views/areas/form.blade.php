<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" placeholder="Name" value="{{ isset($area) ? $area->name : old('name') }}"
        name="name">
    @if ($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name') }}</p>
    @endif
</div>
