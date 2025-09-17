<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Nico Castro - Presentación</title>
  </head>
  <body>

    <?php include 'cabecera.inc.php'; ?>
    
    <main>
      <img src="imagenes/FotoPerfil.jpg" alt="Foto de perfil de Nico Castro" width="150" height="150">
      <p>Soy Nico Castro Pérez, estoy en proceso para ejercer de desarrollador web.</p>

      

      <section>
        <h2>Contacto</h2>
        <form action="procesar_consulta.php" method="POST">
          <label for="nombre">Nombre completo:</label><br>
          <input type="text" id="nombre" name="nombre" required><br><br>

          <label for="email">Correo electrónico:</label><br>
          <input type="email" id="email" name="email" required><br><br>

          <label for="telefono">Teléfono:</label><br>
          <input type="tel" id="telefono" name="telefono"><br><br>

          <label for="mensaje">Consulta:</label><br>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea><br><br>

          <button type="submit">Enviar consulta</button>
        </form>
      </section>
    </main>

    <?php include 'footer.inc.php'; ?>

  </body>
</html>
