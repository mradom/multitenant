<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- Agrega los enlaces a los estilos de Bootstrap en modo dark -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
  <div class="container">
    <form action="{{route('landlord.register')}}" method="POST" class="flex flex-col items-center justify-center min-h-screen space-y-4">
      <h1 class="py-4 text-4xl font-bold text-indigo-700">Register</h1>
      @csrf
      <div class="form-group my-3">
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="form-group my-3">
        <input type="text" class="form-control" name="domain" placeholder="{domain}.tenant.codigitar.com">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Crear</button>
      </div>
    </form>
  </div>

  <!-- Agrega los scripts de Bootstrap y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
