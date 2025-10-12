@extends('layouts.adminlte')

@section('title', 'Dashboard - Alas Chiquitanas')

@section('page_title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>Solicitudes Nuevas</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <a href="{{ route('solicitudes.listado') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53</h3>
                <p>Donaciones Recibidas</p>
            </div>
            <div class="icon">
                <i class="fas fa-gift"></i>
            </div>
            <a href="{{ route('donaciones.listado') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3 class="text-white">44</h3>
                <p class="text-white">Solicitudes en Proceso</p>
            </div>
            <div class="icon">
                <i class="fas fa-spinner"></i>
            </div>
            <a href="{{ route('seguimiento') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Entregas Completadas</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <a href="{{ route('seguimiento') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Solicitudes por Tipo de Emergencia
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <canvas id="chartEmergencias" style="height: 300px;"></canvas>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- TO DO List -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-clipboard-list mr-1"></i>
                    Últimas Solicitudes
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                    <li>
                        <span class="text">Comunidad San José - Incendio</span>
                        <small class="badge badge-danger"><i class="far fa-clock"></i> hace 2 minutos</small>
                    </li>
                    <li>
                        <span class="text">Comunidad El Carmen - Inundación</span>
                        <small class="badge badge-info"><i class="far fa-clock"></i> hace 1 hora</small>
                    </li>
                    <li>
                        <span class="text">Comunidad Santa Ana - Sequía</span>
                        <small class="badge badge-warning"><i class="far fa-clock"></i> hace 3 horas</small>
                    </li>
                    <li>
                        <span class="text">Comunidad San Pedro - Granizada</span>
                        <small class="badge badge-primary"><i class="far fa-clock"></i> hace 1 día</small>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="{{ route('solicitudes.listado') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Ver todas</a>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.Left col -->

    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        <!-- Calendar -->
        <div class="card bg-gradient-success">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Acciones Rápidas
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
                <div class="mt-3">
                    <a href="{{ route('solicitudes.formulario') }}" class="btn btn-light btn-block">
                        <i class="fas fa-plus-circle"></i> Nueva Solicitud de Insumos
                    </a>
                    <a href="{{ route('donaciones.listado') }}" class="btn btn-light btn-block">
                        <i class="fas fa-gift"></i> Ver Donaciones
                    </a>
                    <a href="{{ route('seguimiento') }}" class="btn btn-light btn-block">
                        <i class="fas fa-route"></i> Seguimiento de Entregas
                    </a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- solid sales graph -->
        <div class="card bg-gradient-info">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="fas fa-th mr-1"></i>
                    Estadísticas del Mes
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Solicitudes</div>
                        <div class="text-white"><h3>234</h3></div>
                    </div>
                    <div class="col-6 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Donaciones</div>
                        <div class="text-white"><h3>123</h3></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->

        <!-- Map card -->
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Provincias con más Solicitudes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Provincia</th>
                                <th>Solicitudes</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chiquitos</td>
                                <td>45</td>
                                <td><span class="badge badge-success">En Proceso</span></td>
                            </tr>
                            <tr>
                                <td>Ñuflo de Chávez</td>
                                <td>32</td>
                                <td><span class="badge badge-warning">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>Velasco</td>
                                <td>28</td>
                                <td><span class="badge badge-success">En Proceso</span></td>
                            </tr>
                            <tr>
                                <td>Guarayos</td>
                                <td>21</td>
                                <td><span class="badge badge-info">Completado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
@endsection

@push('scripts')
<script>
    // Gráfico de ejemplo (opcional)
    // Puedes agregar Chart.js o cualquier otra librería de gráficos más adelante
</script>
@endpush

