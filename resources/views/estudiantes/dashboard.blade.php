@extends('layouts.appE')

@section('title', 'Dashboard - Horas Sociales')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/estudianteprincipal.css') }}">
@endsection

@section('content')

<div class="card tarjeta-proceso mb-4">
    <div class="card-body">
        <h2 class="titulo-proceso">Proceso de Horas Sociales</h2>
        <p class="descripcion-proceso">Seguimiento paso a paso de tu proceso</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center">
                <span class="badge circulo-paso me-3">1</span>
                Nota de la institución donde se desarrollarán las horas sociales
            </li>
            <li class="list-group-item d-flex align-items-center">
                <span class="badge circulo-paso me-3">2</span>
                Carta No. 1 Asignación de tutor de servicio social
            </li>
            <li class="list-group-item d-flex align-items-center">
                <span class="badge circulo-paso me-3">3</span>
                Formulario No. 1 Hoja de inscripción para realizar servicio social
            </li>
            <li class="list-group-item d-flex align-items-center">
                <span class="badge circulo-paso me-3">4</span>
                Constancia de la administración académica del 60% de la carrera
            </li>
            <li class="list-group-item d-flex align-items-center">
                <span class="badge circulo-paso me-3">5</span>
                Carta No. 2 Constancia de aprobación del plan de trabajo del servicio social
            </li>
        </ul>
    </div>
</div>

<div class="contenedor-carrusel">
    <h2 class="titulo-proyectos">Proyectos disponibles</h2>
    <div class="d-flex align-items-center justify-content-center">
        <button class="btn boton-carrusel" id="btnIzquierda">
            <span class="flecha-carrusel">&lt;</span>
        </button>
        <div class="carrusel" id="contenedorCarrusel">
            <div class="tarjeta-proyecto">
                <h3 class="card-title">Gestor de TI</h3>
                <p class="card-text">
                    Descripción:<br> Este proyecto busca desarrollar las competencias tecnológicas y de gestión de TI.<br>
                    <strong>Horas requeridas:</strong> 500
                </p>
                <div class="estado-boton">
                    <span class="badge estado-disponible">disponible</span>
                    <a href="#" class="ver-mas">VER MÁS</a>
                </div>
            </div>
            <div class="tarjeta-proyecto">
                <h3 class="card-title">Gestor de TI</h3>
                <p class="card-text">
                    Descripción:<br> Este proyecto busca desarrollar las competencias tecnológicas y de gestión de TI.<br>
                    <strong>Horas requeridas:</strong> 500
                </p>
                <div class="estado-boton">
                    <span class="badge estado-no-disponible">no disponible</span>
                    <a href="#" class="ver-mas">VER MÁS</a>
                </div>
            </div>
            <div class="tarjeta-proyecto">
                <h3 class="card-title">Gestor de Infraestructura</h3>
                <p class="card-text">
                    Descripción:<br> Propuesta para mejorar la infraestructura tecnológica.<br>
                    <strong>Horas requeridas:</strong> 400
                </p>
                <div class="estado-boton">
                    <span class="badge estado-disponible">disponible</span>
                    <a href="#" class="ver-mas">VER MÁS</a>
                </div>
            </div>
            <div class="tarjeta-proyecto">
                <h3 class="card-title">Desarrollador Web</h3>
                <p class="card-text">
                    Descripción:<br> Crear páginas web dinámicas con tecnologías modernas.<br>
                    <strong>Horas requeridas:</strong> 350
                </p>
                <div class="estado-boton">
                    <span class="badge estado-no-disponible">no disponible</span>
                    <a href="#" class="ver-mas">VER MÁS</a>
                </div>
            </div>
        </div>
        <button class="btn boton-carrusel" id="btnDerecha">
            <span class="flecha-carrusel">&gt;</span>
        </button>
    </div>
</div>

<div class="contenedor-documentos">
    <h2 class="titulo-documentos">Documentos</h2>
    <p class="descripcion-documentos">
        Descarga los documentos necesarios para tu proceso
    </p>
    <ul class="lista-documentos">
        <li class="item-documento">
            <a href="documentos/formato_nota_institucion.pdf" download="Formato_Nota_Institucion.pdf" class="enlace-documento">
                <span class="icono-documento">&#128196;</span>
                <span class="texto-documento">FORMATO NOTA DE LA INSTITUCIÓN</span>
            </a>
        </li>
        <li class="item-documento">
            <a href="documentos/formato_inscripcion.pdf" download="Formato_Inscripcion.pdf" class="enlace-documento">
                <span class="icono-documento">&#128196;</span>
                <span class="texto-documento">FORMATO PARA LA INSCRIPCIÓN</span>
            </a>
        </li>
        <li class="item-documento">
            <a href="documentos/formato_presentacion_memoria.pdf" download="Formato_Presentacion_Memoria.pdf" class="enlace-documento">
                <span class="icono-documento">&#128196;</span>
                <span class="texto-documento">FORMATO PARA PRESENTACIÓN DE MEMORIA</span>
            </a>
        </li>
    </ul>
    <a href="#" class="ver-mas-documentos">VER MÁS</a>
</div>

<script src="{{ asset('js/estudianteprincipal.js') }}"></script>
@endsection