@extends('plantilla.app')

@section('contenido')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">

                        <div class="card-header">
                            <h3 class="card-title">Panel de Control</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            @if (Session::has('mensaje'))
                                <div class="alert alert-info alert-dismissible fade show mt-2">
                                    {{ Session::get('mensaje') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                </div>
                            @endif

                            <p>Bienvenido al sistema. Aquí podrás ver un resumen general de tu aplicación.</p>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            <small>Última actualización: {{ now()->format('d/m/Y H:i') }}</small>
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

@push('scripts')
    <script>
        // Marca el menú activo en la barra lateral
        document.getElementById('mnuDashboard')?.classList.add('menu-open');
    </script>
@endpush