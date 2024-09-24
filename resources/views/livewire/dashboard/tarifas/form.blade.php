<div class="card">
    <div class="card-header">
        Formulario
    </div>
    <div class="card-body">
        <form class="row">
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <select class="form-select @error('form.servicio_id') is-invalid @enderror" wire:model.live="form.servicio_id">
                        <option value="">Selecciona un servicio</option>
                        @foreach ($servicios as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Servicio</label>
                    @error('form.servicio_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <select class="form-select @error('form.origen_id') is-invalid @enderror" wire:model.live="form.origen_id">
                        <option value="">Selecciona un origen</option>
                        @foreach ($lugares as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Origen</label>
                    @error('form.origen_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <select class="form-select @error('form.destino_id') is-invalid @enderror" wire:model.live="form.destino_id">
                        <option value="">Selecciona un destino</option>
                        @foreach ($lugares as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Destino</label>
                    @error('form.destino_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <select class="form-select @error('form.unidad_id') is-invalid @enderror" wire:model.live="form.unidad_id">
                        <option value="">Selecciona una unidad</option>
                        @foreach ($unidades as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Unidad</label>
                    @error('form.unidad_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <input type="number" class="form-control @error('form.pax1') is-invalid @enderror" wire:model.live="form.pax1" placeholder="pax1">
                    <label>Tarifa 1-8</label>
                    @error('form.pax1') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <input type="number" class="form-control @error('form.pax2') is-invalid @enderror" wire:model.live="form.pax2" placeholder="pax2">
                    <label>Tarifa 9-12</label>
                    @error('form.pax2') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-center mb-2">
                @if($updateMode)
                    <input type="hidden" wire:model="form.lugar_id">
                    <button wire:click.prevent="store()" class="btn btn-success me-1">Actualizar</button>
                    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
                @else
                    <button wire:click.prevent="store()" class="btn btn-success">Guardar</button>
                @endif
            </div>
        </form>
    </div>
</div>