@extends('plantilla.app')
@section('contenido')
<div class="app-content">
<<<<<<< HEAD
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h3 class="card-title">Usuarios</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div>
              <form action="{{ route('usuarios.index')}}" method="get">
                <div class="input-group">
                  <input name="texto" type="text" class="form-control" value="" placeholder="Ingrese texto a buscar">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                      Buscar</button>
                      @can('user-create')
                    <a href="{{ route('usuarios.create')}}" class="btn btn-primary">Nuevo</a>
                    @endcan
                  </div>
                </div>
              </form>
            </div>
            @if (Session::has('mensaje'))
              <div class="alert alert-info alert-dismissible fade show mt-2">
                {{ Session::get('mensaje') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                </button>
              </div>
            @endif
            <div class="table-responsive mt-3">
              <table class="table table-bordered">
                <thead>
                  <th style="width: 130px;">Opciones</th>
                  <th style="width: 20px;">ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Roles</th>
                  <th>Activo</th>
                </thead>
                <tbody>
                  @if (count($registros)<=0)
                    <tr>
                    <td colspan="4">No hay registros que coincidan con la busqueda</td>
                    </tr>
                    @else
                    @foreach ($registros as $reg)
                    <tr class="aling-middle">
                      <td>
                      @can('user-edit')
                        <a href="{{ route('usuarios.edit', $reg->id) }}" class="btn btn-info btn-sm">
                          <i class="bi bi-pencil-fill"></i>
                        </a>
                      @endcan
                      @can('user-delete')
                        <button class="btn btn-danger btn-sm" data-bs-target="#modal-eliminar-{{ $reg->id }}" data-bs-toggle="modal">
                          <i class="bi bi-trash-fill"></i>
                        </button>
                      @endcan
                      @can('user-activate')
                        <button class="btn {{ $reg->activo ? 'btn-success' : 'btn-warning' }} btn-sm" data-bs-target="#modal-toggle-{{ $reg->id }}" data-bs-toggle="modal">
                          <i class="bi {{ $reg->activo ? 'bi-check-circle' : 'bi-ban' }}"></i>
                        </button>
                      @endcan
                      </td>
                      <td>{{$reg -> id}}</td>
                      <td>{{$reg -> name}}</td>
                      <td>{{$reg -> email}}</td>
                      <td>
                        @if($reg->roles->isNotEmpty())
                          <span class="badge bg-primary">
                            {{$reg->roles->pluck('name')->implode('</span> <span class="badge bg-primary">') }}
                          </span>
                        @else
                          <span class="badge bg-secondary">Sin Rol</span>
                        @endif
                      </td>
                      <td>
                        <span class="badge {{ $reg->activo ? 'bg-success' : 'bg-danger'}}">{{$reg -> activo ? 'Activo' : 'Inactivo'}}</span>
                      </td>
                    </tr>
                    @can('user-delete')
                    @include('usuario.delete')
                    @endcan
                    @can('user-activate')
                    @include('usuario.activate')
                    @endcan
                  @endforeach
                @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {{ $registros->appends(['texto' => $texto]) }}
            </div>
            
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>

  @endsection

  @push('scripts')
<script>
  document.getElementById('menuSeguridad').classList.add('menu-open');
  document.getElementById('itemUsuario').classList.add('active');
</script>
@endpush
=======
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value=""
                                        placeholder="Ingrese texto a buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                            Buscar</button>
                                        <a href="" class="btn btn-primary">Nuevo</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive mt-2">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 400px">Opciones</th>
                                        <th style="width: 150px">ID</th>
                                        <th style="width: 400px">Nombre</th>
                                        <th style="width: 500px">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#"class="btn btn-warning btn-md">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <button class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#modal-eliminar-01">
                                                <i class="bi bi-trash-fill"></i>

                                            </button>
                                        </td>
                                        <td>1</td>
                                        <td>Brayan Vergel G.</td>
                                        <td>MrBrianVeGa@gmail.com</td>

                                    </tr>
                                    @include('usuario.delete')
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
