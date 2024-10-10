<div class="autocomplete">
    <input type="text" class="form-control" id="autocomplete_{{$nombre}}"  wire:click="blurControl"
    placeholder="Selecciona {{$nombre}}" wire:model="value" wire:keydown="buscarLugares">
    @if($mostrarLugares)
        <div class="autocomplete-list" id="autocomplete_{{$nombre}}_list">
            @foreach ($lugares as $lugar)
                <div class="autocomplete-item-list" 
                    wire:key="data_list_{{$lugar->id}}" 
                    wire:click="seleccionar('{{$lugar->id}}','{{$lugar->nombre}}')"
                >{{$lugar->nombre}} </div>
            @endforeach
        </div>
    @endIf
</div>