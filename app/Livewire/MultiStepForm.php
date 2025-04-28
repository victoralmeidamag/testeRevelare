<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class MultiStepForm extends Component
{
    public $currentStep = 1;
    public $totalSteps = 7;
    
    public $full_name;
    public $email;
    public $phone;
    public $birthdate;
    public $document;
    public $firm;
    public $password;
    public $password_confirmation;

    public function nextStep()
    {
        if ($this->currentStep === 1) {
            $this->validate(['full_name' => 'required|min:3']);
        } elseif ($this->currentStep === 2) {
            $this->validate(['email' => 'required|email']);
        } elseif ($this->currentStep === 3) {
            $this->validate(['phone' => 'required']);
        } elseif ($this->currentStep === 4) {
            $this->validate(['birthdate' => 'required']);
        } elseif ($this->currentStep === 5) {
            $this->validate(['document' => 'required']);
        } elseif ($this->currentStep === 6) {
        } elseif ($this->currentStep === 7) {
            $this->validate([
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);
            return $this->submit();
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

    public function submit()
    {
        try {
            $data = $this->validate([
                'full_name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required',
                'birthdate' => 'required',
                'document' => 'required',
                'password' => 'required|min:8|confirmed',
            ]);
            
            $user = User::create([
                'name' => $this->full_name,
                'email' => $this->email,
                'phone' => preg_replace('/[^0-9]/', '', $this->phone),
                'birthdate' => Carbon::createFromFormat('d/m/Y', $this->birthdate)->format('Y-m-d'),
                'document' => preg_replace('/[^0-9]/', '', $this->document),
                'firm' => $this->firm,
                'password' => Hash::make($this->password),
            ]);
            
            return redirect()->route('login')->with('success', 'Usuário criado com sucesso!');
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('login')->with('error', 'Erro ao criar usuário');
        }
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}