@extends('layout.plantillabase')

@section('contenido')

<h1>VISTA INDEX</h1>

<br>
<a href="articulos\create" class="btn btn-primary">Crear Articulo</a>


<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>      
            <tr>
                <td>{{$articulo-id}}</td>
                <td>{{$articulo-codigo}}</td>
                <td>{{$articulo-descripcion}}</td>
                <td>{{$articulo-cantidad}}</td>
                <td>{{$articulo-precio}}</td>
                <td>
                    <a class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>               
                </td>
            </tr>      
    </tbody>
</table>

@endsection