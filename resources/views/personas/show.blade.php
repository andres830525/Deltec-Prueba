@extends('layouts.sidebar', ['activePage' => 'personas', 'titlePage' => 'Detalles de la Persona'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Personas</h4>
            <p class="card-category">Vista detallada de {{ $persona->name }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <img class="avatar" src="{{ asset('/img/default-avatar.png') }}" alt="">
                          <h5 class="title mt-3">{{ $persona->lastname }}</h5>
                        </a>
                        <p class="description">
                          {{ _('Ceo/Co-Founder') }} <br>
                          {{ $persona->name }}+{{ $persona->lastname }} <br>
                          {{ $persona->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      {{ _('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Recursos Asignados</h4>
            <p class="card-category">Lista de Recursos Asigndos a esta persona</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">

               {{--  <a href="{{ route('recursos.create') }}" class="btn btn-primary">Añadir Recurso</a> --}}

              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> IdRecurso </th>
  {{--                 <th> Recurso nombre</th> --}}
                  <th> IdPersona</th>
                 {{--  <th> Persona nombre</th> --}}
                   <th> Estado_Recurso</th>


                <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($prestamos as $Prestamo)
                  <tr>
                    <td>{{ $Prestamo->id }}</td>
                    <td>{{ $Prestamo->idRecurso }}</td>
                    {{-- <td>{{ $Prestamo->idRecurso->name }}</td> --}}
                    <td>{{ $Prestamo->idPersona }}</td>
                    {{--  <td>{{ $Prestamo->idPersona->name }}</td> --}}
                    <td>{{ $Prestamo->estado_recurso }}</td>


                    <td class="td-actions text-right">


                      <a href="{{ route('prestamos.edit', $Prestamo->id) }}" class="btn btn-success"> <i
                          class="material-icons">import_export</i> </a>



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
         {{--  <div class="card-footer mr-auto">
            {{ $prestamos->links() }}
          </div> --}}
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
