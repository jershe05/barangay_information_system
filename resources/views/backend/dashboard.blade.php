@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome :Name', ['name' => $logged_in_user->name])
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="card col-sm m-3">
                    <div class="card-header">
                       Blotters
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">Active : {{ $blotters->where('status', 1)->count() }}</h1>
                        <h3 class="text-success">Resolved : {{ $blotters->where('status', 3)->count() }}</h3>
                        <h3 class="text-danger">Unresolved : {{ $blotters->where('status', 2)->count() }}</h3>
                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Hearings
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">Active : {{ $hearings->where('result', 1)->count() }}</h1>
                        <h3 class="text-success">Resolved : {{ $hearings->where('result', 3)->count() }}</h3>
                        <h3 class="text-danger">Unresolved : {{ $hearings->where('result', 2)->count() }}</h3>
                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Citizens
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">Total : {{ $citizens->count() }}</h1>

                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Indigents
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">Total : {{ $indigents->count() }}</h1>
                    </div>
                </div>
            </div>
            {{-- <livewire:users-table /> --}}
        </x-slot>
    </x-backend.card>
@endsection
