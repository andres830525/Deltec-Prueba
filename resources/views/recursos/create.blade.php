@extends('layouts.sidebar', ['activePage' => 'personas', 'titlePage' => 'Nueva Persona'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('recursos.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Recursos</h4>
              <p class="card-category">Ingresar datos de el nuevo Recurso </p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Recurso Id</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="id" placeholder="Ingrese el Id"
                    autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Recurso Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre"
                    autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Recurso Categoria</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="category" placeholder="Ingrese la Categoria"
                    autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Recurso Marca</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="brand" placeholder="Ingrese la Marca"
                    autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Recurso Serie</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="serie" placeholder="Ingrese la Serie"
                    autocomplete="off" autofocus>
                </div>
              </div>
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
