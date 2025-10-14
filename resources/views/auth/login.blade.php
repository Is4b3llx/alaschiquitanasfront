@extends('auth.auth')

@section('title', 'Iniciar Sesión')

@section('content')
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Alas</b> Chiquitanas</a>
    </div>

    <div class="login-box-body">
      <p class="login-box-msg">Inicia sesión para comenzar</p>

      <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="form-group has-feedback">
          <input type="text" name="ci" class="form-control" placeholder="Carnet de Identidad" required>
          <span class="fa fa-id-card form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
              <i class="fa fa-sign-in"></i> Iniciar Sesión
            </button>
          </div>
        </div>
      </form>

      <div class="text-center" style="margin-top:15px;">
        <a href="{{ route('register') }}">Registrar una nueva cuenta</a>
      </div>
    </div>
  </div>
@endsection
