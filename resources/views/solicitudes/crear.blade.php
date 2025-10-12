<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Insumos - Alas Chiquitanas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Solicitar Insumos</h1>
            <p class="text-gray-600">Complete el formulario para solicitar insumos de emergencia</p>
        </div>

        <!-- Formulario -->
        <form action="{{ route('solicitudes.store') }}" method="POST" class="bg-white rounded-lg shadow-md">
            @csrf
            
            <!-- Datos del Solicitante -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Datos del Solicitante
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                            Nombre <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="nombre" name="nombre" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="apellido" class="block text-sm font-medium text-gray-700 mb-1">
                            Apellido <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="apellido" name="apellido" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="carnet" class="block text-sm font-medium text-gray-700 mb-1">
                            Carnet de Identidad <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="carnet" name="carnet" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Correo Electrónico <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="md:col-span-2">
                        <label for="comunidad" class="block text-sm font-medium text-gray-700 mb-1">
                            Comunidad Solicitante <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="comunidad" name="comunidad" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
            </div>

            <!-- Datos de Entrega -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Datos de Entrega
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2">
                        <label for="direccion" class="block text-sm font-medium text-gray-700 mb-1">
                            Dirección <span class="text-red-500">*</span>
                        </label>
                        <textarea id="direccion" name="direccion" rows="2" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>

                    <div>
                        <label for="provincia" class="block text-sm font-medium text-gray-700 mb-1">
                            Provincia <span class="text-red-500">*</span>
                        </label>
                        <select id="provincia" name="provincia" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

                    <div>
                        <label for="celular" class="block text-sm font-medium text-gray-700 mb-1">
                            Nro. de Celular <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="celular" name="celular" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
            </div>

            <!-- Datos de Emergencia -->
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    Datos de Emergencia
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="cantidad_personas" class="block text-sm font-medium text-gray-700 mb-1">
                            Cantidad de Personas Afectadas <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="fecha_emergencia" class="block text-sm font-medium text-gray-700 mb-1">
                            Inicio de Emergencia <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="fecha_emergencia" name="fecha_emergencia" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="md:col-span-2">
                        <label for="tipo_emergencia" class="block text-sm font-medium text-gray-700 mb-1">
                            Tipo de Emergencia <span class="text-red-500">*</span>
                        </label>
                        <select id="tipo_emergencia" name="tipo_emergencia" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

                <!-- Insumos Necesarios -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Insumos Necesarios <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 p-4 bg-gray-50 rounded-md border border-gray-200">
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Agua potable" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Agua potable</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Alimentos no perecederos" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Alimentos no perecederos</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Frazadas" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Frazadas</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Carpas" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Carpas</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Kit de primeros auxilios" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Kit de primeros auxilios</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Medicamentos básicos" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Medicamentos básicos</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Ropa" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Ropa</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Calzado" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Calzado</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Colchones" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Colchones</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Artículos de higiene" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Artículos de higiene</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Utensilios de cocina" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Utensilios de cocina</span>
                        </label>
                        
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded">
                            <input type="checkbox" name="insumos[]" value="Linternas y pilas" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Linternas y pilas</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Botón de Envío -->
            <div class="px-6 pb-6 flex justify-end space-x-3">
                <a href="{{ route('home') }}" 
                    class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
                    Cancelar
                </a>
                <button type="submit" 
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors shadow-sm">
                    Enviar Solicitud
                </button>
            </div>
        </form>
    </div>
</body>
</html>

