@extends('public.plantilla')

@section('title', 'Cines')

@section('content')
<h2>{{ $cine->RazonSocial }}</h2>

<div class="cine-info">
  <div class="cine-info datos">
    <p>{{ $cine->Direccion }} - {{ $cine->Detalle }}</p>
    <p>Teléfono: {{ $cine->Telefonos }} anexo 865</p>
    <br />
    <div class="tabla">
							<div class="fila">
								<div class="celda-titulo">Lunes y Miércoles</div>
								<div class="celda">S/. 4.00</div>
							</div>
							<div class="fila impar">
								<div class="celda-titulo">Martes</div>
								<div class="celda">S/. 3.50</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Jueves y Viernes</div>
								<div class="celda">S/. 6.50</div>
							</div>
							<div class="fila impar">
								<div class="celda-titulo">Sábado, Domingo y Feriados</div>
								<div class="celda">S/. 7.50</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Adulto mayor y niños hasta 8 años (sábados, domingos y feriados)</div>
								<div class="celda">S/. 4.00</div>
							</div>
							<div class="fila impar">
								<div class="celda-titulo">3D - Lunes y Miércoles</div>
								<div class="celda">S/. 7.50</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">3D - Martes</div>
								<div class="celda">S/. 6.00</div>
							</div>
							<div class="fila impar">
								<div class="celda-titulo">3D - Jueves a Domingo y Feriados</div>
								<div class="celda">S/. 11.00</div>
							</div>
						</div>

    <div class="aviso">
      <p>
        A partir del 1ro de julio de 2016, Cinestar Multicines realizará
        el cobro de la comisión de S/. 1.00 adicional al tarifario
        vigente, a los usuarios que compren sus entradas por el
        aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las
        Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur,
        Porteño, Tumbes y Tacna.
      </p>
    </div>
  </div>

  <img src="{{ $cine->img }}" style=" width: 250px;" />

  <br /><br />
  <h4>
    Los horarios de cada función están sujetos a cambios sin previo
    aviso.
  </h4>
  <br />
  <div class="cine-info peliculas">
    <div class="tabla">

  </div>
</div>

<div>

  <span class="tx_gris"
    >Precios de los juegos: desde S/1.00 en todos los Cine Star.<br />
    Horario de atención de juegos es de 12:00 m hasta las 10:30 pm.
    <br /><br />
    Visitános y diviértete con nosotros.
    <br /><br />
    <b>CINESTAR</b>, siempre pensando en tí.
  </span>
</div>
@endsection