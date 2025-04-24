@extends('layouts.offline.principal')

@section('title', 'Página Inicial')

@section('content')
    <div class="content flex justify-center items-center min-h-[calc(100vh-200px)] bg-white"> <!-- Removi px-4 -->
        <div class="w-full max-w-md mx-4">
            <h1 class="text-center text-3xl font-bold mb-8">Registre-se</h1>
            <a href="{{ route('register.steps') }}" 
               class="block w-full bg-black text-white py-3 px-4 rounded-full font-medium hover:bg-gray-800 transition-colors text-center">
                INICIAR CADASTRO
            </a>

            <div class="text-center mt-4 mb-6">
                <p class="text-sm">
                    Já tem um conta?
                    <a href="#" class="text-black font-medium hover:underline">Faça o Login</a>
                </p>
            </div>
            <button
                class="w-full border border-gray-300 bg-transparent py-3 rounded-md flex justify-center items-center gap-2 hover:bg-gray-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"
                    viewBox="0 0 16 16">
                    <path
                        d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                </svg>
                REGISTRE-SE COM O GOOGLE
            </button>
        </div>
    </div>
@endsection