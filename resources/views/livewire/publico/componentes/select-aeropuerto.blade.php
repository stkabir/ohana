<select class="form-select" aria-label="selecciona aeropuerto {{$nombre}}" id="select_{{$nombre}}" wire:model.change.live="form.{{$nombre}}">
    <option value="0">- Selecciona {{$nombre}} -</option>
    @foreach ($lugares as $lugar)
        <option wire:key="select_opt_{{$lugar->id}}" value="{{$lugar->id}}">
            {{$lugar->nombre}}
        </option>
    @endforeach
</select>