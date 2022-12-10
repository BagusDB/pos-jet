@extends('layouts.layout')
@section('content')
<x-app-layout>
    <x-slot name="header">


               <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
                    @livewire('kasir.index')
                </div>
            </div>

    </x-slot>
    </x-app-layout>
@endsection
