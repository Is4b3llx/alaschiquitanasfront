@extends('layouts.adminlte')

@section('title', 'Gestión de Voluntarios')
@section('page_title', 'Gestión de Voluntarios')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Gestión de Voluntarios</li>
@endsection
@section('content')
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
                            <button type="button" class="btn btn-primary active" data-filter="todos">
                                <i class="fas fa-list"></i> Todos
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="activo">
                                <i class="fa fa-user"></i> Activos
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="inactivo">
                                <i class="fa fa-user-times"></i> Inactivos
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="aprobado">
                                <i class="fa fa-check"></i> Aprobados
                            </button>
                            <button type="button" class="btn btn-primary" data-filter="deshabilitado">
                                <i class="fa fa-ban"></i> Deshabilitados
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@php
$voluntarios = [
    ['nombre'=>'Carlos Pérez','edad'=>29,'provincia'=>'Andrés Ibáñez','sangre'=>'O+','estado'=>'aprobado'],
    ['nombre'=>'María López','edad'=>33,'provincia'=>'Chiquitos','sangre'=>'A+','estado'=>'activo'],
    ['nombre'=>'Juan Torres','edad'=>25,'provincia'=>'Velasco','sangre'=>'B-','estado'=>'inactivo'],
    ['nombre'=>'Ana Gutiérrez','edad'=>42,'provincia'=>'Cordillera','sangre'=>'AB+','estado'=>'deshabilitado'],
    ['nombre'=>'Luis Fernández','edad'=>37,'provincia'=>'Warnes','sangre'=>'O-','estado'=>'activo'],
    ['nombre'=>'Paola Roca','edad'=>28,'provincia'=>'Sara','sangre'=>'A-','estado'=>'aprobado'],
    ['nombre'=>'Diego Méndez','edad'=>31,'provincia'=>'Ichilo','sangre'=>'B+','estado'=>'activo'],
    ['nombre'=>'Sofía Aguilar','edad'=>22,'provincia'=>'Guarayos','sangre'=>'AB-','estado'=>'inactivo'],
    ['nombre'=>'Héctor Vargas','edad'=>45,'provincia'=>'Ñuflo de Chávez','sangre'=>'O+','estado'=>'deshabilitado'],
    ['nombre'=>'Elena Suárez','edad'=>34,'provincia'=>'Germán Busch','sangre'=>'A+','estado'=>'aprobado'],
    ['nombre'=>'Mateo Rojas','edad'=>27,'provincia'=>'Ángel Sandoval','sangre'=>'O-','estado'=>'activo'],
    ['nombre'=>'Valeria Pinto','edad'=>39,'provincia'=>'Obispo Santistevan','sangre'=>'B+','estado'=>'inactivo'],
];
@endphp

<div class="row mb-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Lista de Voluntarios</h3>
        <div class="card-tools ml-auto"> 
            <div class="input-group hidden-xs" style="width: 250px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="tablaVoluntarios">
          <tbody>
          <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Provincia</th>
            <th>Tipo de Sangre</th>
            <th >Estado</th>
          </tr>

          @foreach($voluntarios as $v)
            <tr data-estado="{{ $v['estado'] }}">
              <td>{{ $v['nombre'] }}</td>
              <td>{{ $v['edad'] }}</td>
              <td>{{ $v['provincia'] }}</td>
              <td>{{ $v['sangre'] }}</td>
              <td class="">
                  @if($v['estado']==='aprobado')
                    <span class="badge badge-success">Aprobado</span>
                  @elseif($v['estado']==='activo')
                    <span class="badge badge-primary">Activo</span>
                  @elseif($v['estado']==='inactivo')
                    <span class="badge badge-warning">Inactivo</span>
                  @else
                    <span class="badge badge-danger">Deshabilitado</span>
                  @endif
               </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
  .content-wrapper { overflow-x: hidden; }
</style>
@endpush

@push('scripts')
<script>
$(function () {
  $('#filtrosVoluntarios [data-filter]').on('click', function() {
    var filtro = $(this).data('filter'); 
    $('#filtrosVoluntarios .btn').removeClass('active');
    $(this).addClass('active');

    $('#tablaVoluntarios tbody tr').each(function() {
      if ($(this).find('th').length) { $(this).show(); return; } 
      var estado = $(this).data('estado');
      $(this).toggle(filtro === 'todos' || estado === filtro);
    });
  });

  $('input[name="table_search"]').on('keyup', function() {
    var q = $(this).val().toLowerCase();
    $('#tablaVoluntarios tbody tr').each(function() {
      if ($(this).find('th').length) { $(this).show(); return; }
      $(this).toggle($(this).text().toLowerCase().indexOf(q) > -1);
    });
  });
});
</script>
@endpush
