<select class="form-select" aria-label="selecciona aeropuerto {{$tipo}}" id="select_{{$tipo}}" wire:model="value">
    <option value="0">- Selecciona {{$tipo}} -</option>
    @foreach ($zonas as $zona)
        <option wire:key="select_opt_{{$zona->id}}" value="{{$zona->id}}">
            {{$zona->nombre}}
        </option>
    @endforeach
</select>