@extends('layouts.app')

@section('title', 'Inicio - Sacot Consultores')

@section('content')

<!-- HERO -->
<section class="text-center py-5 bg-light">
    <div class="container">
        <h1 class="display-5 fw-bold text-dark mb-3">Asesoría contable y financiera con confianza</h1>
        <p class="lead text-muted mb-4">
            En Sacot Consultores te brindamos soluciones profesionales en revisoría fiscal, auditoría externa, declaraciones de renta y más.
        </p>
        <a href="/contacto" class="btn btn-primary btn-lg px-4 py-2">Contáctanos</a>
    </div>
</section>

<!-- SERVICIOS DESTACADOS -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Nuestros Servicios</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-file-invoice-dollar fa-2x text-primary mb-3"></i>
                        <h5 class="card-title fw-semibold">Impuestos</h5>
                        <p class="card-text text-muted">
                            Cumple con tus obligaciones tributarias con asesoramiento en renta, devoluciones y normativas fiscales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-lightbulb fa-2x text-primary mb-3"></i>
                        <h5 class="card-title fw-semibold">Planeación Tributaria</h5>
                        <p class="card-text text-muted">
                            Diseñamos estrategias fiscales que optimizan tu flujo de caja y reducen tu carga impositiva.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-balance-scale fa-2x text-primary mb-3"></i>
                        <h5 class="card-title fw-semibold">Servicios Integrales</h5>
                        <p class="card-text text-muted">
                            Revisoría fiscal, auditoría externa, asesoría financiera y contable, además de capacitaciones especializadas.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="text-center mt-4">
            <a href="/servicios" class="btn btn-outline-primary btn-lg">Ver todos los servicios</a>
        </div> --}}
    </div>
</section>

<!-- LLAMADO A LA ACCIÓN -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">¿Listo para impulsar tus finanzas?</h2>
        <p class="mb-4">Confía en nuestros expertos y lleva tu empresa al siguiente nivel con respaldo contable y financiero.</p>
        <a href="/servicios" class="btn btn-outline-light btn-lg">Ver todos los servicios</a>
    </div>
</section>

<!-- NOSOTROS RESUMEN -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('img/mas10.jpg') }}" class="img-fluid rounded shadow-sm d-block mx-auto" alt="Oficinas Sacot" width="80%" height="80%" >
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold mb-3">Más de 10 años apoyando empresas</h3>
                <p class="text-muted">Somos un equipo de profesionales comprometidos con la excelencia y la ética en cada uno de nuestros servicios. Nuestro enfoque está orientado a brindar soluciones prácticas y sostenibles para empresas de todos los sectores.</p>
                <a href="/nosotros" class="btn btn-primary mt-3">Conoce más</a>
            </div>
        </div>
    </div>
</section>

<!-- PREGUNTAS FRECUENTES -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                        ¿Qué servicios ofrecen para personas naturales?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                        Ofrecemos declaraciones de renta, asesoría tributaria y planificación financiera personalizada.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                        ¿Pueden atender empresas fuera de Bogotá?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                        Sí, contamos con atención virtual para empresas de cualquier ciudad del país.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
