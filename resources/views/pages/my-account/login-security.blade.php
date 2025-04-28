@extends('layouts.online.profile')

@section('profile-content')
<div class="w-full md:flex-1">
    <h2 class="text-xl font-semibold mb-6">Login e segurança</h2>
    
    <div class="space-y-6">
        <div>
            <label class="block text-gray-600 mb-2">E-mail</label>
            <div class="flex">
                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ Auth::user()->email ?? 'exemplo@email.com' }}" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
        </div>
        
        <div>
            <label class="block text-gray-600 mb-2">Senha</label>
            <div class="flex">
                <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="********" disabled>
                <button class="ml-2 px-4 py-2 text-gray-600 hover:text-black">Editar</button>
            </div>
            <p class="text-gray-500 text-sm mt-1">Última atualização há 0 meses</p>
        </div>
    </div>
</div>
@endsection