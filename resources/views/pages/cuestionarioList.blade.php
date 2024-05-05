@extends('layouts.master')

@section('title-page', 'Home')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
<h1>MIS RESPUESTAS ANTERIORES</h1><br><br>            
            <div class="box-body table-responsive">
              <table class="table table-bordered table-hover">
                <tbody><tr>
                  <th style="width: 60px">ID</th>
                  <th>Desanimado</th>
                  <th>Ansioso</th>
                  <th>Dormir</th>
                  <th>Energia</th>
                  <th>Concentracion</th>
                  <th>Apetito</th>
                  <th>Irritable</th>
                  <th>Daño Propio</th>
                  <th>Ansiedad</th>
                  <th>Fecha</th>
                </tr>
                    @foreach($results as $result)
                <tr>
                  <td>{{ $result->id }}</td>
                  <td>{{ $result->desanimado }}</td>
                  <td>{{ $result->ansioso }}</td>
                  <td>{{ $result->dormir }}</td>
                  <td>{{ $result->energia }}</td>
                  <td>{{ $result->concentracion }}</td>
                  <td>{{ $result->apetito }}</td>
                  <td>{{ $result->irritable }}</td>
                  <td>{{ $result->danio_asimismo }}</td>
                  <td>{{ $result->ansiedad_generalizada }}</td>
                  <td>{{ $result->created_at }}</td>

                </tr>
               @endforeach

              </tbody>
          </table>
            </div> 
<script>
function eliminar(id){
    if (confirm('Seguro desea eliminar su respuesta!') == true) {
      document.getElementById('form-destroy-'+id).submit();
    }
}
</script>

@endsection