<div class="card">
    <div class="card-header">
        Formulario
    </div>
    <div class="card-body">
        <form class="row">
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <input class="form-control @error('form.nombre') is-invalid @enderror" wire:model.live="form.nombre" placeholder="nombre">
                    <label>Nombre</label>
                    @error('form.nombre') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-2">
                    <select class="form-select @error('form.zona_id') is-invalid @enderror" wire:model.live="form.zona_id">
                        <option value="">Selecciona una zona</option>
                        @foreach($zonas as $zona)
                            <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                    @error('form.zona_id') <span class="text-danger">{{ $message }}</span>@enderror
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