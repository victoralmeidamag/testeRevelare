<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStepShed extends Component
{
    public $currentStep = 1;
    public $totalSteps = 7;
    
    // Step 1
    public $type = '';

    // Step 2
    public $title = '';

    // Step 3
    public $description = '';

    // Step 4
    public $cep = '';
    public $address = '';
    public $number = '';
    public $district = '';
    public $state = '';
    public $city = '';

    // Step 5
    public $totalArea = '';
    public $paletPositionsCapacity = '';
    public $storageTypes = [];
    public $docksNumber = '';
    public $ceilingHeight = '';
    public $serviceType = 'warehouse_only';
    public $pricePerSqm = '';
    public $equipment = [];
    public $forkliftType = [];
    public $forkliftCapacity = '';

    // Step 6
    public $pricePerPaletMovement = '';
    public $minimumStoragePeriod = '';
    public $minimumContractPeriod = false;

    // Step 7 (Summary)

    public function mount()
    {
        // Initialize with default values if needed
    }

    public function render()
    {
        return view('livewire.multi-step-shed');
    }

    public function nextStep()
    {
        // Validation can be added here for each step
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function submit()
    {
        // Save the warehouse information to the database
        // Redirect or show success message
        
        session()->flash('message', 'Espaço publicado com sucesso!');
        
        // Redirect to dashboard or listing page
        return redirect()->to('/dashboard');
    }

    public function updateStorageType($type, $value)
    {
        if ($value) {
            $this->storageTypes[] = $type;
        } else {
            $this->storageTypes = array_diff($this->storageTypes, [$type]);
        }
    }

    public function updateEquipment($equipment, $value)
    {
        if ($value) {
            $this->equipment[] = $equipment;
        } else {
            $this->equipment = array_diff($this->equipment, [$equipment]);
        }
    }

    public function updateForkliftType($type, $value)
    {
        if ($value) {
            $this->forkliftType[] = $type;
        } else {
            $this->forkliftType = array_diff($this->forkliftType, [$type]);
        }
    }
}