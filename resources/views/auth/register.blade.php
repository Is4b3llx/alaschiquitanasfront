<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse - Alas Chiquitanas</title>
    
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
            padding: 20px 0;
            min-height: 100vh;
        }
        
        .register-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .register-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        
        .register-card {
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: none;
        }
        
        .register-message {
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
        
        .btn-register {
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
        
        .btn-register:hover {
            background-color: #0056b3;
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-link a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .terms-checkbox {
            margin: 20px 0;
            display: flex;
            align-items: flex-start;
        }
        
        .terms-checkbox input[type="checkbox"] {
            margin-right: 10px;
            margin-top: 2px;
        }
        
        .terms-checkbox label {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }
        
        .terms-checkbox a {
            color: #007bff;
            text-decoration: none;
        }
        
        .terms-checkbox a:hover {
            text-decoration: underline;
        }
        
        .password-strength {
            font-size: 12px;
            margin-top: 5px;
        }
        
        .password-match {
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1 class="register-title">Alas Chiquitanas</h1>
        
        <div class="register-card">
            <p class="register-message">Crear una nueva cuenta</p>
            
            <form action="{{ route('register.post') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required>
                        <i class="fas fa-user input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
                        <i class="fas fa-user input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Carnet de Identidad" name="ci" required>
                        <i class="fas fa-id-card input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required>
                        <i class="fas fa-envelope input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="tel" class="form-control" placeholder="Número de celular" name="celular" required>
                        <i class="fas fa-phone input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required id="password">
                        <i class="fas fa-lock input-group-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation" required id="password_confirmation">
                        <i class="fas fa-lock input-group-icon"></i>
                    </div>
                </div>
                
                <div class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        Acepto los <a href="#">términos y condiciones</a>
                    </label>
                </div>
                
                <button type="submit" class="btn-register">
                    Registrarse
                </button>
            </form>
            
            <div class="login-link">
                <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script>
    $(document).ready(function() {
        // Validación de contraseña en tiempo real
        $('#password').on('input', function() {
            const password = $(this).val();
            const strength = getPasswordStrength(password);
            const strengthText = getStrengthText(strength);
            const strengthClass = getStrengthClass(strength);
            
            // Remover indicador anterior
            $('.password-strength').remove();
            
            if (password.length > 0) {
                $(this).after(`<div class="password-strength ${strengthClass}">${strengthText}</div>`);
            }
        });
        
        // Validación de confirmación de contraseña
        $('#password_confirmation').on('input', function() {
            const password = $('#password').val();
            const confirmation = $(this).val();
            
            // Remover indicador anterior
            $('.password-match').remove();
            
            if (confirmation.length > 0) {
                if (password === confirmation) {
                    $(this).after('<div class="password-match text-success"><i class="fas fa-check"></i> Las contraseñas coinciden</div>');
                } else {
                    $(this).after('<div class="password-match text-danger"><i class="fas fa-times"></i> Las contraseñas no coinciden</div>');
                }
            }
        });
        
        // Validación del formulario
        $('form').on('submit', function(e) {
            const password = $('#password').val();
            const confirmation = $('#password_confirmation').val();
            
            if (password !== confirmation) {
                e.preventDefault();
                toastr.error('Las contraseñas no coinciden');
                return false;
            }
            
            if (password.length < 6) {
                e.preventDefault();
                toastr.error('La contraseña debe tener al menos 6 caracteres');
                return false;
            }
            
            toastr.success('¡Cuenta creada exitosamente!');
        });
    });

    function getPasswordStrength(password) {
        let strength = 0;
        
        if (password.length >= 6) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[^a-zA-Z0-9]/)) strength++;
        
        return strength;
    }

    function getStrengthText(strength) {
        if (strength < 2) return 'Contraseña débil';
        if (strength < 4) return 'Contraseña media';
        return 'Contraseña fuerte';
    }

    function getStrengthClass(strength) {
        if (strength < 2) return 'text-danger';
        if (strength < 4) return 'text-warning';
        return 'text-success';
    }
    </script>
</body>
</html>

@push('styles')
<style>
.register-page {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
}

.register-box {
    width: 400px;
    margin: 5% auto;
}

.register-logo {
    font-size: 2.1rem;
    font-weight: 300;
    margin-bottom: 0.9rem;
    text-align: center;
}

.register-logo a {
    color: #fff;
    text-decoration: none;
}

.register-card-body {
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    padding: 2rem;
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

/* Validación de contraseña */
.password-strength {
    margin-top: 5px;
    font-size: 0.8rem;
}

.strength-weak { color: #dc3545; }
.strength-medium { color: #ffc107; }
.strength-strong { color: #28a745; }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Validación de contraseña en tiempo real
    $('#password').on('input', function() {
        const password = $(this).val();
        const strength = getPasswordStrength(password);
        const strengthText = getStrengthText(strength);
        const strengthClass = getStrengthClass(strength);
        
        // Remover indicador anterior
        $('.password-strength').remove();
        
        if (password.length > 0) {
            $(this).after(`<div class="password-strength ${strengthClass}">${strengthText}</div>`);
        }
    });
    
    // Validación de confirmación de contraseña
    $('#password_confirmation').on('input', function() {
        const password = $('#password').val();
        const confirmation = $(this).val();
        
        // Remover indicador anterior
        $('.password-match').remove();
        
        if (confirmation.length > 0) {
            if (password === confirmation) {
                $(this).after('<div class="password-match text-success"><i class="fas fa-check"></i> Las contraseñas coinciden</div>');
            } else {
                $(this).after('<div class="password-match text-danger"><i class="fas fa-times"></i> Las contraseñas no coinciden</div>');
            }
        }
    });
    
    // Validación del formulario
    $('form').on('submit', function(e) {
        const password = $('#password').val();
        const confirmation = $('#password_confirmation').val();
        
        if (password !== confirmation) {
            e.preventDefault();
            toastr.error('Las contraseñas no coinciden');
            return false;
        }
        
        if (password.length < 6) {
            e.preventDefault();
            toastr.error('La contraseña debe tener al menos 6 caracteres');
            return false;
        }
        
        toastr.success('¡Cuenta creada exitosamente!');
    });
});

function getPasswordStrength(password) {
    let strength = 0;
    
    if (password.length >= 6) strength++;
    if (password.match(/[a-z]/)) strength++;
    if (password.match(/[A-Z]/)) strength++;
    if (password.match(/[0-9]/)) strength++;
    if (password.match(/[^a-zA-Z0-9]/)) strength++;
    
    return strength;
}

function getStrengthText(strength) {
    if (strength < 2) return 'Contraseña débil';
    if (strength < 4) return 'Contraseña media';
    return 'Contraseña fuerte';
}

function getStrengthClass(strength) {
    if (strength < 2) return 'strength-weak';
    if (strength < 4) return 'strength-medium';
    return 'strength-strong';
}
</script>
@endpush
