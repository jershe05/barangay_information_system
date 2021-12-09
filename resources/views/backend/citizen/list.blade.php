@extends('backend.layouts.app')

@section('title', __('Citizens'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Citizen List')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action"
            :href="route('admin.citizen.add')"
            :text="__('Add Citizen')"
        />

        </x-slot>

        <x-slot name="body">
            <livewire:citizen-table />
        </x-slot>
    </x-backend.card>
@endsection
