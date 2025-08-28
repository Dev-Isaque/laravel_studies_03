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
    <div class="text-center mt-5">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div>

@endsection
