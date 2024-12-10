<div class="container-xxl pt-4">
    <div class="row">
        @foreach ($cards as $c)
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 py-3">
            <div class="card">
                <img src="{{ asset('temporal/van.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$c->unidad->nombre}}</h5>
                  <p class="card-text">{{$c->origen->descripcion}}</p>
                  <p>{{ $this->obtienePax($c->pax1, $c->pax2, $parametros["adultos"]+$parametros["ninos"]) }} pax</p>
                  <p>Precio: {{$this->obtienePrecio($c->pax1, $c->pax2, $parametros["adultos"]+$parametros["ninos"], $c->precio1, $c->precio2 )}}</p>
                  <div class="text-end">
                    <button 
                      type="button" 
                      class="btn btn-primary" 
                      wire:click='reservar({{$c->id}}, {{$parametros["adultos"]+$parametros["ninos"]}}, {{$parametros['idaVuelta']}}, {{$parametros['tipoServicios']}}, {{$parametros['fechaIda']}}, {{$parametros['fechaVuelta']}})'
                    >Reservar</button>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>