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
            <h4 class="card-title">Personas</h4>
            <p class="card-category">Lista de personas registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">

                <a href="{{ route('personas.create') }}" class="btn btn-primary">Añadir persona</a>

              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Nombre </th>
                  <th> Apellidos </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($personas as $persona)
                  <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->name }}</td>
                    <td>{{ $persona->lastname }}</td>

                    <td class="td-actions text-right">

                      <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>


                      <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>

                      <form action="{{ route('personas.destroy', $persona->id) }}" method="post"
                        onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>

                    </td>
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
            {{ $personas->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
