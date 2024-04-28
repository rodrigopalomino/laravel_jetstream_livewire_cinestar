<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Cine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <!-- contenido -->
              <h1>edit cine</h1>

              <form method="POST" action="{{ route('cine.update', $cine->id) }}">
                @csrf
                @method('PUT')

                <div>
                  <label for="RazonSocial">RazonSocial</label>
                  <input type="text" id="RazonSocial" name="RazonSocial" value="{{ $cine->RazonSocial }}">
                </div>
                <div>
                  <label for="Salas">Salas</label>
                  <input type="text" id="Salas" name="Salas" value="{{ $cine->Salas }}">
                </div>
                <div>
                  <label for="idDistrito">idDistrito</label>
                  <select name="idDistrito" id="idDistito">
                    @foreach($distritos as $distrito)
                      <option value="{{ $distrito->id }}">{{ $distrito->Detalle }}</option>
                    @endforeach
                  </select>
                </div>
                <div>
                  <label for="Direccion">Direccion</label>
                  <input type="text" id="Direccion" name="Direccion" value="{{ $cine->Direccion }}">
                </div>
                <div>
                  <label for="Telefonos">Telefonos</label>
                  <input type="text" id="Telefonos" name="Telefonos" value="{{ $cine->Telefonos }}">
                </div>



                <button style="background: blue;color: white;padding: 6px;border-radius: 5px;">Actualizar</button>

                <a href="{{ route('pelicula.index') }}">
                  <button type="button" id="btnSubmit" style="background: red;color: white;padding: 6px;border-radius: 5px;">Cancelar</button>
                </a>

              </form>


            </div>
        </div>
    </div>
</x-app-layout>

