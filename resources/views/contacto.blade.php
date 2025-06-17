@extends('layouts.app')

@section('title', 'Contáctanos - Sacot Consultores')

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <h2 class="fw-bold text-primary mb-3">Contáctanos</h2>
            <p class="text-muted">
                ¿Tienes preguntas sobre nuestros servicios contables o deseas agendar una asesoría? Llena el siguiente formulario o comunícate con nosotros directamente.
            </p>

            <ul class="list-unstyled mt-4 text-muted">
                <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i> La Calera, Cundinamarca</li>
                <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i> sacot.consultores@yahoo.com</li>
                <li class="mb-2"><i class="fas fa-phone me-2 text-primary"></i> +57 312 568 5212 – 313 421 2998</li>
                <li class="mb-2"><i class="fas fa-clock me-2 text-primary"></i> Lunes a Viernes: 8:00am – 6:00pm</li>
            </ul>
        </div>

        <div class="col-md-6">
            <form id="form-contacto">
                @csrf
                <div class="mb-3">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" required>
                    <div class="invalid-feedback" id="error-nombre"></div>
                </div>
            
                <div class="mb-3">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" class="form-control" name="correo" required>
                    <div class="invalid-feedback" id="error-correo"></div>
                </div>
            
                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" required>
                    <div class="invalid-feedback" id="error-telefono"></div>
                </div>
            
                <div class="mb-3">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" name="mensaje" rows="4" required></textarea>
                    <div class="invalid-feedback" id="error-mensaje"></div>
                </div>
            
                <button type="submit" id="btn-enviar" class="btn btn-primary">
                    Enviar mensaje
                    <span class="spinner-border spinner-border-sm d-none" id="spinner" role="status" aria-hidden="true"></span>
                </button>
            </form>
            
            <div id="respuesta" class="mt-3"></div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <h4 class="fw-semibold mb-3">Ubicación</h4>
        <div class="col-12">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9433.297082257015!2d-73.97390043503452!3d4.722309156392448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8e39a6d5be41%3A0xe1bec6f8812cb910!2sLa%20Calera%2C%20Cundinamarca!5e1!3m2!1ses!2sco!4v1750170077927!5m2!1ses!2sco" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#form-contacto').on('submit', function(e) {
        e.preventDefault();

        // Reset feedback
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
        $('#respuesta').html('');
        $('#spinner').removeClass('d-none');
        $('#btn-enviar').attr('disabled', true);

        $.ajax({
            url: '{{ route("contacto.store") }}',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta').html('<div class="alert alert-success">Mensaje enviado correctamente ✅</div>').hide().fadeIn();

                setTimeout(() => {
                    $('#respuesta').fadeOut();
                }, 5000);

                $('#form-contacto')[0].reset();
            },
            error: function(xhr) {
                console.log(xhr);
                if (xhr.status === 422) {
                    let errores = xhr.responseJSON.errors;
                    for (let campo in errores) {
                        $(`[name="${campo}"]`).addClass('is-invalid');
                        $(`#error-${campo}`).text(errores[campo][0]);
                    }
                } else {
                    $('#respuesta').html('<div class="alert alert-danger">Error inesperado. Intenta más tarde.</div>');
                }
            },
            complete: function() {
                $('#spinner').addClass('d-none');
                $('#btn-enviar').attr('disabled', false);
            }
        });
    });
</script>

@endsection
