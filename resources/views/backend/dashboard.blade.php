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
                       Total Blotters
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">100</h1>
                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Total Hearings
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">100</h1>
                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Total Citizens
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">100</h1>
                    </div>
                </div>
                <div class="card col-sm m-3">
                    <div class="card-header">
                        Total Indigent Families
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-primary">100</h1>
                    </div>
                </div>
            </div>
            {{-- <livewire:users-table /> --}}
        </x-slot>
    </x-backend.card>
@endsection
