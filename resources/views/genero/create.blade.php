<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Genero') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <!-- contenido -->
              <h1>create genero</h1>
              <form method="POST" action="{{ route('genero.store') }}">
                @csrf

                <label for="detalle">Detalle</label>
                <input type="text" id="detalle" name="detalle">

                <button style="background: blue;color: white;padding: 6px;border-radius: 5px;">Crear</button>

                <a href="{{ route('genero.index') }}">
                  <button type="button" style="background: red;color: white;padding: 6px;border-radius: 5px;">Cancelar</button>
                </a>

              </form>
            

            </div>
        </div>
    </div>
</x-app-layout>
