@extends('layouts.adminlte')

@section('title', 'Solicitar Insumos')

@section('page_title', 'Solicitar Insumos')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Formulario de Solicitud</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Complete el formulario para solicitar insumos de emergencia</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('solicitudes.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <!-- Datos del Solicitante -->
                    <div class="mb-4">
                        <div class="alert alert-info alert-dismissible">
                            <h5><i class="icon fas fa-user"></i> Datos del Solicitante</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellido">Apellido <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="carnet">Carnet de Identidad <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="carnet" name="carnet" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="comunidad">Comunidad Solicitante <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="comunidad" name="comunidad" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos de Entrega -->
                    <div class="mb-4">
                        <div class="alert alert-info alert-dismissible">
                            <h5><i class="icon fas fa-map-marker-alt"></i> Datos de Entrega</h5>
                        </div>
                        <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="direccion">Dirección <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="direccion" name="direccion" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubicación en el Mapa</label>
                            <div class="card">
                                <div class="card-body p-2">
                                    <div id="mapaDireccion" style="height: 300px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; position: relative;">
                                        <div style="position: absolute; top: 10px; left: 10px; background: white; padding: 5px; border-radius: 3px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                            <button type="button" style="border: none; background: none; font-size: 16px; padding: 2px 6px;">+</button>
                                            <button type="button" style="border: none; background: none; font-size: 16px; padding: 2px 6px;">-</button>
                                        </div>
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                            <i class="fas fa-map-marker-alt" style="font-size: 24px; color: #dc3545;"></i>
                                        </div>
                                        <div style="position: absolute; bottom: 10px; left: 10px; background: white; padding: 5px; border-radius: 3px; font-size: 12px;">
                                            Coordenadas: -17.720934, -63.166874
                                        </div>
                                        <div style="position: absolute; top: 50px; left: 50px; color: #6c757d; font-size: 12px;">Centro de Santa Cruz</div>
                                        <div style="position: absolute; top: 80px; left: 100px; color: #6c757d; font-size: 12px;">Plaza 24 de Septiembre</div>
                                        <div style="position: absolute; top: 120px; left: 150px; color: #6c757d; font-size: 12px;">Mercado Central</div>
                                        <div style="position: absolute; top: 160px; left: 80px; color: #6c757d; font-size: 12px;">Terminal Bimodal</div>
                                    </div>
                                </div>
                            </div>
                            <small class="form-text text-muted">
                                <i class="fas fa-info-circle"></i> 
                                Puede hacer clic en el mapa para seleccionar la ubicación exacta de entrega
                            </small>
                        </div>
                    </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provincia">Provincia <span class="text-danger">*</span></label>
                                    <select class="form-control" id="provincia" name="provincia" required>
                                        <option value="">Seleccione una provincia</option>
                                        <option value="Chiquitos">Chiquitos</option>
                                        <option value="Ñuflo de Chávez">Ñuflo de Chávez</option>
                                        <option value="Velasco">Velasco</option>
                                        <option value="Ángel Sandoval">Ángel Sandoval</option>
                                        <option value="Germán Busch">Germán Busch</option>
                                        <option value="Guarayos">Guarayos</option>
                                        <option value="Ichilo">Ichilo</option>
                                        <option value="Sara">Sara</option>
                                        <option value="Obispo Santistevan">Obispo Santistevan</option>
                                        <option value="Warnes">Warnes</option>
                                        <option value="Andrés Ibáñez">Andrés Ibáñez</option>
                                        <option value="Ignacio Warnes">Ignacio Warnes</option>
                                        <option value="José Miguel de Velasco">José Miguel de Velasco</option>
                                        <option value="Cordillera">Cordillera</option>
                                        <option value="Vallegrande">Vallegrande</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="celular">Nro. de Celular <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="celular" name="celular" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos de Emergencia -->
                    <div class="mb-4">
                        <div class="alert alert-info alert-dismissible">
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Datos de Emergencia</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cantidad_personas">Cantidad de Personas Afectadas <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="cantidad_personas" name="cantidad_personas" min="1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_emergencia">Inicio de Emergencia <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="fecha_emergencia" name="fecha_emergencia" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="tipo_emergencia">Tipo de Emergencia <span class="text-danger">*</span></label>
                                    <select class="form-control" id="tipo_emergencia" name="tipo_emergencia" required>
                                        <option value="">Seleccione el tipo de emergencia</option>
                                        <option value="Incendio">Incendio</option>
                                        <option value="Inundación">Inundación</option>
                                        <option value="Sequía">Sequía</option>
                                        <option value="Deslizamiento">Deslizamiento</option>
                                        <option value="Terremoto">Terremoto</option>
                                        <option value="Granizada">Granizada</option>
                                        <option value="Vendaval">Vendaval</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Insumos Necesarios -->
                    <div class="mb-4">
                        <div class="alert alert-info alert-dismissible">
                            <h5><i class="icon fas fa-boxes"></i> Insumos Necesarios <span class="text-danger">*</span></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-boxes"></i> Productos Seleccionados
                                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalSeleccionarProductos">
                                        <i class="fas fa-plus"></i> Ver Productos
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div id="productosSeleccionados">
                                    <div class="text-center text-muted py-4">
                                        <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                                        <p>No tienes productos seleccionados.</p>
                                        <p class="small">Haz clic en "Ver Productos" para seleccionar los insumos necesarios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="productosSeleccionadosData" name="productos_seleccionados" value="">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>Enviar Solicitud
                    </button>
                    <a href="{{ route('home') }}" class="btn btn-default">
                        <i class="fas fa-times mr-2"></i>Cancelar
                    </a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- Modal para seleccionar productos -->
<div class="modal fade" id="modalSeleccionarProductos" tabindex="-1" role="dialog" aria-labelledby="modalSeleccionarProductosLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="modalSeleccionarProductosLabel">
                    <i class="fas fa-boxes"></i> Seleccionar Productos
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row m-0">
                    <!-- Columna izquierda - Productos disponibles -->
                    <div class="col-md-6 p-4" style="background-color: #f8f9fa; min-height: 500px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Seleccione Los Productos:</h6>
                            <span class="badge badge-info" id="productosDisponibles">Disponibles 1-5 de 20</span>
                        </div>
                        
                        <div id="listaProductos">
                            <!-- Productos se cargarán dinámicamente -->
                        </div>
                        
                        <!-- Paginación -->
                        <div class="d-flex justify-content-center mt-4">
                            <nav aria-label="Paginación de productos">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <a class="page-link" href="#" onclick="cambiarPagina(-1)">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" onclick="cambiarPagina(1)">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <!-- Columna derecha - Productos seleccionados -->
                    <div class="col-md-6 p-4" style="background-color: #f8f9fa; min-height: 500px;">
                        <h6 class="mb-3">Productos Seleccionados:</h6>
                        <div id="productosSeleccionadosModal">
                            <div class="text-center text-muted py-5">
                                <i class="fas fa-box-open fa-3x mb-3" style="color: #6c757d;"></i>
                                <p>No tienes productos seleccionados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-primary">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i> Cerrar
                </button>
                <button type="button" class="btn btn-success" onclick="guardarProductos()">
                    <i class="fas fa-check"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Estilo para el mapa simulado */
#mapaDireccion {
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#mapaDireccion::before {
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

#mapaDireccion:hover {
    background: linear-gradient(135deg, #bbdefb 0%, #90caf9 100%);
}

/* Animación para el marcador */
#mapaDireccion .fa-map-marker-alt {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}
</style>
@endpush

@push('scripts')
<script>
// Datos de productos disponibles
const productos = [
    { id: 1, nombre: 'Camisa', sugerido: 125 },
    { id: 2, nombre: 'Polera', sugerido: 89 },
    { id: 3, nombre: 'Pantalón', sugerido: 67 },
    { id: 4, nombre: 'Abrigo', sugerido: 45 },
    { id: 5, nombre: 'Arroz', sugerido: 200 },
    { id: 6, nombre: 'Agua potable', sugerido: 300 },
    { id: 7, nombre: 'Frazadas', sugerido: 78 },
    { id: 8, nombre: 'Carpas', sugerido: 25 },
    { id: 9, nombre: 'Kit de primeros auxilios', sugerido: 15 },
    { id: 10, nombre: 'Medicamentos básicos', sugerido: 35 },
    { id: 11, nombre: 'Calzado', sugerido: 56 },
    { id: 12, nombre: 'Colchones', sugerido: 30 },
    { id: 13, nombre: 'Artículos de higiene', sugerido: 80 },
    { id: 14, nombre: 'Utensilios de cocina', sugerido: 40 },
    { id: 15, nombre: 'Linternas y pilas', sugerido: 60 },
    { id: 16, nombre: 'Alimentos no perecederos', sugerido: 150 },
    { id: 17, nombre: 'Ropa interior', sugerido: 95 },
    { id: 18, nombre: 'Toallas', sugerido: 70 },
    { id: 19, nombre: 'Mantas', sugerido: 55 },
    { id: 20, nombre: 'Herramientas básicas', sugerido: 20 }
];

let productosSeleccionados = {};
let paginaActual = 1;
const productosPorPagina = 5;

$(document).ready(function() {
    // Hacer el mapa interactivo
    $('#mapaDireccion').click(function(e) {
        var rect = this.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;
        
        // Mover el marcador a la nueva posición
        $(this).find('.fa-map-marker-alt').css({
            'position': 'absolute',
            'top': y + 'px',
            'left': x + 'px',
            'transform': 'translate(-50%, -50%)'
        });
        
        // Actualizar coordenadas (simulado)
        var lat = (-17.720934 + (Math.random() - 0.5) * 0.01).toFixed(6);
        var lng = (-63.166874 + (Math.random() - 0.5) * 0.01).toFixed(6);
        
        $(this).find('.text-muted').text('Coordenadas: ' + lat + ', ' + lng);
        
        // Agregar un pequeño feedback visual
        $(this).addClass('map-clicked');
        setTimeout(() => {
            $(this).removeClass('map-clicked');
        }, 200);
    });
    
    // Controles de zoom (simulados)
    $('#mapaDireccion button:first').click(function(e) {
        e.stopPropagation();
        alert('Zoom in - Funcionalidad simulada');
    });
    
    $('#mapaDireccion button:last').click(function(e) {
        e.stopPropagation();
        alert('Zoom out - Funcionalidad simulada');
    });
    
    // Cargar productos cuando se abre el modal
    $('#modalSeleccionarProductos').on('shown.bs.modal', function() {
        cargarProductos();
    });
});

function cargarProductos() {
    const inicio = (paginaActual - 1) * productosPorPagina;
    const fin = inicio + productosPorPagina;
    const productosPagina = productos.slice(inicio, fin);
    
    let html = '';
    productosPagina.forEach(producto => {
        const cantidad = productosSeleccionados[producto.id] || 0;
        html += `
            <div class="card mb-3" style="border-left: 4px solid #007bff;">
                <div class="card-body p-3" style="background-color: #e3f2fd;">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-1" style="color: #1976d2;">${producto.nombre}</h6>
                            <small class="text-muted">Sugerido: ${producto.sugerido}</small>
                            <a href="#" class="btn btn-sm btn-success ml-2" onclick="aplicarSugerido(${producto.id})">Aplicar</a>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" onclick="cambiarCantidad(${producto.id}, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <input type="number" class="form-control form-control-sm text-center" 
                                       id="cantidad_${producto.id}" value="${cantidad}" min="0" max="1000"
                                       onchange="actualizarCantidad(${producto.id})">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" onclick="cambiarCantidad(${producto.id}, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <small class="text-muted">${cantidad} seleccionados</small>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
    
    $('#listaProductos').html(html);
    actualizarProductosDisponibles();
    actualizarProductosSeleccionadosModal();
}

function cambiarCantidad(id, cambio) {
    const input = $(`#cantidad_${id}`);
    const nuevaCantidad = Math.max(0, parseInt(input.val()) + cambio);
    input.val(nuevaCantidad);
    actualizarCantidad(id);
}

function actualizarCantidad(id) {
    const cantidad = parseInt($(`#cantidad_${id}`).val()) || 0;
    productosSeleccionados[id] = cantidad;
    
    if (cantidad === 0) {
        delete productosSeleccionados[id];
    }
    
    actualizarProductosSeleccionadosModal();
}

function aplicarSugerido(id) {
    const producto = productos.find(p => p.id === id);
    if (producto) {
        $(`#cantidad_${id}`).val(producto.sugerido);
        actualizarCantidad(id);
    }
}

function actualizarProductosDisponibles() {
    const inicio = (paginaActual - 1) * productosPorPagina + 1;
    const fin = Math.min(paginaActual * productosPorPagina, productos.length);
    $('#productosDisponibles').text(`Disponibles ${inicio}-${fin} de ${productos.length}`);
}

function actualizarProductosSeleccionadosModal() {
    const productosConCantidad = Object.keys(productosSeleccionados).filter(id => productosSeleccionados[id] > 0);
    
    if (productosConCantidad.length === 0) {
        $('#productosSeleccionadosModal').html(`
            <div class="text-center text-muted py-5">
                <i class="fas fa-box-open fa-3x mb-3" style="color: #6c757d;"></i>
                <p>No tienes productos seleccionados.</p>
            </div>
        `);
        return;
    }
    
    let html = '';
    productosConCantidad.forEach(id => {
        const producto = productos.find(p => p.id == id);
        const cantidad = productosSeleccionados[id];
        html += `
            <div class="card mb-2" style="border-left: 4px solid #007bff;">
                <div class="card-body p-2" style="background-color: #e3f2fd;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0" style="color: #1976d2;">${producto.nombre}</h6>
                            <small class="text-muted">Cantidad: ${cantidad}</small>
                        </div>
                        <button class="btn btn-sm btn-danger" onclick="eliminarProducto(${id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;
    });
    
    $('#productosSeleccionadosModal').html(html);
}

function eliminarProducto(id) {
    $(`#cantidad_${id}`).val(0);
    delete productosSeleccionados[id];
    actualizarProductosSeleccionadosModal();
}

function cambiarPagina(direccion) {
    const totalPaginas = Math.ceil(productos.length / productosPorPagina);
    const nuevaPagina = paginaActual + direccion;
    
    if (nuevaPagina >= 1 && nuevaPagina <= totalPaginas) {
        paginaActual = nuevaPagina;
        cargarProductos();
        
        // Actualizar paginación visual
        $('.pagination .page-item').removeClass('active');
        $(`.pagination .page-item:nth-child(${paginaActual + 1})`).addClass('active');
    }
}

function guardarProductos() {
    const productosConCantidad = Object.keys(productosSeleccionados).filter(id => productosSeleccionados[id] > 0);
    
    if (productosConCantidad.length === 0) {
        alert('Por favor selecciona al menos un producto.');
        return;
    }
    
    // Actualizar la vista principal
    let html = '';
    productosConCantidad.forEach(id => {
        const producto = productos.find(p => p.id == id);
        const cantidad = productosSeleccionados[id];
        html += `
            <div class="card mb-2" style="border-left: 4px solid #007bff;">
                <div class="card-body p-2" style="background-color: #e3f2fd;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0" style="color: #1976d2;">${producto.nombre}</h6>
                            <small class="text-muted">Cantidad: ${cantidad}</small>
                        </div>
                        <span class="badge badge-primary">${cantidad}</span>
                    </div>
                </div>
            </div>
        `;
    });
    
    $('#productosSeleccionados').html(html);
    $('#productosSeleccionadosData').val(JSON.stringify(productosSeleccionados));
    
    // Cerrar modal
    $('#modalSeleccionarProductos').modal('hide');
    
    // Mostrar mensaje de éxito
    toastr.success('Productos seleccionados correctamente');
}
</script>
@endpush
