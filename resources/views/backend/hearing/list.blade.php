@extends('backend.layouts.app')

@section('title', __('Hearings Schedules'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Hearings Schedules')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action"
            :href="route('admin.hearing.add')"
            :text="__('Add Hearings')"
        />

        </x-slot>

        <x-slot name="body">
            <livewire:hearing-table />
        </x-slot>
    </x-backend.card>
@endsection
