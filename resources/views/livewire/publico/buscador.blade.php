<form class="container" wire:submit="buscarTrasporte">
    <div class="row py-2">
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="idaVuelta" id="idaVuelta" value="1" wire:model.live="form.idaVuelta">
                <label class="form-check-label" for="idaVuelta">
                  Ida y vuelta
                </label>
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="idaVuelta" id="soloIda" value="0" wire:model.live="form.idaVuelta">
                <label class="form-check-label" for="soloIda">
                  Solo ida
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4 py-2">
            <select class="form-select" aria-label="Tipo de servicio" wire:model.live="form.tipoServicios">
                <option value="0">- Tipo de servicio -</option>
                <option value="1">Aeropuerto a hotel</option>
                <option value="2">Hotel a aeropuerto</option>
                <option value="3">Hotel a hotel</option>
            </select>
            @error('form.tipoServicios') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="col-6 col-sm-4 py-2">
            @switch($form->tipoServicios)
                @case(1)
                    @livewire(Publico\Componentes\SelectAeropuerto::class, [
                        "value" =>  "0",
                        "nombre"  =>  "origen",
                        "form" => $form,
                        "valueGet" =>$origenGet
                    ])
                    @error('form.origen') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @case(2)
                    @livewire(Publico\Componentes\AutocompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "origen",
                        "form" => $form,
                        "valueGet" =>$origenGet
                    ])
                    @error('form.origen') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @case(3)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "origen",
                        "form" => $form,
                        "valueGet" =>$origenGet
                    ])
                    @error('form.origen') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @default       
            @endswitch
        </div>
        <div class="col-6 col-sm-4 py-2">
            @switch($form->tipoServicios)
                @case(1)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "destino",
                        "form" => $form,
                        "valueGet" =>$destinoGet
                    ])
                    @error('form.destino') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @case(2)
                    @livewire(Publico\Componentes\SelectAeropuerto::class, [
                        "value" =>  "0",
                        "nombre"  =>  "destino",
                        "form" => $form,
                        "valueGet" =>$destinoGet
                    ])
                    @error('form.destino') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @case(3)
                    @livewire(Publico\Componentes\AutoCompleteHotel::class, [
                        "value" =>  "",
                        "nombre"  =>  "destino",
                        "form" => $form,
                        "valueGet" =>$destinoGet
                    ])
                    @error('form.destino') <small class="text-danger">{{ $message }}</small> @enderror
                    @break
                @default       
            @endswitch
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="date" placeholder="Fecha ida" aria-label="Fecha de ida" wire:model="form.fechaIda">
            @error('form.fechaIda') <snall class="text-danger">{{ $message }}</snall> @enderror
        </div>
        @if($form->idaVuelta)
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="date" placeholder="Fecha vuelta" aria-label="Fecha de vuelta" wire:model="form.fechaVuelta">
            @error('form.fechaVuelta') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        @endIf
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Adultos" wire:model="form.adultos">
                <option selected value="0">-Adultos -</option>
                @for($i=1; $i<=50; $i++) 
                    <option value="{{$i}}" wire:key="{{$i}}">{{$i}}</option>
                @endFor
            </select>
            @error('form.adultos') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Menores" wire:model="form.ninos">
                <option selected>- Menores -</option>
                @for($i=1; $i<=50; $i++) 
                    <option value="{{$i}}" wire:key="{{$i}}">{{$i}}</option>
                @endFor
            </select>
            @error('form.ninos') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>
    <div class="pt-3 text-center">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </div>
    <div class="bg-loader" wire:loading>
        <div class="card">
            <div class="card-body p-5">
                <div class="spinner-border text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</form>