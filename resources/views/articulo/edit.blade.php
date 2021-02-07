@extends('layout.plantillabase');

@section('contenido')
<h2>MODIFICAR REGISTROS</h2>

<form action="/articulos/{{$articulo->id}}/edit" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" name="codigo" id="codigo" class="form-control" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" name="precio" id="precio" class="form-control" value="{{$articulo->precio}}">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@endsection