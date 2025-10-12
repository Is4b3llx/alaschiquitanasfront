@extends('layouts.adminlte')

@section('title', 'Listado de Donaciones - Alas Chiquitanas')

@section('page_title', 'Listado de Donaciones')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Listado de Donaciones</li>
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
                            <button type="button" class="btn btn-outline-primary active" data-filter="todos">
                                <i class="fas fa-list"></i> Todos
                            </button>
                            <button type="button" class="btn btn-outline-success" data-filter="entregado">
                                <i class="fas fa-check"></i> Entregado
                            </button>
                            <button type="button" class="btn btn-outline-warning" data-filter="no_entregado">
                                <i class="fas fa-times"></i> No Entregado
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevaDonacion">
                            <i class="fas fa-plus"></i> Nueva Donación
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lista de Donaciones -->
<div class="row" id="donaciones-container">
    <!-- Donación 1 -->
    <div class="col-lg-6 col-xl-4 mb-4 donacion-card" data-estado="no_entregado" data-fecha="2025-01-10">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-gift mr-1"></i>
                    D-001
                </h3>
                <div class="card-tools">
                    <span class="badge badge-warning">No Entregado</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-check-circle mr-1"></i> Aprobado:</strong><br>
                        <span class="text-success">10 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-user mr-1"></i> Cod. Encargado:</strong><br>
                        <span class="text-primary">7567715</span></p>
                        
                        <p><strong><i class="fas fa-truck mr-1"></i> Estado:</strong><br>
                        <span class="badge badge-warning">Pendiente de Entrega</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalleDonacion(1)">
                    <i class="fas fa-eye"></i> Detalle
                </button>
                <button class="btn btn-success btn-sm" onclick="actualizarEstado(1)">
                    <i class="fas fa-edit"></i> Actualizar
                </button>
            </div>
        </div>
    </div>

    <!-- Donación 2 -->
    <div class="col-lg-6 col-xl-4 mb-4 donacion-card" data-estado="entregado" data-fecha="2025-01-09">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-gift mr-1"></i>
                    D-002
                </h3>
                <div class="card-tools">
                    <span class="badge badge-success">Entregado</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-check-circle mr-1"></i> Aprobado:</strong><br>
                        <span class="text-success">9 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-user mr-1"></i> Cod. Encargado:</strong><br>
                        <span class="text-primary">12345678</span></p>
                        
                        <p><strong><i class="fas fa-truck mr-1"></i> Estado:</strong><br>
                        <span class="badge badge-success">Entregado</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalleDonacion(2)">
                    <i class="fas fa-eye"></i> Detalle
                </button>
                <button class="btn btn-success btn-sm" onclick="actualizarEstado(2)">
                    <i class="fas fa-edit"></i> Actualizar
                </button>
            </div>
        </div>
    </div>

    <!-- Donación 3 -->
    <div class="col-lg-6 col-xl-4 mb-4 donacion-card" data-estado="no_entregado" data-fecha="2025-01-08">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-gift mr-1"></i>
                    D-003
                </h3>
                <div class="card-tools">
                    <span class="badge badge-warning">No Entregado</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-check-circle mr-1"></i> Aprobado:</strong><br>
                        <span class="text-success">8 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-user mr-1"></i> Cod. Encargado:</strong><br>
                        <span class="text-primary">87654321</span></p>
                        
                        <p><strong><i class="fas fa-truck mr-1"></i> Estado:</strong><br>
                        <span class="badge badge-warning">Pendiente de Entrega</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalleDonacion(3)">
                    <i class="fas fa-eye"></i> Detalle
                </button>
                <button class="btn btn-success btn-sm" onclick="actualizarEstado(3)">
                    <i class="fas fa-edit"></i> Actualizar
                </button>
            </div>
        </div>
    </div>

    <!-- Donación 4 -->
    <div class="col-lg-6 col-xl-4 mb-4 donacion-card" data-estado="entregado" data-fecha="2025-01-11">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-gift mr-1"></i>
                    D-004
                </h3>
                <div class="card-tools">
                    <span class="badge badge-success">Entregado</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p><strong><i class="fas fa-check-circle mr-1"></i> Aprobado:</strong><br>
                        <span class="text-success">11 de Enero, 2025</span></p>
                        
                        <p><strong><i class="fas fa-user mr-1"></i> Cod. Encargado:</strong><br>
                        <span class="text-primary">11223344</span></p>
                        
                        <p><strong><i class="fas fa-truck mr-1"></i> Estado:</strong><br>
                        <span class="badge badge-success">Entregado</span></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" onclick="verDetalleDonacion(4)">
                    <i class="fas fa-eye"></i> Detalle
                </button>
                <button class="btn btn-success btn-sm" onclick="actualizarEstado(4)">
                    <i class="fas fa-edit"></i> Actualizar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Actualizar Estado -->
<div class="modal fade" id="modalActualizarEstado" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-edit mr-2"></i>Actualizar Estado
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formActualizarEstado">
                    <!-- CI Encargado -->
                    <div class="form-group">
                        <label for="ciEncargado">CI Encargado</label>
                        <input type="text" class="form-control" id="ciEncargado" value="7567715" readonly>
                    </div>

                    <!-- Selección de Estado -->
                    <div class="form-group">
                        <label>Seleccione una opción</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="enCamino" name="estado" value="en_camino" checked>
                                    <label class="custom-control-label" for="enCamino">
                                        <i class="fas fa-truck mr-1"></i> En camino
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="entregado" name="estado" value="entregado">
                                    <label class="custom-control-label" for="entregado">
                                        <i class="fas fa-check-circle mr-1"></i> Entregado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ubicación Actual -->
                    <div class="form-group">
                        <label>Su Ubicación Actual</label>
                        <div class="card">
                            <div class="card-body p-2">
                                <div id="mapa" style="height: 300px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; position: relative;">
                                    <div style="position: absolute; top: 10px; left: 10px; background: white; padding: 5px; border-radius: 3px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <button type="button" style="border: none; background: none; font-size: 16px; padding: 2px 6px;">+</button>
                                        <button type="button" style="border: none; background: none; font-size: 16px; padding: 2px 6px;">-</button>
                                    </div>
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <i class="fas fa-truck" style="font-size: 24px; color: #ffc107;"></i>
                                    </div>
                                    <div style="position: absolute; bottom: 10px; left: 10px; background: white; padding: 5px; border-radius: 3px; font-size: 12px;">
                                        Coordenadas: -17.720934, -63.166874
                                    </div>
                                    <div style="position: absolute; top: 50px; left: 50px; color: #6c757d; font-size: 12px;">Norte</div>
                                    <div style="position: absolute; top: 80px; left: 100px; color: #6c757d; font-size: 12px;">Norte Interno</div>
                                    <div style="position: absolute; top: 120px; left: 150px; color: #6c757d; font-size: 12px;">Pampi</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Imagen de Entrega -->
                    <div class="form-group">
                        <label>Imagen de Entrega</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagenEntrega" accept="image/*">
                                <label class="custom-file-label" for="imagenEntrega">Seleccionar archivo</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">don...jpeg</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <img id="previewImagen" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDIwMCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMTUwIiBmaWxsPSIjRjhGOUZBIi8+CjxwYXRoIGQ9Ik04MCA2MEw5MCA3MEwxMTAgNTBMODAgMzBaIiBmaWxsPSIjRjVGNkY3Ii8+CjxjaXJjbGUgY3g9IjkwIiBjeT0iNzAiIHI9IjMiIGZpbGw9IiNGNUY2RjciLz4KPHRleHQgeD0iMTAwIiB5PSI4NSIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjEwIiBmaWxsPSIjNkM3NTdEIj5QcmV2aWV3IGRlIGltYWdlbjwvdGV4dD4KPC9zdmc+" alt="Preview" class="img-fluid" style="max-height: 150px; border: 1px solid #dee2e6; border-radius: 4px;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    <i class="fas fa-times"></i> Cancelar
                </button>
                <button type="button" class="btn btn-primary" onclick="guardarActualizacion()">
                    <i class="fas fa-check"></i> Actualizar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detalle de Donación -->
<div class="modal fade" id="modalDetalleDonacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-gift mr-2"></i>Detalle de Donación
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="detalle-donacion-contenido">
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
@endsection

@push('styles')
<style>
/* Borde superior azul para donaciones entregadas */
.donacion-card[data-estado="entregado"] .card {
    border-top: 3px solid #007bff !important;
}

/* Borde superior gris para las demás */
.donacion-card:not([data-estado="entregado"]) .card {
    border-top: 3px solid #6c757d !important;
}

/* Estilo para el mapa simulado */
#mapa {
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    position: relative;
    overflow: hidden;
}

#mapa::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(90deg, #e0e0e0 1px, transparent 1px),
        linear-gradient(#e0e0e0 1px, transparent 1px);
    background-size: 20px 20px;
    opacity: 0.3;
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
        $('.donacion-card').hide();
        
        if (filtro === 'todos') {
            $('.donacion-card').show();
        } else {
            $('.donacion-card[data-estado="' + filtro + '"]').show();
        }
    });

    // Preview de imagen
    $('#imagenEntrega').change(function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImagen').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        }
    });
});

function verDetalleDonacion(id) {
    $('#detalle-donacion-contenido').html(`
        <div class="alert alert-info">
            <h5>Detalles de la Donación D-${String(id).padStart(3, '0')}</h5>
            <p>Aquí se mostrarían todos los detalles completos de la donación...</p>
        </div>
    `);
    $('#modalDetalleDonacion').modal('show');
}

function actualizarEstado(id) {
    // Aquí cargarías los datos de la donación específica
    $('#modalActualizarEstado').modal('show');
}

function guardarActualizacion() {
    var estado = $('input[name="estado"]:checked').val();
    var imagen = $('#imagenEntrega')[0].files[0];
    
    if (confirm('¿Está seguro de actualizar el estado?')) {
        alert('Estado actualizado a: ' + estado);
        $('#modalActualizarEstado').modal('hide');
        // Aquí harías la petición AJAX para guardar
    }
}
</script>
@endpush
