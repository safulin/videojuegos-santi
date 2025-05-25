<?php
include('db/conexion.php');
$query = "SELECT * FROM juegos";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Videojuegos Favoritos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
  <h1 class="text-center mb-4"> Mis Videojuegos Favoritos</h1>
  <div class="row">

    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
      <div class="col-md-4 mb-4">
        <div class="card text-dark h-100">
          <img src="<?= $row['imagen'] ?>" class="card-img-top" alt="<?= $row['nombre'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row['nombre'] ?></h5>
            <p><strong>Plataforma:</strong> <?= $row['plataforma'] ?></p>
            <p><strong>Género:</strong> <?= $row['genero'] ?></p>
            <button class="btn btn-primary btn-detalle">Ver descripción</button>
            <p class="descripcion mt-2" style="display:none;"><?= $row['descripcion'] ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

  </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
