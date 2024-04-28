<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Distrito') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <!-- contenido -->
              <h1>Update</h1>
              <form method="POST" action="{{ route('distrito.update', $distrito->id) }}">
                @csrf
                @method('PUT')

                <label for="detalle">Detalle</label>
                <input type="text" id="detalle" name="detalle" value="{{ $distrito->Detalle }}">

                <button  style="background: blue;color: white;padding: 6px;border-radius: 5px;">Actualizar</button>

                <a href="{{ route('distrito.index') }}">
                  <button type="button" style="background: red;color: white;padding: 6px;border-radius: 5px;">Cancelar</button>
                </a>

              </form>
            

            </div>
        </div>
    </div>
</x-app-layout>
