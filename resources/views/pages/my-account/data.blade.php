@php
    $user = Auth::user();
@endphp

@extends('layouts.online.profile')

@section('profile-content')
<div class="w-full md:flex-1">
    <h2 class="text-xl font-semibold mb-6">Meus dados</h2>
    
    <div class="mb-8 flex flex-col items-center md:items-start md:flex-row md:gap-6">
        <div class="mb-4 md:mb-0">
            <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div>
        <div>
            <a href="#" class="text-gray-600 underline">Alterar foto de perfil</a>
        </div>
    </div>
    
    <div class="space-y-6">
        <div>
            <label class="block text-gray-600 mb-2">Nome completo</label>
            <div class="flex">
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ $user->name ?? 'Nome Sobrenome' }}" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
        </div>
        
        <div>
            <label class="block text-gray-600 mb-2">Número de telefone</label>
            <div class="flex">
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ $user->phone ?? '+55 (00) 00000-0000' }}" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
        </div>
        
        <div>
            <label class="block text-gray-600 mb-2">Data de nascimento</label>
            <div class="flex">
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ !empty($user->birthdate) ? (new DateTime($user->birthdate)->format('d/m/Y')) : '00/00/0000' }}" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
        </div>
        
        <div>
            <label class="block text-gray-600 mb-2">Nome da empresa</label>
            <div class="flex">
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ $user->job ?? 'Nome da empresa' }}" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
        </div>
    </div>
</div>
@endsection