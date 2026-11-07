<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Backoffice Bancário - Painel Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Caixa de Boas-vindas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Bem-vindo ao Painel do Funcionário</h3>
                <p class="text-gray-600">Sessão iniciada com sucesso. Seleciona uma das opções abaixo para gerir o sistema.</p>
            </div>

            <!-- Grelha de Ações -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Cartão: Gestão de Clientes / Utilizadores -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-600 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-indigo-600 mb-2">Gestão de Clientes</h4>
                        <p class="text-gray-600 text-sm mb-4">Criar, listar e pesquisar utilizadores e administradores do banco.</p>
                    </div>
                    <div>
                        <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition">
                            Gerir Utilizadores &rarr;
                        </a>
                    </div>
                </div>

                <!-- Cartão: Abertura de Contas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-600 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-green-600 mb-2">Abertura de Contas</h4>
                        <p class="text-gray-600 text-sm mb-4">Abrir novas contas bancárias com PIN e saldo inicial.</p>
                    </div>
                    <div>
                        <span class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest cursor-not-allowed">
                            Em Breve &rarr;
                        </span>
                    </div>
                </div>

                <!-- Cartão: Efetuar Depósito -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-yellow-600 mb-2">Efetuar Depósito</h4>
                        <p class="text-gray-600 text-sm mb-4">Registar depósitos em dinheiro em contas ativas.</p>
                    </div>
                    <div>
                        <span class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest cursor-not-allowed">
                            Em Breve &rarr;
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>