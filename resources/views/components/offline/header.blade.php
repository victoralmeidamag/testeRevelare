<header class="flex justify-between items-center px-[5%] py-4 bg-white shadow-sm">
    <div class="font-bold text-xl mr-auto">
        <a href="{{ route('offline.home') }}">
            <img src="{{asset('img/logo.svg')}}" alt="Logo">
        </a>
    </div>
    
    <nav class="flex gap-8 items-center mr-6">
        <a href="#" class="text-gray-500 text-sm hover:text-gray-800">Lorem ipsum</a>
        <a href="#" class="text-gray-500 text-sm hover:text-gray-800">Suporte</a>
        <a href="#" class="bg-black text-white px-6 py-3 rounded-full text-sm font-bold hover:bg-gray-800 transition-colors">
            ANUNCIE SEU GALPÃO
        </a>
    </nav>
    
    <div class="flex items-center gap-4">
        <a href="{{ route('login') }}" class="text-gray-500 text-sm hover:text-gray-800">Entrar na conta</a>
        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>
    </div>
</header>