@extends('layouts.adminlte')

@section('title', 'Dashboard - Alas Chiquitanas')

@section('page_title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<!-- Pestañas de Navegación -->
<div class="row mb-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills nav-justified" id="dashboard-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="resumen-tab" onclick="cambiarVista('resumen')" href="#" role="tab">
                            <i class="fas fa-chart-line mr-1"></i>Resumen General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="solicitudes-tab" onclick="cambiarVista('solicitudes')" href="#" role="tab">
                            <i class="fas fa-file-alt mr-1"></i>Solicitudes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="donaciones-tab" onclick="cambiarVista('donaciones')" href="#" role="tab">
                            <i class="fas fa-gift mr-1"></i>Donaciones
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Sidebar de Métricas -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-bar mr-2"></i>Métricas a Mostrar
                </h3>
                <div class="card-tools">
                    <button class="btn btn-success btn-sm" onclick="toggleAll()">
                        <i class="fas fa-check"></i> Todo
                    </button>
                </div>
            </div>
            <div class="card-body" id="sidebar-metricas">
                <!-- Contenido dinámico del sidebar -->
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="col-md-9">
        <!-- Métricas Principales -->
        <div class="row" id="metricas-principales">
            <!-- Contenido dinámico de métricas -->
        </div>
        <!-- /.row -->

        <!-- Gráficos -->
        <div class="row" id="graficos">
            <!-- Contenido dinámico de gráficos -->
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
let currentView = 'resumen';
let charts = {};

const dashboardData = {
    resumen: {
        sidebar: `
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesRecibidas" checked>
                    <label class="custom-control-label" for="solicitudesRecibidas">Solicitudes Recibidas</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="donacionesEntregadas" checked>
                    <label class="custom-control-label" for="donacionesEntregadas">Donaciones Entregadas</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tiempoRespuesta" checked>
                    <label class="custom-control-label" for="tiempoRespuesta">Tiempo Promedio Respuesta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tiempoEntrega" checked>
                    <label class="custom-control-label" for="tiempoEntrega">Tiempo Promedio Entrega</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesMes" checked>
                    <label class="custom-control-label" for="solicitudesMes">Solicitudes por Mes</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="productosSolicitados" checked>
                    <label class="custom-control-label" for="productosSolicitados">Productos Más Solicitados</label>
                </div>
            </div>
        `,
        metricas: `
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>4</h3>
                        <p>Total Solicitudes Atendidas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <a href="{{ route('solicitudes.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total de Donaciones Entregadas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <a href="{{ route('donaciones.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-dark" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%) !important;">
                    <div class="inner">
                        <h3 class="text-white">&lt;1 día</h3>
                        <p class="text-white">Tiempo Promedio Respuesta</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <a href="#" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary" style="background: linear-gradient(135deg, #1e40af 0%, #60a5fa 100%) !important;">
                    <div class="inner">
                        <h3>&lt;1 día</h3>
                        <p>Tiempo Promedio Entrega</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <a href="{{ route('seguimiento') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        `,
        graficos: `
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Solicitudes por Mes
                        </h3>
                    </div>
                    <div class="card-body">
                        <canvas id="chartSolicitudesMes" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Productos Más Solicitados
                        </h3>
                    </div>
                    <div class="card-body">
                        <canvas id="chartProductos" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        `
    },
    solicitudes: {
        sidebar: `
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesSinResponder" checked>
                    <label class="custom-control-label" for="solicitudesSinResponder">Solicitudes Sin Responder</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesAprobadas" checked>
                    <label class="custom-control-label" for="solicitudesAprobadas">Solicitudes Aprobadas</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesRechazadas" checked>
                    <label class="custom-control-label" for="solicitudesRechazadas">Solicitudes Rechazadas</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="estadoSolicitudes" checked>
                    <label class="custom-control-label" for="estadoSolicitudes">Estado de Solicitudes</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="solicitudesProvincia" checked>
                    <label class="custom-control-label" for="solicitudesProvincia">Solicitudes por Provincia</label>
                </div>
            </div>
        `,
        metricas: `
            <div class="col-lg-4 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Solicitudes Sin Responder</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <a href="{{ route('solicitudes.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Solicitudes Aprobadas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <a href="{{ route('solicitudes.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-secondary" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%) !important;">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Solicitudes Rechazadas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <a href="{{ route('solicitudes.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        `,
        graficos: `
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Estado de Solicitudes
                        </h3>
                    </div>
                    <div class="card-body">
                        <canvas id="chartEstadoSolicitudes" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Solicitudes por Provincia
                        </h3>
                    </div>
                    <div class="card-body">
                        <canvas id="chartSolicitudesProvincia" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        `
    },
    donaciones: {
        sidebar: `
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="donacionesPendientes" checked>
                    <label class="custom-control-label" for="donacionesPendientes">Donaciones Pendientes</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="donacionesEntregadasTab" checked>
                    <label class="custom-control-label" for="donacionesEntregadasTab">Donaciones Entregadas</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="estadoDonaciones" checked>
                    <label class="custom-control-label" for="estadoDonaciones">Estado de Donaciones</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="infoDonaciones" checked>
                    <label class="custom-control-label" for="infoDonaciones">Información de Donaciones</label>
                </div>
            </div>
        `,
        metricas: `
            <div class="col-lg-6 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Donaciones Pendientes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <a href="{{ route('donaciones.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Donaciones Entregadas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <a href="{{ route('donaciones.listado') }}" class="small-box-footer" style="border-top: 2px solid #ffc107;">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        `,
        graficos: `
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Estado de Donaciones
                        </h3>
                    </div>
                    <div class="card-body">
                        <canvas id="chartEstadoDonaciones" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle mr-1"></i>
                            Información de Donaciones
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Estado</th>
                                        <th>Cantidad</th>
                                        <th>Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-primary">Pendientes</span></td>
                                        <td>3</td>
                                        <td>75%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Entregadas</span></td>
                                        <td>1</td>
                                        <td>25%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 75%"></div>
                                <div class="progress-bar bg-info" style="width: 25%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `
    }
};

$(document).ready(function() {
    // Cargar vista inicial
    cambiarVista('resumen');
});

function cambiarVista(vista) {
    currentView = vista;
    
    // Actualizar pestañas activas
    $('.nav-link').removeClass('active');
    $('#' + vista + '-tab').addClass('active');
    
    // Cargar contenido
    const data = dashboardData[vista];
    $('#sidebar-metricas').html(data.sidebar);
    $('#metricas-principales').html(data.metricas);
    $('#graficos').html(data.graficos);
    
    // Recrear gráficos después de un pequeño delay
    setTimeout(() => {
        crearGraficos(vista);
        configurarSwitches(vista);
    }, 100);
}

function crearGraficos(vista) {
    // Destruir gráficos existentes
    Object.values(charts).forEach(chart => {
        if (chart) chart.destroy();
    });
    charts = {};
    
    if (vista === 'resumen') {
        // Gráfico de Solicitudes por Mes
        const ctxSolicitudes = document.getElementById('chartSolicitudesMes');
        if (ctxSolicitudes) {
            charts.solicitudesMes = new Chart(ctxSolicitudes.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['09/2025'],
                    datasets: [{
                        label: 'Solicitudes',
                        data: [4.0],
                        backgroundColor: '#007bff',
                        borderColor: '#0056b3',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 4.5,
                            ticks: { stepSize: 0.5 }
                        }
                    }
                }
            });
        }
        
        // Gráfico de Productos
        const ctxProductos = document.getElementById('chartProductos');
        if (ctxProductos) {
            charts.productos = new Chart(ctxProductos.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['3', '15', 'No hay datos del almacén', 'Arroz', 'Lentejas'],
                    datasets: [{
                        data: [20, 25, 15, 25, 15],
                        backgroundColor: ['#007bff', '#0056b3', '#28a745', '#17a2b8', '#ffc107']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });
        }
    } else if (vista === 'solicitudes') {
        // Gráfico Estado de Solicitudes
        const ctxEstado = document.getElementById('chartEstadoSolicitudes');
        if (ctxEstado) {
            charts.estadoSolicitudes = new Chart(ctxEstado.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['Sin Responder', 'Aprobadas', 'Rechazadas'],
                    datasets: [{
                        data: [2, 2, 2],
                        backgroundColor: ['#007bff', '#0056b3', '#1e3a8a']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });
        }
        
        // Gráfico por Provincia
        const ctxProvincia = document.getElementById('chartSolicitudesProvincia');
        if (ctxProvincia) {
            charts.solicitudesProvincia = new Chart(ctxProvincia.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Provincia Andrés Ibáñez', 'Velasco'],
                    datasets: [{
                        label: 'Solicitudes',
                        data: [1.0, 1.0],
                        backgroundColor: ['#007bff', '#17a2b8']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 1.1,
                            ticks: { stepSize: 0.1 }
                        }
                    }
                }
            });
        }
    } else if (vista === 'donaciones') {
        // Gráfico Estado de Donaciones
        const ctxEstado = document.getElementById('chartEstadoDonaciones');
        if (ctxEstado) {
            charts.estadoDonaciones = new Chart(ctxEstado.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['Pendientes', 'Entregadas'],
                    datasets: [{
                        data: [3, 1],
                        backgroundColor: ['#007bff', '#0056b3']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });
        }
    }
}

function configurarSwitches(vista) {
    $('.custom-control-input').off('change').on('change', function() {
        var id = $(this).attr('id');
        var isChecked = $(this).is(':checked');
        
        // Lógica para mostrar/ocultar elementos según la vista actual
        if (vista === 'resumen') {
            if (id === 'solicitudesRecibidas') {
                $('#metricas-principales .col-lg-3:first').toggle(isChecked);
            } else if (id === 'donacionesEntregadas') {
                $('#metricas-principales .col-lg-3:nth-child(2)').toggle(isChecked);
            } else if (id === 'tiempoRespuesta') {
                $('#metricas-principales .col-lg-3:nth-child(3)').toggle(isChecked);
            } else if (id === 'tiempoEntrega') {
                $('#metricas-principales .col-lg-3:nth-child(4)').toggle(isChecked);
            } else if (id === 'solicitudesMes') {
                $('#graficos .col-lg-6:first').toggle(isChecked);
            } else if (id === 'productosSolicitados') {
                $('#graficos .col-lg-6:nth-child(2)').toggle(isChecked);
            }
        } else if (vista === 'solicitudes') {
            if (id === 'solicitudesSinResponder') {
                $('#metricas-principales .col-lg-4:first').toggle(isChecked);
            } else if (id === 'solicitudesAprobadas') {
                $('#metricas-principales .col-lg-4:nth-child(2)').toggle(isChecked);
            } else if (id === 'solicitudesRechazadas') {
                $('#metricas-principales .col-lg-4:nth-child(3)').toggle(isChecked);
            } else if (id === 'estadoSolicitudes') {
                $('#graficos .col-lg-6:first').toggle(isChecked);
            } else if (id === 'solicitudesProvincia') {
                $('#graficos .col-lg-6:nth-child(2)').toggle(isChecked);
            }
        } else if (vista === 'donaciones') {
            if (id === 'donacionesPendientes') {
                $('#metricas-principales .col-lg-6:first').toggle(isChecked);
            } else if (id === 'donacionesEntregadasTab') {
                $('#metricas-principales .col-lg-6:nth-child(2)').toggle(isChecked);
            } else if (id === 'estadoDonaciones') {
                $('#graficos .col-lg-6:first').toggle(isChecked);
            } else if (id === 'infoDonaciones') {
                $('#graficos .col-lg-6:nth-child(2)').toggle(isChecked);
            }
        }
    });
}

function toggleAll() {
    var allChecked = $('.custom-control-input').not(':checked').length === 0;
    $('.custom-control-input').prop('checked', !allChecked).trigger('change');
    
    var button = event.target.closest('button');
    button.innerHTML = allChecked ? 
        '<i class="fas fa-check"></i> Todo' : 
        '<i class="fas fa-times"></i> Ninguno';
}
</script>
@endpush

