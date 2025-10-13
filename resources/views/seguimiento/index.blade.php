@extends('layouts.adminlte')

@section('title', 'Seguimiento de Donaciones - Alas Chiquitanas')

@section('page_title', 'Seguimiento de Donaciones')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Seguimiento</li>
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
                            <button type="button" class="btn btn-primary" data-filter="pendientes">
                                <i class="fas fa-clock"></i> Pendientes
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="en_camino">
                                <i class="fas fa-truck"></i> En Camino
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="entregadas">
                                <i class="fas fa-check"></i> Entregadas
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

<!-- Lista de Donaciones en Seguimiento -->
<div class="row" id="donaciones-container">
    <!-- Donación 1 -->
    <div class="col-12 mb-4 donacion-card" data-estado="en_camino" data-fecha="2025-01-10">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0001
                                </h6>
                                <span class="badge badge-info">En Camino</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">7567715</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Santa Cruz</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Barrio Copacabana, El Bajío</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">10 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">13/09/2025 21:13</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(1)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(1)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">Santa Cruz de la Sierra</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donación 2 -->
    <div class="col-12 mb-4 donacion-card" data-estado="entregadas" data-fecha="2025-01-09">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0002
                                </h6>
                                <span class="badge badge-success">Entregada</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">8564321</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Cochabamba</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Zona Norte, La Paz</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">9 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">12/09/2025 15:30</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(2)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(2)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">La Paz</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donación 3 -->
    <div class="col-12 mb-4 donacion-card" data-estado="pendientes" data-fecha="2025-01-11">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0003
                                </h6>
                                <span class="badge badge-warning">Pendiente</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">9567432</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Sucre</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Barrio Minero, Potosí</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">11 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">14/09/2025 08:45</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(3)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(3)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">Potosí</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donación 4 -->
    <div class="col-12 mb-4 donacion-card" data-estado="en_camino" data-fecha="2025-01-08">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0004
                                </h6>
                                <span class="badge badge-info">En Camino</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">7568819</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Tarija</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Villa Montes, Tarija</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">8 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">14/09/2025 10:20</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(4)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(4)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">Tarija</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donación 5 -->
    <div class="col-12 mb-4 donacion-card" data-estado="entregadas" data-fecha="2025-01-07">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0005
                                </h6>
                                <span class="badge badge-success">Entregada</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">8569923</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Oruro</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Centro Minero, Oruro</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">7 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">11/09/2025 16:15</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(5)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(5)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">Oruro</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donación 6 -->
    <div class="col-12 mb-4 donacion-card" data-estado="pendientes" data-fecha="2025-01-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <!-- Imagen de la donación -->
                    <div class="col-md-2">
                        <div class="p-2">
                            <img src="https://via.placeholder.com/80x60?text=Img" alt="Imagen" class="img-thumbnail" style="width: 80px; height: 60px;">
                        </div>
                    </div>
                    
                    <!-- Información de la donación -->
                    <div class="col-md-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h6 class="mb-0">
                                    <i class="fas fa-box mr-1"></i>
                                    Donación #SC0006
                                </h6>
                                <span class="badge badge-warning">Pendiente</span>
                            </div>
                            
                             <div class="row">
                                 <div class="col-12">
                                     <p class="mb-1"><strong><i class="fas fa-user mr-1"></i> Encargado:</strong> 
                                     <span class="text-primary">9568745</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Origen:</strong> 
                                     <span class="text-muted">Beni</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-map-marker-alt mr-1"></i> Destino:</strong> 
                                     <span class="text-muted">Riberalta, Beni</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-calendar mr-1"></i> Fecha:</strong> 
                                     <span class="text-muted">12 de Enero, 2025</span></p>
                                     
                                     <p class="mb-1"><strong><i class="fas fa-clock mr-1"></i> Actualización:</strong> 
                                     <span class="text-muted">14/09/2025 12:00</span></p>
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <!-- Mapa de la donación -->
                    <div class="col-md-6">
                        <div class="map-container">
                            <div class="map-content">
                                <div class="map-placeholder">
                                    <div class="map-controls">
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomIn(6)">+</button>
                                        <button class="btn btn-sm btn-light map-zoom-btn" onclick="zoomOut(6)">-</button>
                                    </div>
                                    <div class="map-route">
                                        <div class="route-line"></div>
                                        <div class="route-point start-point">
                                            <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="route-point end-point">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="map-city">Beni</div>
                                    <div class="map-attribution">
                                        Leaflet | OpenStreetMap contributors
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detalle de Donación -->
<div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-box mr-2"></i>Detalle de Donación
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

<!-- Modal Nueva Donación -->
<div class="modal fade" id="modalNuevaDonacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-plus mr-2"></i>Nueva Donación
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Formulario para nueva donación...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Borde superior azul para donaciones en camino */
.donacion-card[data-estado="en_camino"] .card {
    border-top: 3px solid #17a2b8 !important;
}

/* Borde superior verde para entregadas */
.donacion-card[data-estado="entregadas"] .card {
    border-top: 3px solid #28a745 !important;
}

/* Borde superior amarillo para pendientes */
.donacion-card[data-estado="pendientes"] .card {
    border-top: 3px solid #ffc107 !important;
}

/* Estilos para el mapa */
.map-container {
    height: 180px;
    background: #f8f9fa;
    border-left: 1px solid #dee2e6;
    position: relative;
    overflow: hidden;
}

.map-content {
    height: 100%;
    width: 100%;
    position: relative;
}

.map-placeholder {
    height: 100%;
    width: 100%;
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-controls {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 10;
}

.map-zoom-btn {
    display: block;
    margin-bottom: 2px;
    width: 30px;
    height: 30px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: bold;
}

.map-route {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.route-line {
    position: absolute;
    height: 2px;
    background: #007bff;
    width: 60%;
    z-index: 5;
}

.route-point {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 12px;
    position: absolute;
    z-index: 10;
}

.start-point {
    background: #dc3545;
    left: 20%;
}

.end-point {
    background: #28a745;
    right: 20%;
}

.map-city {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background: rgba(255, 255, 255, 0.9);
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    color: #333;
}

.map-attribution {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background: rgba(255, 255, 255, 0.9);
    padding: 2px 6px;
    border-radius: 3px;
    font-size: 10px;
    color: #666;
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
        
        if (filtro === 'todas') {
            $('.donacion-card').show();
        } else if (filtro === 'pendientes') {
            $('.donacion-card[data-estado="pendientes"]').show();
        } else if (filtro === 'en_camino') {
            $('.donacion-card[data-estado="en_camino"]').show();
        } else if (filtro === 'entregadas') {
            $('.donacion-card[data-estado="entregadas"]').show();
        }
    });
});

function verDetalle(id) {
    // Aquí cargarías los detalles de la donación
    $('#detalle-contenido').html(`
        <div class="alert alert-info">
            <h5>Detalles de la Donación #SC${String(id).padStart(4, '0')}</h5>
            <p>Aquí se mostrarían todos los detalles completos de la donación...</p>
        </div>
    `);
    $('#modalDetalle').modal('show');
}

function zoomIn(donacionId) {
    toastr.info('Acercando mapa de donación #SC' + String(donacionId).padStart(4, '0'));
    // Aquí podrías implementar la funcionalidad de zoom real
}

function zoomOut(donacionId) {
    toastr.info('Alejando mapa de donación #SC' + String(donacionId).padStart(4, '0'));
    // Aquí podrías implementar la funcionalidad de zoom real
}
</script>
@endpush