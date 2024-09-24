<div>
    @include('livewire.dashboard.zonas.form')
    <div class="card mt-4">
        <div class="card-header">
            <h2 class="text-center">Zonas</h2>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-1">
                <div class="input-group" style="width: 300px;">
                    <span class="input-group-text bg-white border-end-0 pe-0"><i class="bi bi-search"></i></span>
                    <input wire:model.live.debounce.200ms="search" type="search" class="form-control border-start-0" placeholder="Buscar...">
                </div>
                {{-- <div class="input-group" style="width: 200px">
                    <span class="input-group-text">Tipo: </span>
                    <select wire:model.live="type" class="form-select">
                        <option value="">All</option>
                        <option value="1">Pagina</option>
                        <option value="2">Section</option>
                    </select>
                </div> --}}
            </div>
            <table class="table table-bordered table-hover my-1">
                <thead>
                    <tr>
                        @foreach ($columns as $col)
                            @include('livewire.dashboard.includes.table-sortable-th', [
                                'name' => $col['name'],
                                'label' => $col['label']
                            ])
                        @endforeach
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                                <td>
                                    <button wire:click="edit({{ $item->id }})" class="btn btn-primary btn-sm">Editar</button>
                                    {{-- <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Eliminar</button> --}}
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between" style="height: 38px;">
                <div class="input-group" style="width: 160px;">
                    <span class="input-group-text">Mostrar</span>
                    <select wire:model.live='perPage' class="form-select">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>