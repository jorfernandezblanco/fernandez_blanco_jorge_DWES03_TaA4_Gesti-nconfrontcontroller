<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Saludo</h1>
    <form action="../public/index.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <button type="submit" name="accion" value="saludar">Saludar</button>
        <button type="submit" name="accion" value="despedirse">Despedirse</button>
    </form>
</body>
</html>

