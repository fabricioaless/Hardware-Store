<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Hardware Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Estilos consistentes con inicio.php */
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
        
        .footer-custom {
            background-color: #e9ecef !important;
            color: #2c3e50 !important;
            border-top: 1px solid #dee2e6;
        }
        
        /* Estilos específicos para Quiénes Somos */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        
        .mission-card {
            border-left: 5px solid #3498db;
            transition: all 0.3s ease;
        }
        
        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .team-member {
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .timeline {
            position: relative;
            padding-left: 50px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #3498db;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3498db;
            border: 3px solid white;
        }
        
        .values-icon {
            font-size: 2.5rem;
            color: #3498db;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <li class="nav-item"><a class="nav-link active" href="quienes somos.php">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="compras.php">Compra</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-cart3"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestra Historia</h1>
            <p class="lead">Más de una década proporcionando soluciones tecnológicas de calidad</p>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="mb-4">Sobre <span class="text-primary">Hardware Store</span></h2>
                <p class="lead">Fundada en 2010, Hardware Store nació de la pasión por la tecnología y el deseo de ofrecer componentes de computación de alta calidad en El Salvador.</p>
                <p>Lo que comenzó como un pequeño local en San Salvador, hoy se ha convertido en la tienda de referencia para entusiastas de la tecnología, gamers y profesionales que buscan los mejores componentes para sus equipos.</p>
                <p>Nuestro equipo está compuesto por expertos en hardware con años de experiencia, capaces de asesorarte para encontrar exactamente lo que necesitas, ya sea para armar tu primera PC, actualizar tu equipo o construir un sistema de alto rendimiento.</p>
                <div class="d-flex align-items-center mt-4">
                    <div class="me-4 text-center">
                        <h3 class="text-primary mb-0">12+</h3>
                        <p>Años de experiencia</p>
                    </div>
                    <div class="me-4 text-center">
                        <h3 class="text-primary mb-0">50K+</h3>
                        <p>Clientes satisfechos</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-primary mb-0">100%</h3>
                        <p>Productos originales</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid rounded shadow-lg" alt="Equipo de Hardware Store">
            </div>
        </div>
    </div>

    <!-- Misión, Visión y Valores -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Pilares Fundamentales</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 mission-card p-4">
                        <i class="bi bi-bullseye values-icon"></i>
                        <h3>Misión</h3>
                        <p>Proporcionar componentes de computación de la más alta calidad, combinando precios competitivos con asesoramiento experto, para empoderar a nuestros clientes a construir los sistemas que necesitan para alcanzar sus metas tecnológicas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 mission-card p-4">
                        <i class="bi bi-eye values-icon"></i>
                        <h3>Visión</h3>
                        <p>Ser la tienda de referencia en Centroamérica para componentes de computación, reconocida por nuestra excelencia en servicio al cliente, conocimiento técnico y compromiso con la innovación tecnológica.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 mission-card p-4">
                        <i class="bi bi-heart values-icon"></i>
                        <h3>Valores</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Integridad en cada transacción</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pasión por la tecnología</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Compromiso con la calidad</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Innovación constante</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Compromiso con la Comunidad -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" class="img-fluid rounded shadow-lg" alt="Taller comunitario">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Nuestro Compromiso con la Comunidad</h2>
                <p>En Hardware Store creemos en devolver a la comunidad que nos ha apoyado durante todos estos años.</p>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        <strong>Talleres gratuitos:</strong> Mensualmente ofrecemos talleres sobre armado de PC, mantenimiento y optimización.
                    </li>
                    <li class="list-group-item">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        <strong>Apoyo a escuelas:</strong> Donamos equipos y componentes a instituciones educativas para sus laboratorios de computación.
                    </li>
                    <li class="list-group-item">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        <strong>Eventos gaming:</strong> Organizamos torneos locales con premios en hardware para fomentar la comunidad gamer.
                    </li>
                    <li class="list-group-item">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        <strong>Reciclaje electrónico:</strong> Programa de recolección y disposición responsable de componentes electrónicos obsoletos.
                    </li>
                </ul>
                <a href="#" class="btn btn-primary">Conoce nuestros programas</a>
            </div>
        </div>
    </div>

    <!-- Footer (copiado de inicio.php para consistencia) -->
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