@extends('layouts.sidebar', ['activePage' => 'prestamos', 'titlePage' => 'Trasladar Recursos'])
@section('content')
<div class="content">
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <form method="POST" action="{{ route('prestamos.update', $prestamo->id) }}" class="form-horizontal">
                              @csrf
                              @method('PUT')
                              <div class="card">
                                    <!--Header-->
                                    <div class="card-header card-header-primary">
                                          <h4 class="card-title">Traslado de Recurso </h4>
                                          <p class="card-category">Selecione la persona a la cual se le Realizara el Traslado del Recurso</p>
                                    </div>
                                    <!--End header-->
                                    <!--Body-->
                                    <div class="card-body">
              <div class="row">
                <label for="Nombres" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-7">
                  <input disabled type="text" class="form-control" name="id" placeholder="Ingrese el nuevo id"
                    value="{{ old('id', $prestamo->id) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <label for="Apellidos" class="col-sm-2 col-form-label">Id Recurso</label>
                <div class="col-sm-7">
                  <input disabled type="text" class="form-control" name="IdRecurso" placeholder="Id de Recurso"
                    value="{{ old('IdRecurso', $prestamo->idRecurso) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>

                                         <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">Estado Recurso</label>
                                                <div class="col-sm-7">
                                                      <select name="estado_recurso" id="estado_recurso">
                                                            <option value="" />Seleccione...

                                                            <option value="Reasignado" selected />Reasignado

                                                      </select>
                                                </div>
                                          </div>
                                    <div class="card-body">
                                          <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-7">
                                                      <select name="idPersona" class="form-select" aria-label="Default select example">
                                                            <option selected>Selecione el Id de la Persona a Asignar</option>
                                                            @foreach($personas as $persona)
                                                            <option value="{{$persona->id}}">{{$persona->name}}</option>
                                                            @endforeach

                                                      </select>
                                                </div>
                                          </div>
                                    </div>


                                    <!--End body-->
                                    <!--Footer-->
                                    <div class="card-footer ml-auto mr-auto">
                                          <button type="submit" class="btn btn-primary">Reasignar</button>
                                    </div>
                              </div>
                              <!--End footer-->
                        </form>
                  </div>
            </div>
      </div>
</div>
@endsection
