<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Cine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <!-- contenido -->
              <h1>create cine</h1>

              <form method="POST" action="{{ route('cine.store') }}">
                @csrf
                <div>
                  <label for="img">Url Imagen</label>
                  <input type="text" id="img" name="img">
                </div>
                <div>
                  <label for="RazonSocial">RazonSocial</label>
                  <input type="text" id="RazonSocial" name="RazonSocial">
                </div>
                <div>
                  <label for="Salas">Salas</label>
                  <input type="text" id="Salas" name="Salas">
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
                  <input type="text" id="Direccion" name="Direccion">
                </div>
                <div>
                  <label for="Telefonos">Telefonos</label>
                  <input type="text" id="Telefonos" name="Telefonos">
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

