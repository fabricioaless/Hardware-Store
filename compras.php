<?php
session_start();

// Procesar acciones del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) {
        switch ($_POST['accion']) {
            case 'agregar':
                // Inicializar carrito si no existe
                if (!isset($_SESSION['carrito'])) {
                    $_SESSION['carrito'] = [];
                }
                
                // Buscar si el producto ya está en el carrito
                $encontrado = false;
                foreach ($_SESSION['carrito'] as &$item) {
                    if ($item['nombre'] === $_POST['nombre_producto']) {
                        $item['cantidad'] += 1;
                        $encontrado = true;
                        break;
                    }
                }
                
                // Si no se encontró, agregar nuevo producto
                if (!$encontrado) {
                    $_SESSION['carrito'][] = [
                        'nombre' => $_POST['nombre_producto'],
                        'precio' => (float)$_POST['precio'],
                        'imagen' => $_POST['imagen'],
                        'cantidad' => 1
                    ];
                }
                
                // Redirigir para evitar reenvío del formulario
                header('Location: compras.php');
                exit;
                break;
                
            case 'eliminar':
                if (isset($_POST['indice'])) {
                    array_splice($_SESSION['carrito'], $_POST['indice'], 1);
                }
                break;
        }
    }
}

// Calcular total
$total = 0;
if (!empty($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra - Hardware Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Estilos consistentes con el catálogo */
        .navbar-custom {
            background-color: #f8f9fa !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand, .navbar-custom .nav-link {
            color: #2c3e50 !important;
            font-weight: 500;
        }
        .navbar-custom .nav-link:hover { color: #3498db !important; }
        .navbar-custom .nav-link.active {
            color: #3498db !important;
            border-bottom: 2px solid #3498db;
        }
        .footer-custom {
            background-color: #e9ecef !important;
            color: #2c3e50 !important;
            border-top: 1px solid #dee2e6;
        }
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .product-img {
            height: 200px;
            object-fit: contain;
            padding: 20px;
        }
        .price-tag {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3498db;
        }
        .badge-feature {
            background-color: #e9ecef;
            color: #2c3e50;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .cart-item {
            transition: all 0.3s ease;
        }
        .cart-item:hover {
            background-color: #f8f9fa;
        }
        .cart-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .total-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        .btn-checkout {
            font-weight: bold;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar mejorado -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-pc-display-horizontal me-2"></i>Hardware Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="quienes somos.php">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link active" href="compras.php">Compra</a></li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="compras.php">
                            <i class="bi bi-cart3"></i>
                            <span id="items-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <!-- Sección del carrito -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="cart-container">
                    <h2 class="mb-4">
                        <i class="bi bi-cart3 me-2"></i>Tu Carrito
                        <span id="cart-count-badge" class="badge bg-primary ms-2">0 items</span>
                    </h2>
                    
                    <div id="lista-carrito" class="mb-4">
                        <!-- Los items del carrito se cargarán aquí -->
                        <div class="text-center py-4 text-muted">Tu carrito está vacío</div>
                    </div>
                    
                    <div class="total-box">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Total:</h5>
                            <h3 class="mb-0 text-primary">$<span id="total">0.00</span></h3>
                        </div>
                        <form action="guardar_compra.php" method="post">
    <button type="submit" class="btn btn-success">Finalizar Compra</button>
</form>

                    </div>
                </div>
            </div>
            
            <!-- Sección de productos -->
            <div class="col-lg-7">
                <h2 class="mb-4">
                    <i class="bi bi-box-seam me-2"></i>Productos Disponibles
                </h2>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://m.media-amazon.com/images/I/51wQQ9WWa7L.__AC_SX300_SY300_QL70_ML2_.jpg" class="card-img-top product-img" alt="Procesador">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Procesador Intel i5</h5>
                                <div class="mb-2">
                                    <span class="badge bg-success">En stock</span>
                                </div>
                                <p class="card-text">Potente procesador para alto rendimiento.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price-tag">$300.00</span>
                                        <button class="btn btn-primary" onclick="agregarAlCarrito('Procesador Intel i7', 300)">
                                            <i class="bi bi-cart-plus me-1"></i>Añadir
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://m.media-amazon.com/images/I/71tduSp8ooL._AC_SX679_.jpg" class="card-img-top product-img" alt="Tarjeta Gráfica">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Tarjeta Gráfica RTX 3060</h5>
                                <div class="mb-2">
                                    <span class="badge bg-success">En stock</span>
                                </div>
                                <p class="card-text">Gráficos de última generación para juegos y diseño.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price-tag">$500.00</span>
                                        <button class="btn btn-primary" onclick="agregarAlCarrito('Tarjeta Gráfica RTX 3060', 500)">
                                            <i class="bi bi-cart-plus me-1"></i>Añadir
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="https://m.media-amazon.com/images/I/71NfMZKkpQL.__AC_SX300_SY300_QL70_FMwebp_.jpg" class="card-img-top product-img" alt="SSD">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">SSD 1TB NVMe</h5>
                                <div class="mb-2">
                                    <span class="badge bg-success">En stock</span>
                                </div>
                                <p class="card-text">Almacenamiento ultrarrápido para tu PC.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price-tag">$150.00</span>
                                        <button class="btn btn-primary" onclick="agregarAlCarrito('SSD 1TB NVMe', 150)">
                                            <i class="bi bi-cart-plus me-1"></i>Añadir
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4">
                        <i class="bi bi-pc-display-horizontal me-2"></i>Hardware Store
                    </h5>
                    <p class="pe-3">Tu tienda de confianza para componentes de computadora de alta calidad desde 2010. Ofrecemos los mejores productos con garantía y soporte técnico especializado.</p>
                    <div class="mt-4">
                        <a href="#" class="me-2 text-decoration-none">
                            <span class="social-icon">
                                <i class="bi bi-facebook"></i>
                            </span>
                        </a>
                        <a href="#" class="me-2 text-decoration-none">
                            <span class="social-icon">
                                <i class="bi bi-twitter"></i>
                            </span>
                        </a>
                        <a href="#" class="me-2 text-decoration-none">
                            <span class="social-icon">
                                <i class="bi bi-instagram"></i>
                            </span>
                        </a>
                        <a href="#" class="me-2 text-decoration-none">
                            <span class="social-icon">
                                <i class="bi bi-youtube"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-decoration-none">Inicio</a></li>
                        <li class="mb-2"><a href="quienes_somos.php" class="text-decoration-none">Nosotros</a></li>
                        <li class="mb-2"><a href="catalogo.php" class="text-decoration-none">Catálogo</a></li>
                        <li class="mb-2"><a href="compras.php" class="text-decoration-none">Compra</a></li>
                        <li><a href="#" class="text-decoration-none">Soporte</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i> Col. Escalon, San Salvador</li>
                        <li class="mb-3"><i class="bi bi-telephone-fill me-2"></i> +503 3289-7897</li>
                        <li class="mb-3"><i class="bi bi-envelope-fill me-2"></i> info@hardwarestore.com</li>
                    </ul>
                </div>
            </div>

            <div class="text-center pt-3 mt-3 border-top">
                <p class="mb-0 small">&copy; 2023 Hardware Store. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        function agregarAlCarrito(producto, precio) {
            carrito.push({producto, precio});
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarCarrito();
            showToast(`${producto} añadido al carrito`);
        }

        function actualizarCarrito() {
            let carritoHTML = "";
            let total = 0;
            carrito.forEach((item, index) => {
                carritoHTML += `
                <div class="cart-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div>
                        <h6 class="mb-0">${item.producto}</h6>
                        <small class="text-muted">$${item.precio.toFixed(2)}</small>
                    </div>
                    <button class="btn btn-outline-danger btn-sm" onclick="eliminarDelCarrito(${index})">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>`;
                total += item.precio;
            });
            
            document.getElementById("lista-carrito").innerHTML = carritoHTML || '<div class="text-center py-4 text-muted">Tu carrito está vacío</div>';
            document.getElementById("total").innerText = total.toFixed(2);
            
            // Actualizar ambos contadores
            const count = carrito.length;
            document.getElementById("items-count").innerText = count;
            document.getElementById("cart-count-badge").innerText = count + (count === 1 ? " item" : " items");
        }

        function eliminarDelCarrito(index) {
            const productoEliminado = carrito[index].producto;
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarCarrito();
            showToast(`${productoEliminado} eliminado del carrito`);
        }

        function procederPago() {
            if (carrito.length === 0) {
                showToast("El carrito está vacío", "danger");
                return;
            }
            
            let resumen = "Resumen de compra:\n";
            carrito.forEach(item => {
                resumen += `${item.producto}: $${item.precio.toFixed(2)}\n`;
            });
            resumen += `\nTotal: $${carrito.reduce((acc, item) => acc + item.precio, 0).toFixed(2)}`;
            
            // Simulación de pago exitoso
            showToast("Pago realizado exitosamente", "success");
            carrito = [];
            localStorage.removeItem('carrito');
            actualizarCarrito();
        }

        function showToast(message, type = "success") {
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type} border-0 position-fixed bottom-0 end-0 m-3`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.style.zIndex = '1100';
            
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;
            
            document.body.appendChild(toast);
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
            
            toast.addEventListener('hidden.bs.toast', () => {
                toast.remove();
            });
        }

        // Actualizar el carrito al cargar la página
        window.onload = actualizarCarrito;
    </script>
</body>
</html>