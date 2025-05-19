<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Hardware Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Nuevos colores para el menú */
        .navbar-custom {
            background-color: #f8f9fa !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand,
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
        
        /* Nuevos colores para el footer */
        .footer-custom {
            background-color: #e9ecef !important;
            color: #2c3e50 !important;
            border-top: 1px solid #dee2e6;
        }
        .footer-custom a {
            color: #2c3e50 !important;
            text-decoration: none;
        }
        .footer-custom a:hover {
            color: #3498db !important;
        }
        .footer-custom h5 {
            color: #2c3e50;
            font-weight: 600;
        }
        
        /* Estilos para los íconos de redes sociales */
        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            transition: all 0.3s ease;
            background-color: #2c3e50;
            color: white !important;
        }
        .social-icon:hover {
            transform: translateY(-3px);
            opacity: 0.9;
        }
        .facebook:hover { background-color: #3b5998 !important; }
        .twitter:hover { background-color: #1DA1F2 !important; }
        .instagram:hover { background: linear-gradient(45deg, #405DE6, #833AB4, #C13584, #E1306C, #FD1D1D) !important; }
        .youtube:hover { background-color: #FF0000 !important; }
        .whatsapp:hover { background-color: #25D366 !important; }
        .tiktok:hover { background-color: #000000 !important; }
        
        /* Botón de newsletter */
        .btn-newsletter {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-newsletter:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
    </style>
</head>
<body>
    <!-- Navbar con nuevo diseño -->
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="quienes somos.php">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="compras.php">Compra</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-cart3"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

           <div class="container mt-4">
            <h1 class="text-center">Bienvenido a Hardware Store</h1>
            <p class="text-center"><strong>Tu tienda de confianza para componentes de computadora de alta calidad.</strong></p><br>
            
            <p class="text-center"><strong>En Hardware Store, nos especializamos en la venta de componentes para computadoras de alta calidad. Ofrecemos una amplia gama de productos, incluyendo tarjetas gráficas, procesadores, memorias RAM, discos duros, fuentes de poder, placas base y accesorios.

Garantizamos productos originales, precios competitivos y asesoría experta para ayudarte a encontrar el mejor hardware según tus necesidades, ya sea para gaming, trabajo o ensamblaje de PC de alto rendimiento.</p></strong>

    
        <div class="container mt-5">
            <h2 class="text-center">¿Por qué elegirnos?</h2>
            <div class="row mt-4">
                <div class="col-md-4 text-center">
                    <img src="https://www.die-medienanstalten.de/fileadmin/_processed_/7/4/csm_Header_Themen_Public_Value_7294b2e0f6.jpeg" class="img-fluid rounded" alt="Calidad garantizada">
                    <h4 class="mt-3">Calidad Garantizada</h4>
                    <p>Ofrecemos solo los mejores productos para asegurar el máximo rendimiento.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://thelogisticsworld.com/wp-content/uploads/2022/09/Repartidor-de-tiro-medio-hablando-por-telefono.jpg" class="img-fluid rounded" alt="Envíos rápidos">
                    <h4 class="mt-3">Envíos Rápidos</h4>
                    <p>Recibe tus productos en tiempo récord con nuestro eficiente sistema de envíos.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://www.shutterstock.com/image-photo/side-view-line-call-centre-600nw-242966560.jpg" class="img-fluid rounded" alt="Atención al cliente">
                    <h4 class="mt-3">Atención al Cliente</h4>
                    <p>Nuestro equipo está listo para ayudarte en todo momento.</p>
                </div>
            </div>
        </div>



        <!-- Nueva sección Potencia Visual -->
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Potencia visual para tu PC</h2>
                    <p class="lead">Las mejores tarjetas gráficas del mercado</p>
                    <p>En Hardware Store contamos con una amplia selección de tarjetas gráficas de última generación para satisfacer todas tus necesidades, desde edición profesional hasta gaming de alto rendimiento.</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Tarjetas NVIDIA RTX serie 4000</li>
                        <li class="list-group-item">Tarjetas AMD Radeon RX 7000</li>
                        <li class="list-group-item">Renderizado 4K y 8K</li>
                        <li class="list-group-item">Ray Tracing y DLSS</li>
                        <li class="list-group-item">Enfriamiento avanzado</li>
                    </ul>
                    <a href="catalogo.php" class="btn btn-primary">Ver catálogo completo</a>
                </div>
                <div class="col-md-6">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/ada/rtx-4090/geforce-ada-4090-web-og-1200x630.jpg" class="img-fluid rounded shadow" alt="Tarjeta gráfica RTX 4090">
                </div>
            </div>
        </div>


                <!-- Nueva sección Procesadores -->
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h2>Máximo rendimiento con los mejores procesadores</h2>
                    <p class="lead">El cerebro de tu computadora</p>
                    <p>Ofrecemos procesadores de última generación para todo tipo de necesidades, desde computadoras de oficina hasta estaciones de trabajo profesionales y equipos gaming de alto desempeño.</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Procesadores Intel Core i9 13va y 14va generación</li>
                        <li class="list-group-item">Procesadores AMD Ryzen 7000 y Threadripper</li>
                        <li class="list-group-item">Hasta 64 núcleos y 128 hilos</li>
                        <li class="list-group-item">Frecuencias boost hasta 6.0 GHz</li>
                        <li class="list-group-item">Tecnologías de overclocking avanzado</li>
                    </ul>
                    <a href="catalogo.php" class="btn btn-primary">Descubre nuestros procesadores</a>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="https://casopis.chip.cz/obrazky/anotace/souboj-novych-procesoru-od-amd-a-intelu.jpg" class="img-fluid rounded shadow" alt="Procesador AMD Ryzen">
                </div>
            </div>
        </div>


          <!-- Nueva Sección Fuentes de Poder -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Energía confiable para tu sistema</h2>
                <p class="lead">Fuentes de poder de alta eficiencia</p>
                <p>Las fuentes de poder son el corazón de cualquier sistema. Ofrecemos las mejores marcas con certificaciones 80 Plus para garantizar eficiencia energética y protección avanzada para tus componentes.</p>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">Certificación 80 Plus (Bronze, Silver, Gold, Platinum, Titanium)</li>
                    <li class="list-group-item">Potencia desde 500W hasta 1600W</li>
                    <li class="list-group-item">Cableado modular y semi-modular</li>
                    <li class="list-group-item">Protecciones contra sobretensión, cortocircuitos y sobrecarga</li>
                    <li class="list-group-item">Ventilación silenciosa con modo 0 RPM</li>
                </ul>
                <a href="catalogo.php" class="btn btn-primary">Ver fuentes de poder</a>
            </div>
            <div class="col-md-6">
                <img src="https://www.cyberpuerta.mx/img/product/XL/CP-CORSAIR-CP-9020048-WW-1.jpg" class="img-fluid rounded shadow" alt="Fuente de poder Corsair">
            </div>
        </div>
    </div>

    
     <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            transform: translateY(-3px);
        }
        .facebook { background-color: #3b5998; }
        .twitter { background-color: #1DA1F2; }
        .instagram { background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D); }
        .youtube { background-color: #FF0000; }
        .whatsapp { background-color: #25D366; }
        .tiktok { background-color: #000000; }
    </style>
</head>
<body>
    <!-- ... (todo el contenido previo se mantiene igual) ... -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

a