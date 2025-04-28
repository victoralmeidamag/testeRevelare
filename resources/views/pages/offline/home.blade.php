@extends('layouts.offline.principal')

@section('title', 'Página Inicial')

@section('content')
<section class="content px-[5%] py-10 bg-gray-25">
    <div class="bg-gray-200 rounded-lg p-10 mb-12">
        <h2 class="text-4xl font-bold mb-4">Alugue galpões<br>com facilidade</h2>
        
        <div class="bg-white p-6 rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
                <div class="relative">
                    <select class="w-full border border-gray-300 rounded-md py-2 px-4 appearance-none cursor-pointer">
                        <option selected disabled>Tipo de armazém</option>
                        <option>Galpão industrial</option>
                        <option>Armazém logístico</option>
                        <option>Centro de distribuição</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="w-full border border-gray-300 rounded-md py-2 px-4 appearance-none cursor-pointer">
                        <option selected disabled>Tipo de armazenamento</option>
                        <option>Climatizado</option>
                        <option>Refrigerado</option>
                        <option>Padrão</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="w-full border border-gray-300 rounded-md py-2 px-4 appearance-none cursor-pointer">
                        <option selected disabled>Tamanho do armazém</option>
                        <option>Até 500m²</option>
                        <option>500m² - 1000m²</option>
                        <option>1000m² - 2000m²</option>
                        <option>Acima de 2000m²</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="w-full border border-gray-300 rounded-md py-2 px-4 appearance-none cursor-pointer">
                        <option selected disabled>Pé direito (altura)</option>
                        <option>Até 5m</option>
                        <option>5m - 8m</option>
                        <option>8m - 12m</option>
                        <option>Acima de 12m</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                
                <div>
                    <input type="text" placeholder="Quantidade de docas" class="w-full border border-gray-300 rounded-md py-2 px-4">
                </div>
            </div>
            
            <div class="flex justify-between items-center">
                <button class="flex items-center text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filtrar
                </button>
                
                <button class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition-colors font-bold">
                    BUSCAR
                </button>
            </div>
        </div>
    </div>
    
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Categorias</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="bg-gray-200 rounded-lg overflow-hidden">
                <div class="h-40"></div>
                <div class="p-4">
                    <h3 class="font-semibold">Galpão industrial</h3>
                </div>
            </div>
            
            <div class="bg-gray-200 rounded-lg overflow-hidden">
                <div class="h-40"></div>
                <div class="p-4">
                    <h3 class="font-semibold">Armazém logístico</h3>
                </div>
            </div>
            
            <div class="bg-gray-200 rounded-lg overflow-hidden">
                <div class="h-40"></div>
                <div class="p-4">
                    <h3 class="font-semibold">Centro de Distribuição</h3>
                </div>
            </div>
            
            <div class="bg-gray-200 rounded-lg overflow-hidden">
                <div class="h-40"></div>
                <div class="p-4">
                    <h3 class="font-semibold">Câmara fria</h3>
                </div>
            </div>
            
            <div class="bg-gray-200 rounded-lg overflow-hidden">
                <div class="h-40"></div>
                <div class="p-4">
                    <h3 class="font-semibold">Outros</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <h2 class="text-2xl font-bold mb-6">Perto de você</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
            
            <div>
                <div class="bg-gray-200 rounded-lg h-48 mb-3"></div>
                <h3 class="text-lg font-bold">Armazém Logístico em São Paulo - Próximo à Marginal Tietê</h3>
                <p class="text-gray-500 text-sm mb-1">Av. Raimundo Pereira de Magalhães, 136</p>
                <p class="text-sm">Galpão Industrial | 2.000 m²</p>
            </div>
        </div>
    </div>
</section>
@endsection 