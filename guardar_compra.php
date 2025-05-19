<?php
session_start();

// Verifica que haya productos
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    die("El carrito está vacío.");
}

// Conexión a SQL Server (ajusta estos valores)
$serverName = "PCHERRARTE\SQLEXPRESS";  // Cambia este valor si es otro
$connectionInfo = [
    "Database" => "pagina",   // <-- Reemplaza por el nombre correcto de tu base de datos
    "UID" => "tecnicos",           // <-- Usuario si usas autenticación SQL
    "PWD" => "123456",        // <-- Contraseña si aplica
    "CharacterSet" => "UTF-8"
];
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

// Insertar cada producto del carrito
foreach ($_SESSION['carrito'] as $producto) {
    $nombre = $producto['nombre_producto'];
    $precio = $producto['precio'];
    $fecha = date('Y-m-d H:i:s');

    $sql = "INSERT INTO compras (nombre_producto, precio, fecha_compra) VALUES (?, ?, ?)";
    $params = [$nombre, $precio, $fecha];
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo "Error al insertar: " . print_r(sqlsrv_errors(), true);
        exit;
    }
}

// Vaciar el carrito
unset($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compra Exitosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-success">¡Compra registrada con éxito!</h2>
    <a href="catalogo.php" class="btn btn-primary mt-3">Volver al catálogo</a>
</body>
</html>
