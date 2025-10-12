@extends('layouts.adminlte')

@section('title', 'Dashboard - Alas Chiquitanas')

@section('page_title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
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
            <div class="card-body">
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
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="col-md-9">
        <!-- Métricas Principales -->
        <div class="row" id="metricas-principales">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>4</h3>
                        <p>Total Solicitudes Atendidas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <a href="{{ route('solicitudes.listado') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Donaciones Entregadas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <a href="{{ route('donaciones.listado') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-white">&lt;1 día</h3>
                        <p class="text-white">Tiempo Promedio Respuesta</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>&lt;1 día</h3>
                        <p>Tiempo Promedio Entrega</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <a href="{{ route('seguimiento') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Gráficos -->
        <div class="row" id="graficos">
            <!-- Gráfico de Barras - Solicitudes por Mes -->
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

            <!-- Gráfico Circular - Productos Más Solicitados -->
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
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(document).ready(function() {
    // Gráfico de Solicitudes por Mes
    const ctxSolicitudes = document.getElementById('chartSolicitudesMes').getContext('2d');
    new Chart(ctxSolicitudes, {
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
                    ticks: {
                        stepSize: 0.5
                    }
                }
            }
        }
    });

    // Gráfico de Productos Más Solicitados
    const ctxProductos = document.getElementById('chartProductos').getContext('2d');
    new Chart(ctxProductos, {
        type: 'doughnut',
        data: {
            labels: ['3', '15', 'No hay datos del almacén', 'Arroz', 'Lentejas'],
            datasets: [{
                data: [20, 25, 15, 25, 15],
                backgroundColor: [
                    '#007bff',
                    '#0056b3',
                    '#28a745',
                    '#17a2b8',
                    '#ffc107'
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Control de switches para mostrar/ocultar métricas
    $('.custom-control-input').change(function() {
        var id = $(this).attr('id');
        var isChecked = $(this).is(':checked');
        
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
    });
});

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

