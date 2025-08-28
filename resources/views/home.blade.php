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
    <div class="row m-5">
        <div class="col">
            <h4 class="text-info"> Como funciona um Slot?</h4>

            <x-other-card>
                <h1 class="text-danger">Este é o Slot!</h1>
            </x-other-card>
        </div>
    </div>

@endsection
