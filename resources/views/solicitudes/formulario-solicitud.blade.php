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
                        <h5 class="text-primary border-bottom pb-2">
                            <i class="fas fa-user mr-2"></i>Datos del Solicitante
                        </h5>
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
                        <h5 class="text-success border-bottom pb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i>Datos de Entrega
                        </h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="direccion">Dirección <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="direccion" name="direccion" rows="2" required></textarea>
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
                        <h5 class="text-danger border-bottom pb-2">
                            <i class="fas fa-exclamation-triangle mr-2"></i>Datos de Emergencia
                        </h5>
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
                        <h5 class="text-info border-bottom pb-2">
                            <i class="fas fa-boxes mr-2"></i>Insumos Necesarios <span class="text-danger">*</span>
                        </h5>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo1" name="insumos[]" value="Agua potable">
                                    <label for="insumo1" class="custom-control-label">Agua potable</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo2" name="insumos[]" value="Alimentos no perecederos">
                                    <label for="insumo2" class="custom-control-label">Alimentos no perecederos</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo3" name="insumos[]" value="Frazadas">
                                    <label for="insumo3" class="custom-control-label">Frazadas</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo4" name="insumos[]" value="Carpas">
                                    <label for="insumo4" class="custom-control-label">Carpas</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo5" name="insumos[]" value="Kit de primeros auxilios">
                                    <label for="insumo5" class="custom-control-label">Kit de primeros auxilios</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo6" name="insumos[]" value="Medicamentos básicos">
                                    <label for="insumo6" class="custom-control-label">Medicamentos básicos</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo7" name="insumos[]" value="Ropa">
                                    <label for="insumo7" class="custom-control-label">Ropa</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo8" name="insumos[]" value="Calzado">
                                    <label for="insumo8" class="custom-control-label">Calzado</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo9" name="insumos[]" value="Colchones">
                                    <label for="insumo9" class="custom-control-label">Colchones</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo10" name="insumos[]" value="Artículos de higiene">
                                    <label for="insumo10" class="custom-control-label">Artículos de higiene</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo11" name="insumos[]" value="Utensilios de cocina">
                                    <label for="insumo11" class="custom-control-label">Utensilios de cocina</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insumo12" name="insumos[]" value="Linternas y pilas">
                                    <label for="insumo12" class="custom-control-label">Linternas y pilas</label>
                                </div>
                            </div>
                        </div>
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
@endsection
