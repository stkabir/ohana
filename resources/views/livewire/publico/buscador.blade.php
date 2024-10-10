<form class="container">
    <div class="row py-2">
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="idaVuelta" id="idaVuelta" value="1" wire:model.live="idaVuelta">
                <label class="form-check-label" for="idaVuelta">
                  Ida y vuelta
                </label>
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="idaVuelta" id="soloIda" value="0" wire:model.live="idaVuelta">
                <label class="form-check-label" for="soloIda">
                  Solo ida
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4 py-2">
            <select class="form-select" aria-label="Tipo de servicio" wire:model.live="tipoServicios">
                <option value="0">- Tipo de servicio -</option>
                <option value="1">Aeropuerto a hotel</option>
                <option value="2">Hotel a aeropuerto</option>
                <option value="3">Hotel a hotel</option>
            </select>
        </div>
        <div class="col-6 col-sm-4 py-2">
            @switch($tipoServicios)
                @case(1)
                    @livewire(Publico\Componentes\SelectAeropuerto::class, [
                        "value" =>  "0",
                        "nombre"  =>  "origen",
                        "form" => $form
                    ])
                    @break
                @case(2)
                    @livewire(Publico\Componentes\AutocompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "origen",
                        "form" => $form
                    ])
                    @break
                @case(3)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "origen",
                        "form" => $form
                    ])
                    @break
                @default       
            @endswitch
        </div>
        <div class="col-6 col-sm-4 py-2">
            @switch($tipoServicios)
                @case(1)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "destino",
                        "form" => $form
                    ])
                    @break
                @case(2)
                    @livewire(Publico\Componentes\SelectAeropuerto::class, [
                        "value" =>  "0",
                        "nombre"  =>  "destino",
                        "form" => $form
                    ])
                    @break
                @case(3)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "destino",
                        "form" => $form
                    ])
                    @break
                @default       
            @endswitch
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="date" placeholder="Fecha ida" aria-label="Fecha de ida">
        </div>
        @if($idaVuelta)
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="date" placeholder="Fecha vuelta" aria-label="Fecha de vuelta">
        </div>
        @endIf
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Adultos">
                <option selected value="0">-Adultos -</option>
                @for($i=1; $i<=50; $i++) 
                    <option value="{{$i}}" wire:key="{{$i}}">{{$i}}</option>
                @endFor
            </select>
        </div>
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Menores">
                <option selected>- Menores -</option>
                @for($i=1; $i<=50; $i++) 
                    <option value="{{$i}}" wire:key="{{$i}}">{{$i}}</option>
                @endFor
            </select>
        </div>
    </div>
    <div class="pt-3 text-center">
        <buton class="btn btn-primary">Buscar</buton>
    </div>
</form>