<form wire:submit="procederPago">
    @csrf
    <div class="container">
        <div class="text-center">
            <h1>Reservación</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Tus datos</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Ingresa tu nombre" wire:model="form.nombre">
                            @error('form.nombre') <small class="small-text text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Ingresa tus apellidos" wire:model="form.apellido">
                            @error('form.apellido') <small class="small-text text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" wire:model="form.email">
                            @error('form.email') <small class="small-text text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Ingresa tu teléfono" wire:model="form.telefono">
                            @error('form.telefono') <small class="small-text text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Datos de tu reserva</h2>
                @if($form->tipoServicio!='3')
                    @if($form->validacionLlegada())
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <div class="mb-3">
                                <label for="aerolinea" class="form-label">Aerolinea de llegada</label>
                                <input type="text" class="form-control" id="aerolinea" placeholder="¿Cual es tu aerolinea de llegada?" wire:model="form.aerolinea1">
                                @error('form.aerolinea1') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="mb-3">
                                <label for="numerovuelo" class="form-label">Número de vuelo</label>
                                <input type="text" class="form-control" id="numerovuelo" placeholder="Número de vuelo" wire:model="form.numeroVuelo1">
                                @error('form.numeroVuelo1') <small class="small-text text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($form->validacionSalida())
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <div class="mb-3">
                                <label for="aerolinea2" class="form-label">Aerolinea de salida</label>
                                <input type="text" class="form-control" id="aerolinea2" placeholder="¿Cual es tu aerolinea de llegada?" wire:model="form.aerolinea2">
                                @error('form.aerolinea2') <small class="small-text text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="mb-3">
                                <label for="numerovuelo" class="form-label">Número de vuelo</label>
                                <input type="text" class="form-control" id="numerovuelo2" placeholder="Número de vuelo"  wire:model="form.numeroVuelo2">
                                @error('form.numeroVuelo2') <small class="small-text text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                    @endif
                @else
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label for="hora1" class="form-label">Hora de salida del hotel</label>
                                <input type="text" class="form-control" id="hora1" placeholder="Número de vuelo"  wire:model="form.hora1">
                                @error('form.hora1') <small class="small-text text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        @if($form->idaVuelta== '1')
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label for="hora" class="form-label">Hora de regreso al hotel</label>
                                <input type="text" class="form-control" id="hora2" placeholder="Número de vuelo"  wire:model="form.hora2">
                                @error('form.hora2') <small class="small-text text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        @endif
                    </div>
                @endif
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario adicional</label>
                    <textarea id="comentario" class="form-control"  wire:model="form.comentario"></textarea>
                    @error('form.comentario') <small class="small-text text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <h2>Pasajeros</h2>
            @error('form.personas') <small class="small-text text-danger">{{ $message }}</small> @enderror
            @for($i=0; $i<$form->numeroPersonas;$i++)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="mb-3">
                        <label for="pasajero[{{$i}}]" class="form-label">Pasajero #{{$i+1}}</label>
                        <input type="text" class="form-control" id="pasajero[{{$i}}]" placeholder="Nombre del pasajero"  wire:model="form.personas.{{$i}}">
                        @if($errors->has('form.personas.'.$i))
                            <small class="small-text text-danger">El nombre del pasajero #{{$i+1}} es obligatorio</small>
                        @endIf
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Proceder al pago</button>
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
    </div>
</form>