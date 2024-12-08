<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Dólares</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Convertidor de Monedas 💰</h1>
        <form action="convertir.php" method="POST">
            <label for="cantidad">Cantidad en Dólares ($US):</label>
            <input type="number" step="0.01" name="cantidad" id="cantidad" min="1" required>

            <div class="botones">
                <button type="submit" name="moneda" value="eur">Convertir a Euros €</button>
                <button type="submit" name="moneda" value="crc">Convertir a Colón Costarricense ₡</button>
                <button type="submit" name="moneda" value="mxn">Convertir a Pesos Mexicanos M$</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <p>Johny Medina 8-954-566 | Desarrollo de Software VII</p>
    </footer>
</body>
</html>