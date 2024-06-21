<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir cargo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center">

                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                            <form method="POST" action="{{route('cargos.store')}}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="descripcion" :value="__('Descripcion')" />
                                    <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" required autofocus autocomplete="descripcion" />
                                    <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                                </div>


                                <div class="mt-4">
                                    <x-input-label for="clinica_id" :value="__('Clinica')" />
                                    {{-- <x-text-input id="clinica_id" class="block mt-1 w-full" type="text" name="clinica_id" :value="old('clinica_id')" required autofocus autocomplete="clinica_id" /> --}}
                                    <select name="clinica_id" id="clinica_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        @foreach ($clinicas as $clinica)
                                            <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('clinica_id')" class="mt-2" />
                                </div>


                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Crear') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
