<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST['cantidad'];
    $moneda = $_POST['moneda'];
    
    // Tasas de cambio
    $tasa_eur = 0.84;
    $tasa_crc = 624.32;
    $tasa_mxn = 19.95;

    // Conversiones
    switch ($moneda) {
        case 'eur':
            $resultado = $cantidad * $tasa_eur;
            $moneda_str = 'Euros';
            break;
        case 'crc':
            $resultado = $cantidad * $tasa_crc;
            $moneda_str = 'Colón Costarricense';
            break;
        case 'mxn':
            $resultado = $cantidad * $tasa_mxn;
            $moneda_str = 'Pesos Mexicanos';
            break;
        default:
            $resultado = 0;
            $moneda_str = '';
            break;
    }

    // Formato del resultado
    $resultado = number_format($resultado, 2);
} else {
    echo "Método no válido";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Conversión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado de la Conversión</h1>
        <p><?php echo $cantidad; ?> Dólares equivalen a <?php echo $resultado . " " . $moneda_str; ?>.</p>
        <a href="index.php">Hacer otra conversión</a>
    </div>
</body>
</html>