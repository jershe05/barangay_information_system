@extends('backend.layouts.app')

@section('title', __('Sensus'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Citizen List')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action"
            :href="route('admin.indigent.list')"
            :text="__('List')"
        />

        </x-slot>

        <x-slot name="body">
            <livewire:add-indigent-table />
        </x-slot>
    </x-backend.card>
@endsection
