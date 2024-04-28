<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Generos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Contenido Interno -->
                <a href="{{ route('genero.create') }}">
                  <button type="button" style="background: blue;color: white; padding: 10px;">Nuevo genero</button>
                </a>

                <table style="border: 0px solid red; width: 100%;text-align: center;">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Detalle</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($generos as $genero)
                      <tr style="border-top: 1px solid #eeeeee;">
                        <td>{{ $genero->id }}</td>
                        <td>{{ $genero->Detalle }}</td>
                        <td style="display: flex; justify-content: center;">

                          <form method="POST" action="{{ route('genero.destroy', ['genero' => $genero->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="console.log('{{ $genero->id }}')" style="background: red; color: white; padding: 6px; border-radius: 5px;">Borrar</button>
                          </form>

                          <a href="{{ route('genero.edit', $genero->id ) }}">
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
