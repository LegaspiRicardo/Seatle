<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">


<table class="table-active ">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Contacto</th>
      <th scope="col" class="th_small">Editar</th>
      <th scope="col" class="th_small">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($tutor as $tutor)
  <tr>
      <td>{{$tutor->nombre}}  </td>
      <td>
        <span>{{$tutor->telefono}}     </span>
        <br>
        <span>{{$tutor->correo}}    </span>
      </td>
      
      <td> <a  ><img src="../../../PNGs/editar.png" class="tableIcon"> </a></td >

      <td><a  ><img src="../../../PNGs/delete.png" class="tableIcon"></a></td>
      
  </tr>
@endforeach
  </tbody>
</table>