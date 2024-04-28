<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Cines') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Contenido Interno -->
                <a href="{{ route('cine.create') }}">
                  <button type="button" style="background: blue;color: white; padding: 10px;">Nuevo cine</button>
                </a>

                <table style="border: 0px solid red; width: 100%;text-align: center;">
                  <thead>
                    <tr>
                      <th>Img</th>
                      <th>RazonSocial</th>
                      <th>Salas</th>
                      <th>idDistrito</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cines as $cine)
                      <tr style="border-top: 1px solid #eeeeee;">
                        <td>
                          <img src="{{ $cine->img }}" width="100px">
                        </td>
                        <td>{{ $cine->RazonSocial }}</td>
                        <td>{{ $cine->Salas }}</td>
                        <td>{{ $cine->idDistrito }}</td>
                        <td>{{ $cine->Direccion }}</td>
                        <td>{{ $cine->Telefonos }}</td>
                        <td style="display: flex; justify-content: center;">

                          <form method="POST" action="{{ route('cine.destroy', ['cine' => $cine->id]) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="console.log('{{ $cine->id }}')" style="background: red; color: white; padding: 6px; border-radius: 5px;">Borrar</button>
                          </form>

                          <a href="{{ route('cine.edit', $cine->id ) }}">
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
