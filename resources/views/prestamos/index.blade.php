@extends('layouts.sidebar')
@section('content')


@if(Session::has('message'))
<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" /></svg>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      {{Session::get('message')}}
</div>
@endif
<div class="content">
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <div class="card">
                              <div class="card-header card-header-primary">
                                    <h4 class="card-title">Recursos Asignados</h4>
                                    <p class="card-category">Lista de Recursos Asigndos a Personas</p>
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


                                                      {{-- <th class="text-right"> Acciones </th> --}}
                                                </thead>
                                                <tbody>
                                                      @forelse ($prestamos as $Prestamo)
                                                      <tr>
                                                            <td>{{ $Prestamo->id }}</td>
                                                            <td>{{ $Prestamo->idRecurso }}</td>
                                                            {{-- <td>{{ $Prestamo->idRecurso->name }}</td> --}}
                                                            <td>{{ $Prestamo->idPersona }}</td>
                                                            {{-- <td>{{ $Prestamo->idPersona->name }}</td> --}}
                                                            <td>{{ $Prestamo->estado_recurso }}</td>


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
                              <div class="card-footer mr-auto">
                                    {{ $prestamos->links() }}
                              </div>
                              <!--End footer-->
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="content">
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <form method="POST" action="{{ route('prestamos.store') }}" class="form-horizontal">
                              @csrf
                              <div class="card ">
                                    <!--Header-->
                                    <div class="card-header card-header-primary">
                                          <h4 class="card-title">Asignar Recurso</h4>
                                          <p class="card-category">Ingresar datos de el Recurso a Asignar </p>
                                    </div>
                                    <!--End header-->
                                    <!--Body-->
                                    <div class="card-body">
                                          <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">Prestamo ID </label>
                                                <div class="col-sm-7">
                                                      <input type="text" class="form-control" name="id" placeholder="Ingrese el Id de la asignacion" autocomplete="off" autofocus>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">ID de el Recurso que se Asigna</label>
                                                <div class="col-sm-7">
                                                      <select name="idRecurso" class="form-select" aria-label="Default select example">
                                                            <option selected>Selecione Id del Recurso a Asignar</option>
                                                            @foreach($recursos as $recurso)
                                                            <option value="{{$recurso->id}}">{{$recurso->name}}</option>
                                                            @endforeach
                                                      </select>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label"> ID de la Persona a la que se le Asigna</label>
                                                <div class="col-sm-7">
                                                      <select name="idPersona" class="form-select" aria-label="Default select example">
                                                            <option selected>Selecione el Id de la Persona a Asignar</option>
                                                            @foreach($personas as $persona)
                                                            <option value="{{$persona->id}}">{{$persona->name}}</option>
                                                            @endforeach

                                                      </select>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">Estado Recurso</label>
                                                <div class="col-sm-7">
                                                      <select name="estado_recurso" id="estado_recurso">
                                                            <option value="" />Seleccione...

                                                            <option value="Asignado" selected />Asignado

                                                      </select>
                                                </div>
                                          </div>

                                    </div>

                                    <!--End body-->

                                    <!--Footer-->
                                    <div class="card-footer ml-auto mr-auto">
                                          <button type="submit" class="btn btn-primary">Asignar</button>
                                    </div>
                                    <!--End footer-->
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
@endsection
