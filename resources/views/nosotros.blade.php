@extends('layouts.app')

@section('title', 'Nosotros - Sacot Consultores')

@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('img/sacotFlecha.png') }}" alt="Equipo Sacot"  width="70%" height="70%" class="d-block mx-auto">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3 text-primary">Acerca de Nosotros</h2>
            <p class="text-muted">
                <strong>Sacot Consultores S.A.S</strong>, legalmente constituida desde julio de 2013, se dedica a la prestación de servicios contables, tributarios y financieros, asesoramiento, consultoría, revisoría fiscal, auditoría externa y capacitación continua en temas contables y tributarios. 
            </p>
            <p class="text-muted">
                Contamos con tarjeta de registro n.º 2453, emitida por la Junta Central de Contadores el 8 de noviembre de 2016. Estamos comprometidos a ofrecer servicios de alta calidad, con personal calificado y en constante actualización. Usamos la herramienta AUDITBRAIN, un software en la nube para gestionar auditorías bajo Normas Internacionales de Auditoría.
            </p>
        </div>
    </div>

    <div class="container py-5">    
        <!-- Misión y Visión -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <div class="p-4 border rounded shadow h-100 bg-light">
                    <h4 class="text-primary fw-bold">Misión</h4>
                    <p class="text-muted mb-0">
                        Brindar oportunamente soluciones financieras, contables y tributarias a nuestros clientes, a través de personal altamente calificado, mediante nuestros servicios de revisoría fiscal, auditoría externa, asesoría contable, financiera y tributaria, y capacitaciones, siempre brindando un apoyo y acompañamiento continuo.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 border rounded shadow h-100 bg-light">
                    <h4 class="text-primary fw-bold">Visión</h4>
                    <p class="text-muted mb-0">
                        Sacot Consultores S.A.S se proyecta para el año 2029 como una firma de auditoría líder a nivel nacional, con un amplio portafolio de servicios, atención óptima, altos estándares de calidad y excelencia, y un firme compromiso con el mejoramiento continuo y la satisfacción de nuestros clientes.
                    </p>
                </div>
            </div>
        </div>

    <div class="row text-center mb-5">
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow h-100">
                <h5 class="fw-semibold text-dark">+10 Años de Experiencia</h5>
                <p class="small text-muted">Brindando asesoría a empresas y personas naturales en el ámbito tributario y contable.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow h-100">
                <h5 class="fw-semibold text-dark">Profesionales Certificados</h5>
                <p class="small text-muted">Contamos con un equipo multidisciplinario altamente capacitado y actualizado.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow h-100">
                <h5 class="fw-semibold text-dark">Compromiso Ético</h5>
                <p class="small text-muted">Nos guiamos por la transparencia, la confidencialidad y la honestidad en cada servicio que ofrecemos.</p>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <h3 class="fw-bold text-primary mb-4">Nuestro Enfoque</h3>
        <p class="text-muted">
            Nuestra filosofía se basa en construir relaciones de largo plazo con nuestros clientes, apoyando el cumplimiento normativo y la toma de decisiones estratégicas a través de información contable y financiera precisa.
        </p>
        <p class="text-muted">
            Trabajamos con pasión y compromiso para ser aliados estratégicos que aporten valor real a cada organización que atendemos.
        </p>
    </div>

    <!-- Apartado de Profesionales -->
    <div class="container py-5 bg-light rounded">
        <h3 class="fw-bold text-center text-primary mb-5">Conoce a Nuestros Profesionales</h3>
    
        <div class="row g-4">
            <!-- Profesional 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 text-center p-3">
                    <div class="display-4 text-primary mb-3"><i class="fas fa-user-tie"></i></div>
                    <h5 class="card-title fw-bold">Oscar Javier Garzón García</h5>
                    <p class="small text-muted">
                        Especialista en Gerencia de Impuestos y Magíster en Tributación. Asesor NIIF, conferencista y docente de posgrado.
                    </p>
                </div>
            </div>
    
            <!-- Profesional 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 text-center p-3">
                    <div class="display-4 text-primary mb-3"><i class="fas fa-user-tie"></i></div>
                    <h5 class="card-title fw-bold">Helmer Avilán Cáceres</h5>
                    <p class="small text-muted">
                        Magíster en Administración, especialista en impuestos. Asesor contable y tributario, conferencista nacional.
                    </p>
                </div>
            </div>
    
            <!-- Profesional 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 text-center p-3">
                    <div class="display-4 text-primary mb-3"><i class="fas fa-user-tie"></i></div>
                    <h5 class="card-title fw-bold">Rubén David Salazar Medina</h5>
                    <p class="small text-muted">
                        Especialista en Ciencias Tributarias y Magíster en Tributación. Docente y asesor con más de 25 años de experiencia.
                    </p>
                </div>
            </div>
    
            <!-- Profesional 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 text-center p-3">
                    <div class="display-4 text-primary mb-3"><i class="fas fa-user-tie"></i></div>
                    <h5 class="card-title fw-bold">Wilson Alejandro Sánchez</h5>
                    <p class="small text-muted">
                        Especialista en Finanzas y Magíster en Tributación. Amplia experiencia en asesoría empresarial y auditoría.
                    </p>
                </div>
            </div>
        </div>
    
        <div class="text-center mt-5">
            <p class="text-muted">También contamos con un equipo de más de 10 contadores con tarjeta profesional vigente, comprometidos con la excelencia.</p>
            <h6 class="fw-bold text-dark">Oscar Javier Garzón García - CEO Sacot Consultores S.A.S</h6>
        </div>
    </div>
</div>
@endsection
