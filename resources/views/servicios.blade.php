@extends('layouts.app')

@section('title', 'Servicios - Sacot Consultores')

@section('content')

<!-- ENCABEZADO -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h1 class="fw-bold">Nuestros Servicios</h1>
        <p class="lead">Soluciones integrales en contaduría, tributación, auditoría y asesoramiento empresarial.</p>
    </div>
</section>

<!-- SERVICIO: IMPUESTOS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="fw-bold">Impuestos</h2>
                <p class="text-muted">
                    Las obligaciones tributarias son una parte crítica de tu gestión financiera. Contamos con amplio conocimiento en normativas fiscales vigentes para personas jurídicas y naturales.
                </p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-primary me-2"></i> Asesoramiento en impuestos nacionales y distritales</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Revisión y/o elaboración de declaración de renta</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Solicitudes de devolución tributaria</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Asesoría tributaria personalizada</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/Impuestos.png') }}" class="img-fluid rounded d-block mx-auto" alt="Impuestos" width="80%" height="80%">
            </div>
        </div>
    </div>
</section>

<!-- SERVICIO: PLANEACIÓN TRIBUTARIA -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-4 flex-md-row-reverse">
            <div class="col-md-6">
                <h2 class="fw-bold">Planeación Tributaria</h2>
                <p class="text-muted">
                    Desarrollamos estrategias fiscales que ayudan a reducir la carga tributaria y mejorar el flujo de caja. Nos enfocamos en el cumplimiento normativo y la eficiencia financiera.
                </p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-primary me-2"></i> Estrategias fiscales a medida</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Mitigación de riesgos fiscales</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Planeación legal y efectiva</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/planeacion.jpg') }}" class="img-fluid rounded d-block mx-auto" alt="Planeación Tributaria" width="80%" height="80%">
            </div>
        </div>
    </div>
</section>

<!-- SERVICIO: REVISORÍA Y AUDITORÍA -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="fw-bold">Revisoría Fiscal y Auditoría Externa</h2>
                <p class="text-muted">
                    Proveemos servicios independientes, confiables y profesionales que fortalecen la transparencia y el control interno de tu empresa.
                </p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-primary me-2"></i> Revisoría fiscal conforme a normas legales</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Auditorías externas con enfoque estratégico</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Reportes detallados y recomendaciones</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/auditoria.jpg') }}" class="img-fluid rounded d-block mx-auto" alt="Revisoría y Auditoría" width="80%" height="80%">
            </div>
        </div>
    </div>
</section>

<!-- OTROS SERVICIOS -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Otros Servicios</h2>
        <div class="row g-4">

            <div class="col-md-3 col-sm-6">
                <div class="text-center px-3">
                    <i class="fas fa-chalkboard-teacher fa-2x text-primary mb-3"></i>
                    <h6 class="fw-semibold">Seminarios y Capacitaciones</h6>
                    <p class="text-muted small">Formación práctica para fortalecer competencias contables y fiscales.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center px-3">
                    <i class="fas fa-piggy-bank fa-2x text-primary mb-3"></i>
                    <h6 class="fw-semibold">Asesoría Financiera</h6>
                    <p class="text-muted small">Apoyo en decisiones de inversión, rentabilidad y crecimiento empresarial.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center px-3">
                    <i class="fas fa-book fa-2x text-primary mb-3"></i>
                    <h6 class="fw-semibold">Asesoría Contable</h6>
                    <p class="text-muted small">Organización y control contable con enfoque legal y estratégico.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center px-3">
                    <i class="fas fa-briefcase fa-2x text-primary mb-3"></i>
                    <h6 class="fw-semibold">Asesoramiento Integral</h6>
                    <p class="text-muted small">Soluciones a medida que integran contaduría, finanzas y cumplimiento tributario.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h3 class="fw-bold mb-3">¿Te interesa alguno de nuestros servicios?</h3>
        <p class="mb-4">Contáctanos y uno de nuestros expertos te orientará según tus necesidades específicas.</p>
        <a href="/contacto" class="btn btn-outline-light btn-lg">Solicita Asesoría</a>
    </div>
</section>

@endsection
