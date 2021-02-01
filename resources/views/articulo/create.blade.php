@extends('layout.plantillabase');


@section('contenido')
<h2>CREAR REGISTROS</h2>

    <form action="/articulos" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" name="codigo" id="codigo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" name="precio" id="precio" class="form-control">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@endsection