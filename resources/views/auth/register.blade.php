@extends('auth.auth')

@section('title', 'Registrarse')

@section('content')
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><b>Alas</b> Chiquitanas</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Crear una nueva cuenta</p>

      <form action="{{ route('register.post') }}" method="POST">
        @csrf

        <div class="form-group has-feedback">
          <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="text" name="ci" class="form-control" placeholder="Carnet de Identidad" required>
          <span class="fa fa-id-card form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="tel" name="celular" class="form-control" placeholder="Número de celular" required>
          <span class="fa fa-phone form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
              <i class="fa fa-user-plus"></i> Registrarse
            </button>
          </div>
        </div>
      </form>

      <div class="text-center" style="margin-top:15px;">
        <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
$(function () {
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%'
  });

  $('form').on('submit', function (e) {
    var p = $('#password').val();
    var c = $('#password_confirmation').val();
    if (p !== c) {
      alert('Las contraseñas no coinciden');
      e.preventDefault();
    }
  });
});
</script>
@endpush
