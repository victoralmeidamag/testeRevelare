<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Site Title')</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="flex flex-col min-h-screen">
    <!-- Notificação Global -->
    <div 
        x-data="notification"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-4"
        class="fixed inset-x-0 top-4 flex justify-center z-50 pointer-events-none"
    >
        <div 
            x-bind:class="{
                'bg-green-100 border-green-400 text-green-700': type === 'success',
                'bg-red-100 border-red-400 text-red-700': type === 'error',
                'bg-blue-100 border-blue-400 text-blue-700': type === 'info',
                'bg-yellow-100 border-yellow-400 text-yellow-700': type === 'warning'
            }" 
            class="border px-4 py-3 rounded-lg shadow-lg relative max-w-md w-full pointer-events-auto"
        >
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <template x-if="type === 'success'">
                        <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </template>
                    <template x-if="type === 'error'">
                        <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </template>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium" x-text="type === 'success' ? 'Sucesso!' : type === 'error' ? 'Erro!' : type === 'warning' ? 'Atenção!' : 'Informação!'"></h3>
                    <div class="text-sm" x-text="message"></div>
                </div>
                <div class="ml-auto pl-3">
                    <button @click="show = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('components.offline.header')

    <main class="flex-grow px-[5%] py-8">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('notification', () => ({
                show: false,
                message: '',
                type: '',
                
                init() {
                    // Verifica mensagens da sessão
                    @if(session('success'))
                        this.showNotification('{{ session('success') }}', 'success');
                    @elseif(session('error'))
                        this.showNotification('{{ session('error') }}', 'error');
                    @elseif(session('warning'))
                        this.showNotification('{{ session('warning') }}', 'warning');
                    @elseif(session('info'))
                        this.showNotification('{{ session('info') }}', 'info');
                    @endif
                    
                    // Ouvinte para eventos Livewire
                    window.addEventListener('notify', (event) => {
                        this.showNotification(event.detail.message, event.detail.type);
                    });
                },
                
                showNotification(message, type = 'info') {
                    this.message = message;
                    this.type = type;
                    this.show = true;
                    
                    setTimeout(() => {
                        this.show = false;
                    }, 5000);
                }
            }));
        });
    </script>
    
    @livewireScripts
</body>
</html>