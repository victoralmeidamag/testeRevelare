<div class="max-w-md mx-auto p-6">
    <div class="mb-8 text-center">
        <div class="text-gray-500 mb-1">Passo {{ $currentStep }} de {{ $totalSteps }}</div>
        <h2 class="text-2xl font-semibold mb-4">
            @if($currentStep === 1) Para começar, nos diga seu nome completo @endif
        </h2>
    </div>

    <div>
        @if($currentStep === 1)
            <div>
                <p class="text-gray-500 mb-2">Para começar, nos diga seu nome completo</p>
                <input type="text" wire:model="full_name"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="Nome completo">
                @error('full_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 2)
            <div>
                <p class="text-gray-500 mb-2">Digite seu melhor e-mail</p>
                <input type="email" wire:model="email"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="example@gmail.com">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 3)
            <div>
                <p class="text-gray-500 mb-2">Número de telefone</p>
                <input type="tel" wire:model="phone"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="+55 (00) 00000-0000">
                @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 4)
            <div>
                <p class="text-gray-500 mb-2">Data de nascimento</p>
                <input type="text" wire:model="birthdate"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="00/00/0000">
                @error('birthdate') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 5)
            <div>
                <p class="text-gray-500 mb-2">CPF ou CNPJ</p>
                <input type="text" wire:model="document"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="000.000.000-00">
                @error('document') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 6)
            <div>
                <p class="text-gray-500 mb-2">Empresa em que trabalha (opcional)</p>
                <input type="text" wire:model="firm"
                    class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg"
                    placeholder="Nome da Empresa">
                @error('firm') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif
        @if($currentStep === 7)
            <div x-data="{ showPassword: false }">
                <p class="text-gray-500 mb-2">Senha</p>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" wire:model="password"
                        class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg pr-10"
                        placeholder="Digite sua senha">
                    <button type="button" @click="showPassword = !showPassword"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-black">
                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                        </svg>
                    </button>
                </div>
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div x-data="{ showConfirmPassword: false }" class="mt-4">
                <p class="text-gray-500 mb-2">Confirmar Senha</p>
                <div class="relative">
                    <input :type="showConfirmPassword ? 'text' : 'password'" wire:model="password_confirmation"
                        class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg pr-10"
                        placeholder="Confirme sua senha">
                    <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-black">
                        <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                        </svg>
                    </button>
                </div>
                @error('password_confirmation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @endif

    </div>

    <div class="flex justify-between mt-12">
        @if($currentStep > 1)
            <button type="button" wire:click="previousStep"
                class="px-6 py-3 border border-gray-300 rounded-full hover:bg-gray-50 transition-colors">
                VOLTAR
            </button>
        @else
            <div></div>
        @endif

        <button type="button" wire:click="nextStep"
            class="px-6 py-3 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">
            AVANÇAR
        </button>
    </div>
</div>