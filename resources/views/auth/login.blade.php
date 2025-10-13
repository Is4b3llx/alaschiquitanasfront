<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión - Alas Chiquitanas</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }
        
        .login-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }
        
        .login-card {
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: none;
        }
        
        .login-message {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .input-group {
            position: relative;
        }
        
        .form-control {
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px 50px 15px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
            outline: none;
        }
        
        .input-group-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            z-index: 3;
        }
        
        .btn-login {
            width: 100%;
            height: 50px;
            background-color: #007bff;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            background-color: #0056b3;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Alas Chiquitanas</h1>
        
        <div class="login-card">
            <p class="login-message">Inicia sesión para comenzar</p>
            
            <form action="{{ route('login.post') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Carnet de Identidad" name="ci" required>
                        <i class="fas fa-id-card input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                        <i class="fas fa-lock input-group-icon"></i>
                    </div>
                </div>
                
                <button type="submit" class="btn-login">
                    Iniciar Sesión
                </button>
            </form>
            
            <div class="register-link">
                <a href="{{ route('register') }}">Registrar una nueva cuenta</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>

@push('styles')
<style>
.login-page {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
}

.login-box {
    width: 360px;
    margin: 7% auto;
}

.login-logo {
    font-size: 2.1rem;
    font-weight: 300;
    margin-bottom: 0.9rem;
    text-align: center;
}

.login-logo a {
    color: #fff;
    text-decoration: none;
}

.login-card-body {
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.card {
    border: none;
    border-radius: 10px;
}

.btn-primary {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.4);
}

.form-control {
    border-radius: 25px;
    border: 2px solid #e9ecef;
    padding: 12px 15px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
}

.input-group-text {
    border-radius: 0 25px 25px 0;
    border: 2px solid #e9ecef;
    border-left: none;
    background: #f8f9fa;
}

.input-group .form-control {
    border-right: none;
}

.input-group .form-control:focus + .input-group-append .input-group-text {
    border-color: #007bff;
}

.social-auth-links .btn {
    border-radius: 25px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.social-auth-links .btn:hover {
    transform: translateY(-2px);
}

.btn-danger {
    background: linear-gradient(45deg, #dc3545, #c82333);
    border: none;
}

.btn-danger:hover {
    box-shadow: 0 5px 15px rgba(220,53,69,0.4);
}

.login-box-msg {
    color: #6c757d;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.icheck-primary input[type="checkbox"]:checked + label::before {
    background-color: #007bff;
    border-color: #007bff;
}
</style>
@endpush
