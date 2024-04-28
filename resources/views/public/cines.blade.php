@extends('public.plantilla')

@section('title', 'Cines')

@section('content')
  <br />
    <h1>Nuestros Cines</h1>
  <br />

  @foreach($cines as $cine)
      <div class="contenido-cine">
          <img src="{{ $cine->img }}" width="227" height="170" />
          <div class="datos-cine">
            <h4>{{ $cine->RazonSocial }}</h4>
            <br />
            <span
              >{{ $cine->Direccion }} - {{ $cine->Detalle }}<br /><br />Teléfono: {{ $cine->Telefonos }}  anexo
              865</span
            >
          </div>
          <br />
          <a
            href="{{ url('/cine/'.$cine->id) }}"
          >
            <img src="img/varios/ico-info2.png" width="150" height="40" />
          </a>
        </div>
    @endforeach
@endsection