<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sacot Consultores')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Navbar personalizado */
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-custom .nav-link {
            font-weight: 500;
            color: #1e1e2f;
            transition: color 0.3s ease;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: #009ccc;
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.05);
        }

        /* Footer moderno */
        .footer-sacot {
            background-color: #1e1e2f;
            color: #dcdcdc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 4rem;
            padding-bottom: 2rem;
        }

        .footer-sacot a.footer-link {
            color: #dcdcdc;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 6px;
            transition: color 0.3s ease;
        }

        .footer-sacot a.footer-link:hover {
            color: #00bcd4;
        }

        .footer-sacot .social-icon {
            font-size: 1.4rem;
            margin-left: 12px;
            color: #dcdcdc;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer-sacot .social-icon:hover {
            color: #00bcd4;
            transform: translateY(-2px);
        }

        hr {
            opacity: 0.2;
        }
        /* Botón flotante de WhatsApp */
        /* .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 0%;
            padding: 15px;
            font-size: 24px;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
            text-decoration: none;
        } */

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            animation: pulse 2s infinite;
        }
        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img  src="{{ asset('img/LogoSacot.png') }}" alt="Sacot Consultores Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENIDO -->
<main class="container py-5">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="footer-sacot">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 text-center">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <a href="/" class="me-2">
                        <img src="{{ asset('img/sacotFlecha.png') }}" alt="Sacot Consultores Logo" style="height: 50px;">
                    </a>
                    <h5 class="fw-bold text-uppercase mb-0">Sacot Consultores S.A.S</h5>
                </div>
                <p class="small">
                    Expertos en revisoría fiscal, auditoría externa y asesoría contable.
                    Impulsamos tu crecimiento financiero con ética y confianza.
                </p>
            </div>
            

            <div class="col-md-3 mb-4">
                <h6 class="text-uppercase fw-semibold mb-3">Navegación</h6>
                <ul class="list-unstyled small">
                  <li><a href="/" class="footer-link">Inicio</a> </li>
                  <li><a href="/nosotros" class="footer-link">Nosotros</a> </li>
                  <li><a href="/servicios" class="footer-link">Servicios</a> </li>
                    <li><a href="/contacto" class="footer-link">Contacto</a>  </li>
              </ul>
            </div>

            <div class="col-md-5 mb-4">
                <h6 class="text-uppercase fw-semibold mb-3">Contáctanos</h6>
                <ul class="list-unstyled small">
                    <li><i class="fa-solid fa-location-dot me-2"></i> La Calera, Cundinamarca</li>
                    <li><i class="fa-solid fa-envelope me-2"></i> sacot.consultores@yahoo.com</li>
                    <li><i class="fa-solid fa-phone me-2"></i> +57 312 568 5212 – 313 421 2998</li>
                    <li><i class="fa-solid fa-clock me-2"></i> Lunes a Viernes: 8:00am – 6:00pm</li>
                </ul>
            </div>

        </div>

        <hr>

        <div class="d-flex justify-content-between align-items-center flex-column flex-md-row pt-3">
            <p class="mb-2 mb-md-0 small">© {{ date('Y') }} Sacot Consultores. Todos los derechos reservados.</p>
            <div>
                <a href="https://www.facebook.com/share/1Ao2mX69BW/?mibextid=wwXIfr" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        
        <!-- Firma desarrollador -->
        <div class="text-center pt-3">
            <p class="small mb-0" style="color:#999999;">
                Desarrollado por <a href="/" class="footer-link" target="_blank">Codesof Enterprise</a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/573134212998?text=Hola%2C%20estoy%20interesado%20en%20sus%20servicios" class="whatsapp-float" target="_blank" aria-label="Chatea con nosotros en WhatsApp">
    {{-- <i class="fab fa-whatsapp"></i> --}}
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
</a>
{{-- desarrollado or flotante --}}
{{-- <div style="position:fixed; bottom:5px; left:50%; transform:translateX(-50%); font-size:12px; color:#aaa; z-index:999;">
    Desarrollado por <a href="/" target="_blank" style="color:#00bcd4; text-decoration:none;">Codesof Enterprise</a>
</div> --}}

</body>
</html>
