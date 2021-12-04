@extends('backend.layouts.app')

@section('title', __('Create Blotter'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Blotter')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action"
            :href="route('admin.blotter.add')"
            :text="__('Add Blotter')"
        />

        </x-slot>

        <x-slot name="body">
            <livewire:blotter-table />
        </x-slot>
    </x-backend.card>
@endsection
