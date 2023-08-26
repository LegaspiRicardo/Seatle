<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">


<table class="table-active ">
    <thead>
        <tr>
            <th scope="col">Nivel</th>
            <th scope="col">Imagen</th>
            <th scope="col">Color</th>
            <th scope="col">Descripcion</th>
            <th scope="col" class="th_small">Editar</th>
            <th scope="col" class="th_small">Borrar</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($niveles as $nivel)
        <tr>
            <td>{{$nivel->nivel}} </td>
            <td> <img src="/admin/files/niveles/{{$nivel->img}}" alt="" class="imagen text-center p-0"> </td>
            <td>{{$nivel->color}} </td>
            <td>{{$nivel->descripcion}}</td>
            <td> @include ('privado.nivel.edit')</td>

            <td>@include ('privado.nivel.show')</td>

        </tr>
@endforeach
    </tbody>
</table>