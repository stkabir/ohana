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
                    <select class="form-select @error('form.tipo') is-invalid @enderror" wire:model.live="form.tipo">
                        <option value="">Selecciona un tipo</option>
                        <option value="Privado">Privado</option>
                        <option value="Compartido">Compartido</option>
                    </select>
                    <label>Tipo</label>
                    @error('form.tipo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-center mb-2">
                @if($updateMode)
                    <input type="hidden" wire:model="form.servicio_id">
                    <button wire:click.prevent="store()" class="btn btn-success me-1">Actualizar</button>
                    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
                @else
                    <button wire:click.prevent="store()" class="btn btn-success">Guardar</button>
                @endif
            </div>
        </form>
    </div>
</div>