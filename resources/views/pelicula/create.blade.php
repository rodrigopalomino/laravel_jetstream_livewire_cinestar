<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <!-- contenido -->
              <h1>create pelicula</h1>

              <form method="POST" action="{{ route('pelicula.store') }}">
                @csrf

                <div>
                  <label for="">Titulo</label>
                  <input type="text" id="Titulo" name="Titulo">
                </div>
                <div>
                  <label for="">Url Imagen</label>
                  <input type="text" id="img" name="img">
                </div>
                <div>
                  <label for="">fecha estreno</label>
                  <input type="text" id="FechaEstreno" name="FechaEstreno">

                  
                </div>
                <div>
                  <label for="">director</label>
                  <input type="text" id="Director" name="Director">
                </div>

                <div>
                  <label for="">id clasificacion</label>
                  <input type="text" id="idClasificacion" name="idClasificacion">
                </div>
                <div>
                  <label for="">id estado</label>
                  <input type="text" id="idEstado" name="idEstado">
                </div>
                <div>
                  <label for="">duracion</label>
                  <input type="text" id="Duracion" name="Duracion">
                </div>
                <div>
                  <label for="">Link</label>
                  <input type="text" id="Link" name="Link">
                </div>
                <div>
                  <label for="">reparto</label>
                  <input type="text" id="Reparto" name="Reparto">
                </div>
                <div>
                  <label for="">sinopsis</label>
                  <input type="text" id="Sinopsis" name="Sinopsis">
                </div>
                <div>
                  <label for="">generos</label>
                  <div>
                    @foreach($generos as $genero)
                      <label for="{{$genero->id}}">{{$genero->Detalle}}</label>
                      <input type="checkbox" name="Generos[]" id="{{$genero->id}}" value="{{$genero->id}}">
                    @endforeach
                  </div>
                  
                </div>

                <button style="background: blue;color: white;padding: 6px;border-radius: 5px;">Crear</button>

                <a href="{{ route('pelicula.index') }}">
                  <button type="button" id="btnSubmit" style="background: red;color: white;padding: 6px;border-radius: 5px;">Cancelar</button>
                </a>

              </form>


            </div>
        </div>
    </div>
</x-app-layout>

