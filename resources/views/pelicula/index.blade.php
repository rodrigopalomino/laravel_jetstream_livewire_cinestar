<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Peliculas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Contenido Interno -->
                <a href="{{ route('pelicula.create') }}">
                  <button type="button" style="background: blue;color: white; padding: 10px;">Nuevo pelicula</button>
                </a>

                <table style="border: 0px solid red; width: 100%;text-align: center;">
                  <thead>
                    <tr>
                      <th>imagen</th>
                      <th>Titulo</th>
                      <th>FechaEstreno</th>
                      <th>Director</th>
                      <th>Generos</th>
                      <th>idClasificacion</th>
                      <th>idEstado</th>
                      <th>Duracion</th>
                      <th>Link</th>
                      <th>Reparto</th>
                      <th>Sinopsis</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($peliculas as $pelicula)
                      <tr style="border-top: 1px solid #eeeeee;">
                        <td>
                          <img src="{{ $pelicula->img }}" width="100px">
                        </td>
                        <td>{{ $pelicula->Titulo }}</td>
                        <td>{{ $pelicula->FechaEstreno }}</td>
                        <td>{{ $pelicula->Director }}</td>
                        <td>{{ $pelicula->Generos }}</td>
                        <td>{{ $pelicula->idClasificacion }}</td>
                        <td>{{ $pelicula->idEstado }}</td>
                        <td>{{ $pelicula->Duracion }}</td>
                        <td>{{ $pelicula->Link }}</td>
                        <td>{{ $pelicula->Reparto }}</td>
                        <td>{{ $pelicula->Sinopsis }}</td>
                        <td style="display: flex; justify-content: center;">

                          <form method="POST" action="{{ route('pelicula.destroy', ['pelicula' => $pelicula->id]) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="console.log('{{ $pelicula->id }}')" style="background: red; color: white; padding: 6px; border-radius: 5px;">Borrar</button>
                          </form>

                          <a href="{{ route('pelicula.edit', $pelicula->id ) }}">
                            <button type="button" style="background: blue;color: white;padding: 6px;border-radius: 5px;">Actualizar</button>
                          </a>

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>



            </div>
        </div>
    </div>
</x-app-layout>
