<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStepForm extends Component
{
    public $currentStep = 1;
    public $totalSteps = 7; // Total de passos do formulário
    
    public $nome_completo;
    public $email;
    public $phone;
    public $birthdate;
    public $document;
    public $job;
    public $password;
    public $password_confirmation;

    public function nextStep()
    {
        if ($this->currentStep === 1) {
            $this->validate(['nome_completo' => 'required|min:3']);
        }

        if ($this->currentStep === 2) {
            $this->validate(['email' => 'required|email']);
        }

        if ($this->currentStep === 3) {
            $this->validate(['phone' => 'required']);
        }
        
        if ($this->currentStep === 4) {
            $this->validate(['birthdate' => 'required']);
        }
        
        if ($this->currentStep === 5) {
            $this->validate(['document' => 'required']);
        }
        
        if ($this->currentStep === 6) {
            $this->validate(['job' => 'required']);
        }
        
        if ($this->currentStep === 7) {
            $this->validate([
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);
        }
        
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

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}