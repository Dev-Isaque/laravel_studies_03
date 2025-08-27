@extends('layouts.main_layout')

@section('page_title', 'Home Page')

@section('content')

    <div class="my-3">
        <h1 class="text-center">Este texto faz parte da view</h1>

        {{-- Renderizar o component --}}

        <x-my-component />

        {{-- Renderizar o component que existe dentro de subpasta --}}

        <x-admin.admin-card />

    </div>

@endsection
