<?php
//backend
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
    <style>
        .login-container{
            max-width: 400px;
            margin: 100px auto;
        }

        .password-toggle{
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-1">Login</h4>
            </div>

            <div class="card-body">
                <form action="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario:</label>
                        <input type="text" placeholder="Digite seu usuario" name="username" class="form-control" require autocomplete="off">
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" placeholder="Digite sua senha" name="password" class="form-control" id="password" require>
                        <span class="password-toggle mt-3" onclick="togglePassword()">
                            <i class="bi bi-eye-slash" id="olho"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
    // Alterna o tipo do campo de senha entre "password" e "text"
    let passwordInput = document.getElementById('password');
    passwordInput.type = (passwordInput.type === 'password') ? 'text' : 'password';
    
    // Alterna a classe do ícone
    let olho = document.getElementById('olho');
    if (olho.classList.contains('bi-eye')) {
      olho.classList.replace('bi-eye', 'bi-eye-slash');
    } else {
      olho.classList.replace('bi-eye-slash', 'bi-eye');
    }
  }
    </script>
</body>
</html>