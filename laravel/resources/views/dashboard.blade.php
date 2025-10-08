<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium mb-4 text-gray-900 dark:text-gray-100">Informações do Usuário</h3>
                <div class="grid grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
                    <p><strong>Nome:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Data de Criação:</strong> {{ Auth::user()->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Última Atualização:</strong> {{ Auth::user()->updated_at->format('d/m/Y H:i') }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('profile.edit') }}" 
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                        Editar Perfil
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
