<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GTN8WiREr6FUjzZPL+cxF/aWv9jMX2h04Er5q5B5ABa2o7Q9Ehv5BSVCSK0GJ4mP" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #ff416c, #ff4b2b); /* Fondo degradado similar al de la imagen */
            color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            background-color: #ffffff;
            color: #000000;
            height: 500px; /* Altura ajustada para ser más rectangular */
            width: 450px; /* Aumenta el ancho del div */
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            text-align: center;
        }
        .form-control {
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 10px 15px;
            height: 35px;
            font-size: 16px;
            text-align: center; /* Centra el texto dentro de los campos */
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ff416c;
        }
        .btn-primary {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            border: none;
            border-radius: 25px;
            height: 50px;
            font-size: 18px;
            margin-top: 20px; /* Ajusta el espaciado */
            width: 50%; /* Ajusta el ancho del botón al 100% del formulario */
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }
        .form-group {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }
        .text-center a {
            display: block;
            margin-top: 20px;
            color: #ff416c;
            text-decoration: none;
        }
        .text-center a:hover {
            color: #ff4b2b;
        }
        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-header">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.qixtoCJYaBnVHx_01dzmiwHaHa&pid=Api" alt="Logo" class="logo mb-3">
                    <h2 class="mb-4">Login</h2>
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <form method="POST" action="{{ route('admin.login') }}" id="login-form" class="w-100">
                        @csrf

                        <div class="form-group w-100">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico" required autofocus />
                        </div>

                        <div class="form-group w-100">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required />
                        </div>

                        <div class="form-group w-100">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <p class="form-group w-100 text-center">
                        <a href="{{ route('password.request') }} ">Forgot your password?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
