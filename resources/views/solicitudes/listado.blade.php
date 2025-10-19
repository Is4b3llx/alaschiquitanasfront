@extends('layouts.adminlte')

@section('title', 'Listado de Solicitudes - Alas Chiquitanas')

@section('page_title', 'Listado de Solicitudes')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Listado de Solicitudes</li>
@endsection

@section('content')
<!-- Filtros -->
<div class="row mb-3">
    <div class="col-12"> 
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-filter mr-2"></i>Filtros
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary active" data-filter="todas">
                                <i class="fas fa-list"></i> Todas
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="recientes">
                                <i class="fas fa-clock"></i> Recientes
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="antiguas">
                                <i class="fas fa-history"></i> Antiguas
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="aprobadas">
                                <i class="fas fa-check"></i> Aprobadas
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="rechazadas">
                                <i class="fas fa-times"></i> Rechazadas
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="sin_contestar">
                                <i class="fas fa-question"></i> Sin Contestar
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalDetalle">
                            <i class="fas fa-plus"></i> Nueva Solicitud
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lista de Solicitudes -->
<div class="row" id="solicitudes-container">
    <!-- Solicitud 1 -->
    <div class="col-lg-6 col-xl-4 mb-4 solicitud-card" data-estado="sin_contestar" data-fecha="2025-01-10">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-file-alt mr-1"></i>
                    Solicitud #001
                </h3>
                <div class="card-tools">
                    <span class="badge badge-warning">Sin Contestar</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-user mr-1"></i> Solicitante:</strong><br>
                        <span class="text-primary">María González López</span></p>
                        
                        <p><strong><i class="fas fa-envelope mr-1"></i> Email:</strong><br>
                        <span class="text-muted">maria.gonzalez@email.com</span></p>
                        
                        <p><strong><i class="fas fa-id-card mr-1"></i> CI:</strong><br>
                        <span class="text-muted">12345678</span></p>
                        
                        <p><strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección:</strong><br>
                        <span class="text-muted">Comunidad San José, Chiquitos</span></p>
                        
                        <p><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong><br>
                        <span class="text-muted">10 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-boxes mr-1"></i> Productos:</strong><br>
                        <span class="badge badge-secondary mr-1">Agua potable</span>
                        <span class="badge badge-secondary mr-1">Alimentos</span>
                        <span class="badge badge-secondary">Frazadas</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalle(1)">
                    <i class="fas fa-eye"></i> Ver Detalle
                </button>
                <button class="btn btn-sm btn-aprobar" onclick="aprobar(1)">
                    <i class="fas fa-check"></i> Aprobar
                </button>
                <button class="btn btn-sm btn-rechazar" onclick="rechazar(1)">
                    <i class="fas fa-times"></i> Rechazar
                </button>
            </div>
        </div>
    </div>

    <!-- Solicitud 2 -->
    <div class="col-lg-6 col-xl-4 mb-4 solicitud-card" data-estado="aprobadas" data-fecha="2025-01-09">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-file-alt mr-1"></i>
                    Solicitud #002
                </h3>
                <div class="card-tools">
                    <span class="badge badge-success">Aprobada</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-user mr-1"></i> Solicitante:</strong><br>
                        <span class="text-primary">Carlos Rodríguez Vega</span></p>
                        
                        <p><strong><i class="fas fa-envelope mr-1"></i> Email:</strong><br>
                        <span class="text-muted">carlos.rodriguez@email.com</span></p>
                        
                        <p><strong><i class="fas fa-id-card mr-1"></i> CI:</strong><br>
                        <span class="text-muted">87654321</span></p>
                        
                        <p><strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección:</strong><br>
                        <span class="text-muted">Comunidad El Carmen, Ñuflo de Chávez</span></p>
                        
                        <p><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong><br>
                        <span class="text-muted">9 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-boxes mr-1"></i> Productos:</strong><br>
                        <span class="badge badge-secondary mr-1">Kit primeros auxilios</span>
                        <span class="badge badge-secondary mr-1">Medicamentos</span>
                        <span class="badge badge-secondary">Carpas</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalle(2)">
                    <i class="fas fa-eye"></i> Ver Detalle
                </button>
                <button class="btn btn-info btn-sm" onclick="actualizarDireccion(2)">
                    <i class="fas fa-map-marker-alt"></i> Actualizar Dirección
                </button>
            </div>
        </div>
    </div>

    <!-- Solicitud 3 -->
    <div class="col-lg-6 col-xl-4 mb-4 solicitud-card" data-estado="rechazadas" data-fecha="2025-01-08">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-file-alt mr-1"></i>
                    Solicitud #003
                </h3>
                <div class="card-tools">
                    <span class="badge badge-danger">Rechazada</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-user mr-1"></i> Solicitante:</strong><br>
                        <span class="text-primary">Ana María Silva</span></p>
                        
                        <p><strong><i class="fas fa-envelope mr-1"></i> Email:</strong><br>
                        <span class="text-muted">ana.silva@email.com</span></p>
                        
                        <p><strong><i class="fas fa-id-card mr-1"></i> CI:</strong><br>
                        <span class="text-muted">11223344</span></p>
                        
                        <p><strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección:</strong><br>
                        <span class="text-muted">Comunidad Santa Ana, Velasco</span></p>
                        
                        <p><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong><br>
                        <span class="text-muted">8 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-boxes mr-1"></i> Productos:</strong><br>
                        <span class="badge badge-secondary mr-1">Ropa</span>
                        <span class="badge badge-secondary mr-1">Calzado</span>
                        <span class="badge badge-secondary">Colchones</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalle(3)">
                    <i class="fas fa-eye"></i> Ver Detalle
                </button>
            </div>
        </div>
    </div>

    <!-- Solicitud 4 -->
    <div class="col-lg-6 col-xl-4 mb-4 solicitud-card" data-estado="sin_contestar" data-fecha="2025-01-11">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-file-alt mr-1"></i>
                    Solicitud #004
                </h3>
                <div class="card-tools">
                    <span class="badge badge-warning">Sin Contestar</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-user mr-1"></i> Solicitante:</strong><br>
                        <span class="text-primary">Pedro Martínez Cruz</span></p>
                        
                        <p><strong><i class="fas fa-envelope mr-1"></i> Email:</strong><br>
                        <span class="text-muted">pedro.martinez@email.com</span></p>
                        
                        <p><strong><i class="fas fa-id-card mr-1"></i> CI:</strong><br>
                        <span class="text-muted">55667788</span></p>
                        
                        <p><strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección:</strong><br>
                        <span class="text-muted">Comunidad San Pedro, Guarayos</span></p>
                        
                        <p><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong><br>
                        <span class="text-muted">11 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-boxes mr-1"></i> Productos:</strong><br>
                        <span class="badge badge-secondary mr-1">Artículos de higiene</span>
                        <span class="badge badge-secondary mr-1">Utensilios de cocina</span>
                        <span class="badge badge-secondary">Linternas</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalle(4)">
                    <i class="fas fa-eye"></i> Ver Detalle
                </button>
                <button class="btn btn-sm btn-aprobar" onclick="aprobar(4)">
                    <i class="fas fa-check"></i> Aprobar
                </button>
                <button class="btn btn-sm btn-rechazar" onclick="rechazar(4)">
                    <i class="fas fa-times"></i> Rechazar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detalle de Solicitud -->
<div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-file-alt mr-2"></i>Detalle de Solicitud
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenido del detalle se cargará aquí -->
                <div id="detalle-contenido">
                    <p>Cargando detalles...</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Imprimir</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmar Rechazo - Launch Large Modal -->
<div class="modal fade" id="modalConfirmarRechazo" tabindex="-1" role="dialog" aria-labelledby="modalConfirmarRechazoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConfirmarRechazoLabel">Confirmar Rechazo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro que deseas rechazar la solicitud?</p>
                <div class="form-group">
                    <label for="motivoRechazo">Motivo del rechazo:</label>
                    <select class="form-control" id="motivoRechazo" onchange="actualizarMotivoSeleccionado()">
                        <option value="">Seleccione un motivo...</option>
                        <option value="informacion_incompleta">La solicitud presenta información incompleta o inconsistente</option>
                        <option value="destino_atendido">El destino reportado ya fue atendido recientemente con recursos similares</option>
                        <option value="cantidad_insuficiente">La cantidad de personas afectadas es insuficiente para justificar la asignación de recursos</option>
                        <option value="no_emergencia">La situación reportada no califica como una emergencia según los criterios establecidos</option>
                    </select>
                </div>
                <p id="motivoSeleccionado" class="mt-3"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="btnConfirmarRechazo" onclick="confirmarRechazo()" disabled>Confirmar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Borde superior verde para solicitudes aprobadas */
.solicitud-card[data-estado="aprobadas"] .card {
    border-top: 3px solid #28a745 !important;
}

/* Borde superior gris para sin contestar */
.solicitud-card[data-estado="sin_contestar"] .card {
    border-top: 3px solid #6c757d !important;
}

/* Borde superior rojo para rechazadas */
.solicitud-card[data-estado="rechazadas"] .card {
    border-top: 3px solid #dc3545 !important;
}

/* Estilo para badge "Sin Contestar" - gris con letra blanca */
.solicitud-card[data-estado="sin_contestar"] .badge-warning {
    background-color: #6c757d !important;
    color: white !important;
}

/* Botón Rechazar - fondo gris, letra blanca */
.btn-rechazar {
    background-color: #6c757d !important;
    border-color: #6c757d !important;
    color: white !important;
}

.btn-rechazar:hover {
    background-color: #5a6268 !important;
    border-color: #545b62 !important;
    color: white !important;
}

/* Botón Aprobar - fondo blanco, letra gris */
.btn-aprobar {
    background-color: white !important;
    border-color: #6c757d !important;
    color: #6c757d !important;
}

.btn-aprobar:hover {
    background-color: #f8f9fa !important;
    border-color: #6c757d !important;
    color: #6c757d !important;
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Filtros
    $('[data-filter]').click(function() {
        var filtro = $(this).data('filter');
        
        // Actualizar botones activos
        $('[data-filter]').removeClass('active');
        $(this).addClass('active');
        
        // Filtrar tarjetas
        $('.solicitud-card').hide();
        
        if (filtro === 'todas') {
            $('.solicitud-card').show();
        } else if (filtro === 'recientes') {
            $('.solicitud-card[data-fecha="2025-01-11"], .solicitud-card[data-fecha="2025-01-10"]').show();
        } else if (filtro === 'antiguas') {
            $('.solicitud-card[data-fecha="2025-01-08"], .solicitud-card[data-fecha="2025-01-09"]').show();
        } else {
            $('.solicitud-card[data-estado="' + filtro + '"]').show();
        }
    });
});

function verDetalle(id) {
    // Aquí cargarías los detalles de la solicitud
    $('#detalle-contenido').html(`
        <div class="alert alert-info">
            <h5>Detalles de la Solicitud #${String(id).padStart(3, '0')}</h5>
            <p>Aquí se mostrarían todos los detalles completos de la solicitud...</p>
        </div>
    `);
    $('#modalDetalle').modal('show');
}

function aprobar(id) {
    // Cambiar solo el badge de estado (no los productos)
    $('.solicitud-card').each(function() {
        var cardId = $(this).find('.card-title').text().match(/#(\d+)/);
        if (cardId && cardId[1] == id) {
            // Solo cambiar el badge de estado (el que está en card-tools)
            $(this).find('.card-tools .badge').removeClass('badge-warning').addClass('badge-success').text('Aprobada');
            $(this).attr('data-estado', 'aprobadas');
            $(this).find('.card').css('border-top', '3px solid #28a745');
        }
    });
    
    // Aquí harías la petición AJAX para aprobar
    console.log('Aprobando solicitud:', id);
}

function rechazar(id) {
    // Guardar el ID de la solicitud para usar en la confirmación
    $('#modalConfirmarRechazo').data('solicitud-id', id);
    
    // Limpiar el formulario
    $('#motivoRechazo').val('');
    $('#motivoSeleccionado').text('');
    $('#btnConfirmarRechazo').prop('disabled', true);
    
    // Mostrar el modal
    $('#modalConfirmarRechazo').modal('show');
}

function actualizarMotivoSeleccionado() {
    var motivo = $('#motivoRechazo').val();
    var motivoTexto = $('#motivoRechazo option:selected').text();
    
    if (motivo) {
        $('#motivoSeleccionado').text('Motivo seleccionado: ' + motivoTexto);
        $('#btnConfirmarRechazo').prop('disabled', false);
    } else {
        $('#motivoSeleccionado').text('');
        $('#btnConfirmarRechazo').prop('disabled', true);
    }
}

function confirmarRechazo() {
    var solicitudId = $('#modalConfirmarRechazo').data('solicitud-id');
    var motivo = $('#motivoRechazo').val();
    var motivoTexto = $('#motivoRechazo option:selected').text();
    
    if (motivo) {
        // Mostrar mensaje de confirmación
        toastr.success('Solicitud #' + String(solicitudId).padStart(3, '0') + ' rechazada exitosamente');
        
        // Cerrar el modal
        $('#modalConfirmarRechazo').modal('hide');
        
        // Aquí harías la petición AJAX para rechazar la solicitud
        console.log('Rechazando solicitud:', solicitudId, 'Motivo:', motivoTexto);
        
        // Simular actualización de la interfaz
        setTimeout(function() {
            // Aquí actualizarías el estado de la tarjeta en la interfaz
            $('.solicitud-card[data-solicitud="' + solicitudId + '"] .badge').removeClass('badge-warning').addClass('badge-danger').text('Rechazada');
        }, 1000);
    }
}

function actualizarDireccion(id) {
    alert('Actualizar dirección de solicitud #' + String(id).padStart(3, '0'));
    // Aquí abrirías un modal para actualizar la dirección
}

</script>
@endpush
