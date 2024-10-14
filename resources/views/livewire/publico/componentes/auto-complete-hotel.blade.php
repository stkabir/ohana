<div class="autocomplete">
    <input type="text" style="position: absolute; z-index:1; top:0; opacity:0" 
    id="autocomplete_{{$tipo}}_id" wire:model="idValue">
    <input type="text" class="form-control" id="autocomplete_{{$tipo}}"  wire:click="blurControl"
    placeholder="Selecciona {{$tipo}}"  wire:model="value" wire:keydown="buscarLugares">
    @if($mostrarLugares)
        <div class="autocomplete-list" id="autocomplete_{{$tipo}}_list">
            @foreach ($lugares as $lugar)
                <div class="autocomplete-item-list" 
                    wire:key="data_list_{{$lugar->id}}" 
                    wire:click="seleccionar('{{$lugar->id}}','{{$lugar->nombre}}')"
                >{{$lugar->nombre}} </div>
            @endforeach
        </div>
    @endIf
</div>