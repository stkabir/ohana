<select class="form-select" aria-label="selecciona aeropuerto {{$nombre}}" id="select_{{$nombre}}" wire:model="form.{{$nombre}}">
    <option value="0">- Selecciona {{$nombre}} -</option>
    @foreach ($zonas as $zona)
        <option wire:key="select_opt_{{$zona->id}}" value="{{$zona->id}}">
            {{$zona->nombre}}
        </option>
    @endforeach
</select>