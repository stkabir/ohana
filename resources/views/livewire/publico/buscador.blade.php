<form class="container">
    <div class="row py-2">
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Ida y vuelta
                </label>
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Solo ida
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4 py-2">
            <select class="form-select" aria-label="Default select example">
                <option selected value="0">- Tipo de servicio -</option>
                <option value="1">Aeropuerto a hotel</option>
                <option value="2">Hotel a aeropuerto</option>
                <option value="3">Hotel a hotel</option>
            </select>
        </div>
        <div class="col-6 col-sm-4 py-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>- Origen -</option>
            </select>
        </div>
        <div class="col-6 col-sm-4 py-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>- Destino -</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="text" placeholder="Fecha ida" aria-label="default input example">
        </div>
        <div class="col-6 col-sm-3 py-2">
            <input class="form-control" type="text" placeholder="Fecha vuelta" aria-label="default input example">
        </div>
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>-Adultos -</option>
            </select>
        </div>
        <div class="col-6 col-sm-3 py-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>- Menores -</option>
            </select>
        </div>
    </div>
    <div class="pt-3 text-center">
        <buton class="btn btn-primary">Buscar</buton>
    </div>
</form>