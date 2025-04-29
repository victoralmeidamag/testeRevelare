<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="mb-8">
        <div class="text-sm text-gray-500 mb-2">{{ $currentStep }}/{{ $totalSteps }}</div>
        <h2 class="text-2xl font-bold">
            @if ($currentStep == 1)
                1. Qual categoria representa melhor o seu espaço?
            @elseif ($currentStep == 2)
                2. Título do armazém
            @elseif ($currentStep == 3)
                3. Descrição Curta
            @elseif ($currentStep == 4)
                4. Localização
            @elseif ($currentStep == 5)
                5. Características da infraestrutura
            @elseif ($currentStep == 6)
                6. Valores
            @elseif ($currentStep == 7)
                7. Resumo
            @endif
        </h2>

        @if ($currentStep == 2)
            <p class="text-sm text-gray-500 mt-1">Dica: Usar um título atrativo que destaque a principal vantagem (localização, tipo de ambiente, etc.)</p>
        @elseif ($currentStep == 3)
            <p class="text-sm text-gray-500 mt-1">Dica: Um resumo de 2 a 3 linhas sobre o imóvel, enfatizando pontos fortes.</p>
        @endif
    </div>

    <div class="mb-8">
        @if ($currentStep == 1)
            <div class="flex flex-wrap gap-2">
                <button wire:click="$set('type', 'Seco')" class="border rounded-md px-4 py-2 @if($type == 'Seco') bg-gray-100 border-gray-400 @else border-gray-300 @endif" style="min-width: 80px;">Seco</button>
                <button wire:click="$set('type', 'Frigorífico')" class="border rounded-md px-4 py-2 @if($type == 'Frigorífico') bg-gray-100 border-gray-400 @else border-gray-300 @endif" style="min-width: 80px;">Frigorífico</button>
                <button wire:click="$set('type', 'Resfriado')" class="border rounded-md px-4 py-2 @if($type == 'Resfriado') bg-gray-100 border-gray-400 @else border-gray-300 @endif" style="min-width: 80px;">Resfriado</button>
            </div>
        @elseif ($currentStep == 2)
            <div>
                <input type="text" wire:model="title" placeholder="Escreva aqui (Exemplo: &quot;Armazém Logístico em São Paulo - Próximo à Marginal Tietê&quot;)" class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg">
                @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @elseif ($currentStep == 3)
            <div>
                <input type="text" wire:model="description" placeholder="Escreva aqui (Exemplo: &quot;Armazém de 2.000 m², com área de estocagem seca e docas para carregamento.&quot;)" class="w-full px-4 py-3 border-b border-gray-300 focus:outline-none focus:border-black text-lg">
                @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        @elseif ($currentStep == 4)
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">CEP</label>
                    <input type="text" wire:model="cep" placeholder="Nome da rua/avenida" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Endereço</label>
                    <input type="text" wire:model="address" placeholder="Nome da rua/avenida" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Número</label>
                    <input type="text" wire:model="number" placeholder="00-00" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bairro</label>
                    <input type="text" wire:model="district" placeholder="Nome da rua/avenida" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                    <select wire:model="state" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                        <option value="">UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cidade</label>
                    <input type="text" wire:model="city" placeholder="Nome da cidade" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                </div>
            </div>
        @elseif ($currentStep == 5)
            <div class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Área total (m²)</label>
                        <input type="text" wire:model="totalArea" placeholder="10.000 m²" class="w-full border rounded-md px-3
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de armazenamento</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:click="updateStorageType('Porta palete', $event.target.checked)" class="form-checkbox">
                            <span>Porta palete</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:click="updateStorageType('Nível piso', $event.target.checked)" class="form-checkbox">
                            <span>Nível piso</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:click="updateStorageType('Racks', $event.target.checked)" class="form-checkbox">
                            <span>Racks</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:click="updateStorageType('Drive-in', $event.target.checked)" class="form-checkbox">
                            <span>Drive-in</span>
                        </label>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Número de docas</label>
                        <select wire:model="docksNumber" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-gray-400">
                            <option value="">Selecione</option>
                            <option value="Menos de 5">Menos de 5</option>
                            <option value="5 a 20">5 a 20</option>
                            <option value="21 a 50">21 a 50</option>
                            <option value="51 a 100">51 a 100</option>
                            <option value="Mais de 100">Mais de 100</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pé-direito (altura)</label>
                        <input type="text" wire:model="ceilingHeight" placeholder="10 m" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-gray-400">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de serviço</label>
                    <div class="space-y-3">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="serviceType" value="warehouse_only" class="form-radio">
                            <span>Apenas armazém</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="serviceType" value="warehouse_labor" class="form-radio">
                            <span>Armazém + Mão de obra</span>
                        </label>
                    </div>
                </div>
                
                <div x-data="{ visible: '{{ $serviceType }}' === 'warehouse_only' }">
                    <div x-show="visible">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Valor por m²</label>
                        <div class="relative" x-data="priceSlider">
                            <input type="text" wire:model="pricePerSqm" placeholder="R$150,00" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-black">
                            <div class="text-xs text-gray-500 mt-1">Valor médio: R$175,00</div>
                            
                            <div class="mt-4">
                                <div class="w-full h-8 flex items-end">
                                    <div class="w-full flex justify-between items-end">
                                        <div class="text-xs">Min: R$50,00</div>
                                        <div class="text-xs">Max: R$300,00</div>
                                    </div>
                                </div>
                                <div class="relative w-full h-1 bg-gray-200 rounded-full" @click="updatePosition($event)">
                                    <div class="absolute w-4 h-4 bg-black rounded-full" 
                                        :style="`left: ${(price - minPrice) / (maxPrice - minPrice) * 100}%; transform: translateX(-50%) translateY(-50%); top: 50%;`">
                                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                                            <div class="bg-black text-white text-xs py-1 px-2 rounded">R$<span x-text="price"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Equipamentos</label>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:click="updateEquipment('Empilhadeira', $event.target.checked)" class="form-checkbox">
                            <span>Empilhadeira</span>
                        </label>
                    </div>
                    
                    <div x-data="{ visible: {{ in_array('Empilhadeira', $equipment ?? []) ? 'true' : 'false' }} }" x-show="visible" class="mt-3 ml-6 space-y-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de empilhadeira</label>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:click="updateForkliftType('Empilhadeira com bateria de chumbo-ácido', $event.target.checked)" class="form-checkbox">
                                <span>Empilhadeira com bateria de chumbo-ácido</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:click="updateForkliftType('Empilhadeira elétrica com bateria de lítio e combustão', $event.target.checked)" class="form-checkbox">
                                <span>Empilhadeira elétrica com bateria de lítio e combustão</span>
                            </label>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Capacidade da empilhadeira (kg)</label>
                            <input type="text" wire:model="forkliftCapacity" placeholder="Capacidade" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-gray-400">
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($currentStep == 6)
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Valor por posição-palete/movimento</label>
                    <input type="text" wire:model="pricePerPaletMovement" placeholder="Exemplo: R$5,00 por posição-palete/movimento" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-gray-400">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Período mínimo de armazenagem</label>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="minimumStoragePeriod" value="Diária" class="form-radio">
                            <span>Diária</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="minimumStoragePeriod" value="Semanal" class="form-radio">
                            <span>Semanal</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="minimumStoragePeriod" value="Mensal" class="form-radio">
                            <span>Mensal</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:model="minimumContractPeriod" class="form-checkbox">
                            <span>Contrato mínimo de 1 mês</span>
                        </label>
                    </div>
                </div>
            </div>
        @elseif ($currentStep == 7)
            <div class="space-y-4">
                <div>
                    <div class="mb-2">Tipo de armazém</div>
                    <div class="inline-block bg-gray-100 px-3 py-1 rounded-md">{{ $type ?: 'Armazém logístico' }}</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Título</div>
                    <div>{{ $title ?: 'Armazém Logístico em São Paulo - Próximo à Marginal Tietê' }}</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Descrição</div>
                    <div>{{ $description ?: 'Armazém de 2.000 m², com área de estocagem seca e docas para carregamento.' }}</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Localização</div>
                    <div>{{ $address ? "$address, $number, $district, $city - $state" : 'Av. Raimundo Pereira de Magalhães, 100, São Paulo - SP' }}</div>
                    <div>{{ $cep ? "CEP: $cep" : 'CEP: 00000-000' }}</div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="font-medium mb-1">Área total (m²)</div>
                        <div>{{ $totalArea ?: '10.000 m²' }}</div>
                    </div>
                    <div>
                        <div class="font-medium mb-1">Capacidade de posições-palete</div>
                        <div>{{ $paletPositionsCapacity ?: '8.000' }}</div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="font-medium mb-1">Tipo de ambiente</div>
                        <div>{{ $type ?: 'Seco' }}</div>
                    </div>
                    <div>
                        <div class="font-medium mb-1">Número de docas</div>
                        <div>{{ $docksNumber ?: 'Mais de 100' }}</div>
                    </div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Pé-direito (altura)</div>
                    <div>{{ $ceilingHeight ?: '10 m' }}</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Equipamentos disponíveis</div>
                    <div>{{ !empty($equipment) ? implode(', ', $equipment) : 'Empilhadeiras, Paleteiras, Sistema de refrigeração' }}</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Horário de funcionamento / Acesso 24h</div>
                    <div>Armazém 24h</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Serviços adicionais</div>
                    <div>Portaria 24h</div>
                </div>
                
                <div>
                    <div class="font-medium mb-1">Possíveis restrições</div>
                    <div>Nenhum</div>
                </div>
            </div>
        @endif
    </div>

    <div class="border-t pt-6 flex justify-between">
        <button wire:click="previousStep" class="py-2 px-8 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
            VOLTAR
        </button>
        
        @if ($currentStep < $totalSteps)
            <button wire:click="nextStep" class="py-2 px-8 bg-black text-white rounded-md hover:bg-gray-800 transition-colors">
                AVANÇAR
            </button>
        @else
            <button wire:click="submit" class="py-2 px-8 bg-black text-white rounded-md hover:bg-gray-800 transition-colors">
                PUBLICAR ESPAÇO
            </button>
        @endif
    </div>
</div>