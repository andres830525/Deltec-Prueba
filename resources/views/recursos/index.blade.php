@extends('layouts.sidebar')
@section('content')


@if(Session::has('message'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
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
            <h4 class="card-title">Recursos</h4>
            <p class="card-category">Lista de Recursos registrados en la base de datos y disponibles para asignar</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">

                <a href="{{ route('recursos.create') }}" class="btn btn-primary">Añadir Recurso</a>

              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Categoria </th>
                  <th> Marca </th>
                   <th> Nombre</th>
                  <th> Serie </th>

                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @foreach($recursos as $recurso)


                  <tr>
                    <td>{{ $recurso->id }}</td>
                    <td>{{ $recurso->category }}</td>
                    <td>{{ $recurso->name }}</td>
                    <td>{{ $recurso->brand }}</td>
                    <td>{{ $recurso->serie }}</td>

                    <td class="td-actions text-right">

                      <a href="{{ route('recursos.show', $recurso->id) }}" class="btn btn-info"> <i
                          class="material-icons">phonelink_setup</i> </a>


                      <a href="{{ route('recursos.edit', $recurso->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>

                      <form action="{{ route('recursos.destroy', $recurso->id) }}" method="post"
                        onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>

                    </td>
                  </tr>

                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                 @endforeach ($recursos as $recurso)
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          {{-- <div class="card-footer mr-auto">
            {{ $recursos->links() }}
          </div> --}}
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
