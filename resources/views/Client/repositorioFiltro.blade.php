@extends('Client.index')
@section('content')
    <style>
        .pagination {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            flex-direction: row;
            align-content: space-between;
        }
        .buscador{
            display: flex;
    justify-content: flex-end;
        }
        .Contenedor_buscador{
            display: flex;
        }
    </style>
    <div class="container" style="margin-top: 30px">
        <div class="card">
            <div class="card-header">
                <h2>Repositorio de Archivos NIMBU</h2>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="buscador">
                        <form  id="buscar" name="buscar">
                       <div class="Contenedor_buscador">
                       <input type="text" class="form-control" id="filtro" name="filtro" placeholder="Buscar..." style="margin: 0px 5px 0px 0px;">
                       <button type="button" class="btn btn-primary font-weight-bold" id="consultar">Consultar</button>
                       </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    <th>Icono</th>
                                    <th>Autor</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Ver</th>
                                    <th>Descargar</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($repositorio as $repo)
                                    <tr>
                                        <td><img src="../../../images/pdf.png" width="25px" height="25px" alt="">
                                        </td>
                                        <td>{{ $repo->autor }}</td>
                                        <td>{{ $repo->titulo }}</td>
                                        <td>{{ $repo->descripcion }}</td>
                                        <td>{{ $repo->fecha }}</td>
                                        <td><a href="../../../documentos/repositorioDocumental/{{ $repo->documento }}"
                                                target="_blank">Ver</a></td>
                                        <td><a href="../../../documentos/repositorioDocumental/{{ $repo->documento }}"
                                                download>Descargar</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            {!! $repositorio->links() !!}
        </div>
    </div>
    <script>
                $('#consultar').click(function(e) {
                e.preventDefault();
                var filtro = document.getElementById('filtro').value;
                $.ajax({
                    url: "{{ route('repositorioFiltro') }}",
                    data: 'filtro=' +filtro,
                    type: "GET",
                    dataType: 'json',
                    contentType: "application/json; charset=ytf-8",
                    success: function(data) {
                        $('#buscar').trigger("reset");
                        window.location = '/repositorioNimbuFiltroView?filtro='+filtro;
                    },

                });

            });
    </script>
@stop
