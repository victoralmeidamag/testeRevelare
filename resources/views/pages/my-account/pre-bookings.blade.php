@extends('layouts.online.profile')

@section('profile-content')
<div class="w-full md:flex-1">
    <h2 class="text-xl font-semibold mb-6">Minhas pré-reservas</h2>
    
    <div class="mb-6 border-b">
        <div class="flex overflow-x-auto">
            <a href="#" class="px-4 py-2 font-medium border-b-2 border-black">Todas (5)</a>
            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-black">Confirmadas (3)</a>
            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-black">Análise pendente (1)</a>
            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-black">Canceladas (1)</a>
        </div>
    </div>
    
    <div class="space-y-6">
        @for ($i = 0; $i < 5; $i++)
        <div class="flex flex-col md:flex-row border-b pb-6">
            <div class="w-full md:w-1/4 mb-4 md:mb-0">
                <div class="bg-gray-200 h-32 w-full"></div>
            </div>
            <div class="w-full md:w-1/2 md:px-4">
                <h3 class="text-lg font-medium">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-600 text-sm">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-gray-600 text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            <div class="w-full md:w-1/4 mt-4 md:mt-0 flex flex-col space-y-2">
                @if($i == 0)
                    <span class="px-4 py-2 bg-gray-200 text-center rounded-md">confirmada</span>
                    <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">cancelar pré-reserva</button>
                @elseif($i == 1)
                    <span class="px-4 py-2 bg-gray-200 text-center rounded-md">confirmada</span>
                    <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">cancelar pré-reserva</button>
                @elseif($i == 2)
                    <span class="px-4 py-2 bg-gray-200 text-center rounded-md">confirmada</span>
                    <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">cancelar pré-reserva</button>
                @elseif($i == 3)
                    <span class="px-4 py-2 bg-gray-200 text-center rounded-md">pendente</span>
                    <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">cancelar pré-reserva</button>
                @elseif($i == 4)
                    <span class="px-4 py-2 bg-gray-200 text-center rounded-md">cancelada pelo locador</span>
                @endif
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection