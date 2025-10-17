@extends('layouts.adminlte')

@section('title', 'Galería de Agradecimientos')
@section('page_title', 'Galería de Agradecimientos')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Galería de Agradecimiento</li>
@endsection

@section('content')
<div class="row">
  @foreach([
    [
      'imagen' => 'https://s1.boliviaimpuestos.com/img/2014/05/12102232/donacione-de-mercaderias-1.jpg',
      'codigo' => 'DNX001',
      'comunidad' => 'San Ignacio',
      'fecha' => '05/10/25',
      'donantes' => 'Carlos Pérez, María López, Empresa Solidaria SRL'
    ],
    [
      'imagen' => 'https://www.comexperu.org.pe/upload/images/hechos-170118-090627.jpg',
      'codigo' => 'DNX002',
      'comunidad' => 'Concepción',
      'fecha' => '12/10/25',
      'donantes' => 'Juan Torres, ONG Esperanza, Farmacia Vida'
    ],
    [
      'imagen' => 'https://www.meganoticias.mx/uploads/noticias/ante-desempleocrece-demande-en-el-banco-de-alimentos-de-lm-147125.jpg',
      'codigo' => 'DNX003',
      'comunidad' => 'San Miguel',
      'fecha' => '14/10/25',
      'donantes' => 'Comunidad Vecinal de Santa Cruz'
    ]
  ] as $donacion)
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-body text-center">
        <img src="{{ $donacion['imagen'] }}" alt="Imagen de donación" class="img-thumbnail" style="margin:0 auto; max-height:230px;" height="230">
        <h5 class="text-bold" style="margin-top:10px;">
          Donación {{ $donacion['codigo'] }} entregada en {{ $donacion['comunidad'] }} el {{ $donacion['fecha'] }}
        </h5>
        <p class="text-muted ml-2 mr-2" style="font-style: italic; font-size:small;">
          Gracias a: {{ $donacion['donantes'] }} por su colaboración
    </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
