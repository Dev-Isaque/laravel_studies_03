@extends('layouts.main_layout')

@section('page_title', 'Home Page')

@section('content')

    {{--     <div class="my-4">
        <h1 class="text-center">Este texto faz parte da view</h1> --}}

    {{-- Renderizar o component --}}

    {{--    <x-my-component message="mensagem passada para dentro do componente" /> --}}

    {{-- Renderizar o component que existe dentro de subpasta --}}
    {{-- 
        <x-admin.admin-card :name="$myName" teste="Olá Mundo" />

    </div>

    <p>{{ $myName }}</p> --}}

    {{-- Componentes --}}
    {{-- <div class="text-center mt-5">
        @foreach ($pessoas_linguas as $pessoa => $linguas)

        <x-card-pessoa :nome-pessoa="$pessoa" :linguas-pessoa="$linguas" />

        @endforeach
    </div> --}}

    {{-- Short Attribute Syntax --}}
    {{--     <div class="text-center mt-5">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div> --}}

    {{-- Metodos de Componentes --}}
    {{-- <div class="text-center mt-5">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div>
 --}}
    {{-- Componentes e Slots --}}
    {{--   <div class="row m-5">
        <div class="col">
            <h4 class="text-info"> Como funciona um Slot?</h4>

            <x-other-card>
                <h1 class="text-danger">Este é o Slot!</h1>
            </x-other-card>
        </div>
    </div> --}}

    {{-- Multis Slots --}}

    {{--  <x-multi-slot>

        <x-slot:title> Este é o titulo </x-slot>

        <x-slot:content> Este é o conteúdo </x-slot>

        <x-slot:footer> 
            <ul>
                <li>Item1</li>
                <li>Item2</li>
                <li>Item3</li>
            </ul>
        </x-slot>

    </x-multi-slot> --}}

    {{-- Componentes Anônimos --}}

    <h4>Componente anónimo</h4>
    <x-alert-card>
        Primeira mensagem
    </x-alert-card>

    <x-alert-card>
        Segunda mensagem
    </x-alert-card>

    <x-alert-card>
        Terceira mensagem
    </x-alert-card>

@endsection
