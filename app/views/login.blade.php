<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Erick</title>
  <!--Llamamos los estilos de css de bootstrap -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--assets va mi carpeta public y de ahi a css, lo siguiente es codigo blade-->
  {{ HTML::style('assets/css/dash.css') }} 
</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      <!--de login va a routes.php y de ahí al controlador-->
      {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'form-signin', 'role' => 'form']) }}

      @if(Session::has('error_message'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('error_message') }}
      </div>
      @endif

      <h2 class="form-signin-heading">Iniciar sesión</h2>

      {{ Form::label('username', 'Username', ['class' => 'sr-only']) }}
      {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'autofocus' => '']) }}

      {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
      {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}

      <div class="checkbox">
        <label>
          {{ Form::checkbox('remember', true) }} Recordarme
        </label>
      </div>

      {{ Form::submit('Iniciar sesión', ['class' => 'btn btn-primary btn-block']) }}

      {{ Form::close() }}
      <a class="btn btn-success" href="{{ action('AuthController@registerUser') }}">Crear Usuario</a>
      <a class="btn btn-success" href="{{ action('UserController@showPassRecovery') }}">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
