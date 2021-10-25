@extends('layouts.sidebar')
@section('content')



<div class="content">
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <div class="card">
                              <div class="card-header card-header-primary">
                                    <h4 class="card-title">Historial de Recursos Asignados</h4>
                                    <p class="card-category">Historial de Todas las Asignaciones de Recuros</p>
                              </div>
                              <div class="card-body">
                                    <div class="row">
                                          <div class="col-12 text-right">

                                                {{-- <a href="{{ route('recursos.create') }}" class="btn btn-primary">Añadir Recurso</a> --}}

                                          </div>
                                    </div>
                                    <div class="table-responsive">
                                          <table class="table ">
                                                <thead class="text-primary">
                                                      <th> ID </th>
                                                      <th> IdRecurso </th>
                                                      {{-- <th> Recurso nombre</th> --}}
                                                      <th> IdPersona</th>
                                                      {{-- <th> Persona nombre</th> --}}
                                                      <th> Estado_Recurso</th>
                                                      <th> Creacion</th>
                                                      <th> Ultima Actualizacion</th>




                                                      {{-- <th class="text-right"> Acciones </th> --}}
                                                </thead>
                                                <tbody>
                                                      @forelse ($historials as $historial)
                                                      <tr>
                                                            <td>{{ $historial->id }}</td>
                                                            <td>{{ $historial->idRecurso }}</td>
                                                            {{-- <td>{{ $Prestamo->idRecurso->name }}</td> --}}
                                                            <td>{{ $historial->idPersona }}</td>
                                                            {{-- <td>{{ $Prestamo->idPersona->name }}</td> --}}
                                                            <td>{{ $historial->estado_recurso }}</td>
                                                            <td>{{ $historial->created_at }}</td>
                                                            <td>{{ $historial->updated_at }}</td>


                                                            {{-- <td class="td-actions text-right">

                      <a href="{{ route('recursos.show', $recurso->id) }}" class="btn btn-info"> <i class="material-icons">phonelink_setup</i> </a>


                                                            <a href="{{ route('recursos.edit', $recurso->id) }}" class="btn btn-success"> <i class="material-icons">edit</i> </a>

                                                            <form action="{{ route('recursos.destroy', $recurso->id) }}" method="post" onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                                                                  @csrf
                                                                  @method('DELETE')
                                                                  <button type="submit" rel="tooltip" class="btn btn-danger">
                                                                        <i class="material-icons">close</i>
                                                                  </button>
                                                            </form>

                                                            </td> --}}
                                                      </tr>
                                                      @empty
                                                      <tr>
                                                            <td colspan="2">Sin registros.</td>
                                                      </tr>
                                                      @endforelse
                                                </tbody>
                                          </table>
                                          {{-- {{ $users->links() }} --}}
                                    </div>
                              </div>
                              <!--Footer-->
                              {{-- <div class="card-footer mr-auto">
                                    {{ $historial->links() }}
                        </div> --}}
                        <!--End footer-->
                  </div>
            </div>
      </div>
</div>
</div>


@endsection
