<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horas = $_POST['horas'];
    $salario_por_hora = $_POST['salario'];
    
    // Cálculo del salario
    if ($horas > 40) {
        $exceso_horas = $horas - 40;
        $salario_total = (40 * $salario_por_hora) + ($exceso_horas * $salario_por_hora * 1.5); // Salario base más el 50% adicional
    } else {
        $salario_total = $horas * $salario_por_hora;
        $salario_total -= $salario_total * 0.05; // Descuento del 5%
    }

    // Formato del resultado
    $salario_total = number_format($salario_total, 2);
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
    <title>Resultado del Salario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado del Cálculo de Salario</h1>
        <p>El salario total a pagar es: <?php echo "B/." . $salario_total; ?></p>
        <a href="index.php">Calcular otro salario</a>
    </div>
</body>
</html>