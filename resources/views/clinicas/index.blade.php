<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clinicas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Cantidad de usuarios</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Cantidad de cargos</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($clinicas as $clinica)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $clinica->nombre }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $clinica->cantidadUsuarios() }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $clinica->cantidadCargos() }}</td>
                                <td>
                                    <div class="flex justify-around">
                                        <button class="bg-blue-800 hover:bg-blue-700 p-2 rounded text-white">Editar</button>
                                        <form action="" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <input type="submit" class="bg-red-800 hover:bg-red-700 p-2 rounded text-white" value="Eliminar">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
