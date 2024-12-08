<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cálculo de Salario de Empleado</h1>
        <form action="calcular.php" method="POST">
            <label for="horas">Horas Trabajadas:</label>
            <input type="number" name="horas" id="horas" min="1" required>

            <label for="salario">Salario por Hora:</label>
            <input type="number" step="0.01" name="salario" id="salario" min="0.01" required>

            <button type="submit">Calcular Salario</button>
        </form>
    </div>

    <footer class="footer">
        <p>Johny Medina 8-954-566 | Desarrollo de Software VII</p>
    </footer>
</body>
</html>