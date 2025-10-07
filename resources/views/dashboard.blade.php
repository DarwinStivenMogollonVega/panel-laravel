@extends('plantilla.app')
@section('contenido')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              
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
        //document.getElementById('mnuDashboardV2').classList.add('active');
    </script>
  @endpush
=======
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
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
<<<<<<< HEAD
<<<<<<< HEAD

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                           
                        </div>
=======
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
>>>>>>> 3197f29 (Se actualizó y arreglo rutas)
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
=======
                            @if (@Session::has('mensaje'))
                                <div class="alert alert-info alert-dismissible fade show mt-2">
                                    {{Session::get('mensaje')}}
                                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="close">

                                    </button>

                                </div>
                            @endif
>>>>>>> e3e89d5 ( Se agrego la vista de registro y se agregaron validaciones para password)

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
    <script>
        document.getElementById('mnuDashboard').classList.add('menu-open');
    </script>
@endpush
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
>>>>>>> f43cbde (Se actualizó el proyecto)
=======
<script>
    // document.getElementById('mnuDashboard').classList.add('active');
</script>
@endpush
>>>>>>> 3197f29 (Se actualizó y arreglo rutas)
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
