<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Hardware Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Barra de navegación */
        .navbar-custom {
            background-color: #f8f9fa !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand {
            font-weight: 600;
            color: #2c3e50 !important;
        }
        .navbar-custom .nav-link {
            color: #2c3e50 !important;
            font-weight: 500;
        }
        .navbar-custom .nav-link:hover {
            color: #3498db !important;
        }
        .navbar-custom .nav-link.active {
            color: #3498db !important;
            border-bottom: 2px solid #3498db;
        }
        
        /* Tarjetas de productos */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            height: 100%;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .product-img {
            height: 200px;
            object-fit: contain;
            padding: 20px;
            margin: 0 auto;
            display: block;
            background-color: #f8f9fa;
            border-radius: 10px 10px 0 0;
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
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        .card-body {
            text-align: center;
            padding: 20px;
        }
        
        /* Botones */
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        /* Títulos */
        h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-pc-display-horizontal me-2"></i>Hardware Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="quienes somos.php">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="compras.php"><i class="bi bi-cart3"></i> Carrito</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container py-5">
        <h1 class="text-center mb-5">Catálogo de Productos</h1>
        
        <!-- Fila 1: Procesadores -->
        <div class="row mb-4">
            <!-- Producto 1: Intel Core i9-13900K -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/61My4F2-XUL._AC_SX522_.jpg" class="product-img" alt="Intel Core i9-13900K">
                    <div class="card-body">
                        <h5 class="card-title">Intel Core i9-13900K</h5>
                        <div class="mb-2">
                            <span class="badge bg-primary">Nuevo</span>
                            <span class="badge bg-success">En stock</span>
                        </div>
                        <p class="card-text">El procesador más potente de Intel para gaming y creación de contenido.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">24 núcleos</span></div>
                            <div><span class="badge badge-feature">5.8 GHz Turbo</span></div>
                            <div><span class="badge badge-feature">DDR5</span></div>
                            <div><span class="badge badge-feature">PCIe 5.0</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="Intel Core i9-13900K">
                            <input type="hidden" name="precio" value="589.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/61My4F2-XUL._AC_SX522_.jpg">
                            <span class="price-tag">$589.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 2: AMD Ryzen 9 7950X -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/5116zdA9uyL.__AC_SX300_SY300_QL70_FMwebp_.jpg" class="product-img" alt="AMD Ryzen 9 7950X">
                    <div class="card-body">
                        <h5 class="card-title">AMD Ryzen 9 7950X</h5>
                        <div class="mb-2">
                            <span class="badge bg-primary">Nuevo</span>
                            <span class="badge bg-success">En stock</span>
                        </div>
                        <p class="card-text">El mejor procesador de AMD para multitarea y rendimiento extremo.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">16 núcleos</span></div>
                            <div><span class="badge badge-feature">32 hilos</span></div>
                            <div><span class="badge badge-feature">5.7 GHz</span></div>
                            <div><span class="badge badge-feature">AM5</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="AMD Ryzen 9 7950X">
                            <input type="hidden" name="precio" value="549.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/5116zdA9uyL.__AC_SX300_SY300_QL70_FMwebp_.jpg">
                            <span class="price-tag">$549.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 3: Intel Core i7-13700K -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/61m0zH-NiTL.__AC_SX300_SY300_QL70_FMwebp_.jpg" class="product-img" alt="Intel Core i7-13700K">
                    <div class="card-body">
                        <h5 class="card-title">Intel Core i7-13700K</h5>
                        <div class="mb-2">
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-info">Mejor valorado</span>
                        </div>
                        <p class="card-text">Excelente relación calidad-precio para gaming y productividad.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">16 núcleos</span></div>
                            <div><span class="badge badge-feature">5.4 GHz Turbo</span></div>
                            <div><span class="badge badge-feature">DDR4/DDR5</span></div>
                            <div><span class="badge badge-feature">Overclocking</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="Intel Core i7-13700K">
                            <input type="hidden" name="precio" value="419.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/61m0zH-NiTL.__AC_SX300_SY300_QL70_FMwebp_.jpg">
                            <span class="price-tag">$419.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fila 2: Tarjetas Gráficas -->
        <div class="row mb-4">
            <!-- Producto 4: NVIDIA RTX 4090 -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/71GwcN+TseL._AC_UY327_FMwebp_QL65_.jpg" class="product-img" alt="NVIDIA RTX 4090">
                    <div class="card-body">
                        <h5 class="card-title">NVIDIA RTX 4090</h5>
                        <div class="mb-2">
                            <span class="badge bg-primary">Nuevo</span>
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-danger">Top ventas</span>
                        </div>
                        <p class="card-text">La tarjeta gráfica más potente del mercado para gaming 8K y creación 3D.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">24GB GDDR6X</span></div>
                            <div><span class="badge badge-feature">DLSS 3</span></div>
                            <div><span class="badge badge-feature">Ray Tracing</span></div>
                            <div><span class="badge badge-feature">16384 CUDA</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="NVIDIA RTX 4090">
                            <input type="hidden" name="precio" value="1599.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/71GwcN+TseL._AC_UY327_FMwebp_QL65_.jpg">
                            <span class="price-tag">$1,599.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 5: AMD RX 7900 XTX -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/61dzBu-6XIL._AC_UY327_FMwebp_QL65_.jpg" class="product-img" alt="AMD RX 7900 XTX">
                    <div class="card-body">
                        <h5 class="card-title">AMD RX 7900 XTX</h5>
                        <div class="mb-2">
                            <span class="badge bg-primary">Nuevo</span>
                            <span class="badge bg-success">En stock</span>
                        </div>
                        <p class="card-text">Alto rendimiento para gaming 4K con la última arquitectura RDNA 3.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">24GB GDDR6</span></div>
                            <div><span class="badge badge-feature">RDNA 3</span></div>
                            <div><span class="badge badge-feature">DisplayPort 2.1</span></div>
                            <div><span class="badge badge-feature">6144 Stream</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="AMD RX 7900 XTX">
                            <input type="hidden" name="precio" value="999.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/61dzBu-6XIL._AC_UY327_FMwebp_QL65_.jpg">
                            <span class="price-tag">$999.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 6: NVIDIA RTX 4070 Ti -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/614JayKl4YL._AC_UY327_FMwebp_QL65_.jpg" class="product-img" alt="NVIDIA RTX 4070 Ti">
                    <div class="card-body">
                        <h5 class="card-title">NVIDIA RTX 4070 Ti</h5>
                        <div class="mb-2">
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-info">Mejor valorado</span>
                        </div>
                        <p class="card-text">Excelente rendimiento para gaming en 1440p y 4K con DLSS 3.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">12GB GDDR6X</span></div>
                            <div><span class="badge badge-feature">DLSS 3</span></div>
                            <div><span class="badge badge-feature">7680 CUDA</span></div>
                            <div><span class="badge badge-feature">PCIe 4.0</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="NVIDIA RTX 4070 Ti">
                            <input type="hidden" name="precio" value="799.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/614JayKl4YL._AC_UY327_FMwebp_QL65_.jpg">
                            <span class="price-tag">$799.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fila 3: Fuentes de Poder -->
        <div class="row mb-4">
            <!-- Producto 7: Corsair RM850x -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/710giQRHyQS._AC_SX569_.jpg" class="product-img" alt="Corsair RM850x">
                    <div class="card-body">
                        <h5 class="card-title">Corsair RM850x (2021)</h5>
                        <div class="mb-2">
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-warning text-dark">80 Plus Gold</span>
                        </div>
                        <p class="card-text">Fuente modular de alta eficiencia con ventilador de modo cero RPM.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">850W</span></div>
                            <div><span class="badge badge-feature">Full modular</span></div>
                            <div><span class="badge badge-feature">140mm fan</span></div>
                            <div><span class="badge badge-feature">10 años garantía</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="Corsair RM850x (2021)">
                            <input type="hidden" name="precio" value="149.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/710giQRHyQS._AC_SX569_.jpg">
                            <span class="price-tag">$149.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 8: Seasonic PRIME TX-1000 -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/71nEWkz+XKL._AC_SL1500_.jpg" class="product-img" alt="Seasonic PRIME TX-1000">
                    <div class="card-body">
                        <h5 class="card-title">Seasonic PRIME TX-1000</h5>
                        <div class="mb-2">
                            <span class="badge bg-primary">Nuevo</span>
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-danger">80 Plus Titanium</span>
                        </div>
                        <p class="card-text">La fuente más eficiente del mercado con certificación Titanium.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">1000W</span></div>
                            <div><span class="badge badge-feature">Full modular</span></div>
                            <div><span class="badge badge-feature">135mm fan</span></div>
                            <div><span class="badge badge-feature">12 años garantía</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="Seasonic PRIME TX-1000">
                            <input type="hidden" name="precio" value="299.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/71nEWkz+XKL._AC_SL1500_.jpg">
                            <span class="price-tag">$299.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Producto 9: EVGA SuperNOVA 750 G6 -->
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="https://m.media-amazon.com/images/I/7161gvivMVS._AC_SL1500_.jpg" class="product-img" alt="EVGA SuperNOVA 750 G6">
                    <div class="card-body">
                        <h5 class="card-title">EVGA SuperNOVA 750 G6</h5>
                        <div class="mb-2">
                            <span class="badge bg-success">En stock</span>
                            <span class="badge bg-info">80 Plus Gold</span>
                        </div>
                        <p class="card-text">Excelente relación calidad-precio para sistemas de gama alta.</p>
                        <div class="mb-3">
                            <div><span class="badge badge-feature">750W</span></div>
                            <div><span class="badge badge-feature">Full modular</span></div>
                            <div><span class="badge badge-feature">140mm fan</span></div>
                            <div><span class="badge badge-feature">10 años garantía</span></div>
                        </div>
                        <form action="compras.php" method="POST" class="d-flex justify-content-between align-items-center">
                            <input type="hidden" name="nombre_producto" value="EVGA SuperNOVA 750 G6">
                            <input type="hidden" name="precio" value="129.99">
                            <input type="hidden" name="imagen" value="https://m.media-amazon.com/images/I/7161gvivMVS._AC_SL1500_.jpg">
                            <span class="price-tag">$129.99</span>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer (copiado de inicio.php) -->
    <!-- Nuevo Footer Moderno -->
<!-- Nuevo Footer Tech - Diseño Exclusivo -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <!-- Logo y descripción con efecto neón -->
        <div class="text-center mb-5">
            <h3 class="neon-text">
                <i class="bi bi-pc-display-horizontal me-2"></i>HARDWARE STORE
            </h3>
            <p class="text-muted">Componentes de alto rendimiento para tus proyectos</p>
        </div>

        <div class="row g-4">
            <!-- Columna 1: Contacto Tech -->
            <div class="col-lg-4">
                <div class="tech-card p-4 h-100">
                    <h4 class="mb-4 text-primary"><i class="bi bi-headset me-2"></i>Soporte</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <i class="bi bi-geo-alt-fill me-3 mt-1 text-primary"></i>
                            <span>Col. Escalón, San Salvador, El Salvador</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="bi bi-telephone-fill me-3 text-primary"></i>
                            <span>+503 3289-7897</span>
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-envelope-fill me-3 text-primary"></i>
                            <span>info@hardwarestore.com</span>
                        </li>
                    </ul>
                    <div class="mt-4 pt-3 border-top border-secondary">
                        <h5 class="mb-3 text-primary">Horario</h5>
                        <p class="mb-1">Lun-Vie: 9am - 6pm</p>
                        <p>Sáb: 9am - 12pm</p>
                    </div>
                </div>
            </div>

            <!-- Columna 2: Enlaces rápidos estilo terminal -->
            <div class="col-lg-4">
                <div class="tech-card p-4 h-100">
                    <h4 class="mb-4 text-primary"><i class="bi bi-terminal me-2"></i>Accesos Rápidos</h4>
                    <ul class="list-unstyled terminal-links">
                        <li class="mb-2">
                            <span class="text-primary">></span> 
                            <a href="inicio.php" class="text-white hover-underline">Inicio</a>
                        </li>
                        <li class="mb-2">
                            <span class="text-primary">></span> 
                            <a href="quienes_somos.php" class="text-white hover-underline">Nosotros</a>
                        </li>
                        <li class="mb-2">
                            <span class="text-primary">></span> 
                            <a href="catalogo.php" class="text-white hover-underline">Catálogo</a>
                        </li>
                        <li class="mb-2">
                            <span class="text-primary">></span> 
                            <a href="compras.php" class="text-white hover-underline">Carrito</a>
                        </li>
                        <li>
                            <span class="text-primary">></span> 
                            <a href="#" class="text-white hover-underline">Soporte Técnico</a>
                        </li>
                    </ul>
                    
                    <div class="mt-4 pt-3 border-top border-secondary">
                        <h5 class="mb-3 text-primary"><i class="bi bi-shield-lock me-2"></i>Seguridad</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-secondary">SSL Secure</span>
                            <span class="badge bg-secondary">Pagos Seguros</span>
                            <span class="badge bg-secondary">Garantía</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna 3: Newsletter y redes con efecto circuitos -->
            <div class="col-lg-4">
                <div class="tech-card p-4 h-100">
                    <h4 class="mb-4 text-primary"><i class="bi bi-megaphone me-2"></i>Mantente Conectado</h4>
                    <p class="mb-4">Suscríbete para recibir ofertas exclusivas y noticias tech.</p>
                    
                    <div class="input-group mb-4">
                        <input type="email" class="form-control bg-black text-white border-secondary" 
                               placeholder="Tu correo electrónico" aria-label="Email">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-send-fill"></i>
                        </button>
                    </div>
                    
                    <h5 class="mb-3 text-primary"><i class="bi bi-hash me-2"></i>Síguenos</h5>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="social-icon-circuit facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-icon-circuit twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="#" class="social-icon-circuit instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="social-icon-circuit youtube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="#" class="social-icon-circuit tiktok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <a href="#" class="social-icon-circuit whatsapp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección inferior con efecto PCB -->
        <div class="mt-5 pt-4 border-top border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="d-flex align-items-center circuit-line">
                        <p class="mb-0 small text-muted">
                            &copy; 2023 Hardware Store. Todos los derechos reservados.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end gap-3 circuit-line">
                        <a href="#" class="text-muted small hover-text-white">Términos y condiciones</a>
                        <a href="#" class="text-muted small hover-text-white">Política de privacidad</a>
                        <a href="#" class="text-muted small hover-text-white">Aviso legal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Estilos exclusivos para el footer tech */
    .tech-card {
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        border: 1px solid #2a3a4a;
        transition: all 0.3s ease;
    }
    
    .tech-card:hover {
        border-color: #3498db;
        box-shadow: 0 0 15px rgba(52, 152, 219, 0.2);
    }
    
    .neon-text {
        color: #fff;
        text-shadow: 0 0 5px #3498db, 0 0 10px #3498db;
        font-weight: 700;
        letter-spacing: 1px;
    }
    
    .terminal-links li {
        padding: 5px 0;
        border-left: 2px solid transparent;
        transition: all 0.3s ease;
    }
    
    .terminal-links li:hover {
        border-left-color: #3498db;
        padding-left: 10px;
    }
    
    .hover-underline {
        position: relative;
        text-decoration: none;
    }
    
    .hover-underline::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #3498db;
        transition: width 0.3s ease;
    }
    
    .hover-underline:hover::after {
        width: 100%;
    }
    
    .social-icon-circuit {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white !important;
        font-size: 1.2rem;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .social-icon-circuit::before {
        content: '';
        position: absolute;
        top: -100%;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            45deg,
            transparent, transparent, #3498db, transparent, transparent
        );
        transition: all 0.6s ease;
    }
    
    .social-icon-circuit:hover::before {
        top: 100%;
        left: 100%;
    }
    
    .social-icon-circuit:hover {
        transform: translateY(-3px);
    }
    
    .facebook { background-color: #3b5998; }
    .twitter { background-color: #1DA1F2; }
    .instagram { background: linear-gradient(45deg, #405DE6, #833AB4, #C13584); }
    .youtube { background-color: #FF0000; }
    .tiktok { background-color: #000000; }
    .whatsapp { background-color: #25D366; }
    
    .circuit-line {
        position: relative;
    }
    
    .circuit-line::before {
        content: '';
        position: absolute;
        top: -15px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #3498db, transparent);
    }
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>

<script>
    // Función para agregar productos al carrito
    function agregarAlCarrito(nombre, precio, imagen) {
        // Crear formulario dinámico
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'compras.php';
        
        // Añadir campos ocultos
        const campos = [
            {name: 'accion', value: 'agregar'},
            {name: 'nombre_producto', value: nombre},
            {name: 'precio', value: precio},
            {name: 'imagen', value: imagen}
        ];
        
        campos.forEach(campo => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = campo.name;
            input.value = campo.value;
            form.appendChild(input);
        });
        
        // Enviar formulario
        document.body.appendChild(form);
        form.submit();
    }

    // Actualizar contador del carrito al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        // Esto puede ser reemplazado por una llamada AJAX para obtener el conteo real
        const cartCount = localStorage.getItem('cartCount') || 0;
        document.getElementById('cart-count').textContent = cartCount;
    });
</script>


</body>
</html>