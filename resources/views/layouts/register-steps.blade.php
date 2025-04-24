@extends('layouts.offline.principal')

@section('title', $title)

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md mx-4">
        <livewire:multi-step-form />
        
        <div class="text-center mt-6">
            <a href="{{ route('register') }}" class="text-black font-medium hover:underline">
                &larr; Voltar
            </a>
        </div>
    </div>
</div>
@endsection