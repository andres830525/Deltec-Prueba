@extends('layouts.sidebar', ['activePage' => 'posts', 'titlePage' => 'Editar Post'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('personas.update', $persona->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar el perfil </h4>
              <p class="card-category">Editar datos del Persona</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="Nombres" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre"
                    value="{{ old('name', $persona->name) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <label for="Apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="lastname" placeholder="Ingrese el Apellido"
                    value="{{ old('lastname', $persona->lastname) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
