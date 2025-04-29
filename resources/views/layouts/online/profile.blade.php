@extends('layouts.online.principal')

@section('title', 'Minha conta')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-8">Minha conta</h1>
    
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-64 bg-gray-100 p-4">
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('profile.data') }}" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.dados') ? 'bg-gray-200' : '' }}">
                            Meus dados
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.login-security') }}" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.login') ? 'bg-gray-200' : '' }}">
                            Login e segurança
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pre-bookings') }}" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.pre-reservas') ? 'bg-gray-200' : '' }}">
                            Minhas pré-reservas
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.espacos') ? 'bg-gray-200' : '' }}">
                            Meus espaços
                        </a>
                    </li>
                    <li class="pl-4">
                        <a href="#" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.publicacoes') ? 'bg-gray-200' : '' }}">
                            Publicações
                        </a>
                    </li>
                    <li class="pl-4">
                        <a href="#" class="block py-3 px-4 hover:bg-gray-200 {{ request()->routeIs('minha-conta.solicitacoes') ? 'bg-gray-200' : '' }}">
                            Solicitações pré-reservas
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="w-full md:flex-1">
            @yield('profile-content')
        </div>
    </div>
</div>
@endsection