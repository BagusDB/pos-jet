@extends('layouts.layout')
@section('content')
<x-app-layout>
<x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard {{ auth()->user()->currentTeam->name }}
        </h2> --}}
    </x-slot>

    {{-- <div > --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div class="bg-white ">
                {{-- <x-jet-welcome /> --}}
                 @livewire('product.index')
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
