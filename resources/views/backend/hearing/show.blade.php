@extends('backend.layouts.app')

@section('title', __('Hearings Schedules'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Hearing ') {{ date('F j, Y', strtotime($hearing->date)) . ' '. date('g:i a', strtotime($hearing->time)) }}
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
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <x-utils.link
                        :text="__('Details')"
                        class="nav-link bg-white active"
                        id="hearing-details"
                        data-toggle="pill"
                        role="tab"
                        aria-controls="active"
                        aria-selected="true" />

                </div>
            </nav>
            <div class="tab-content" id="tabsContent">
                <div class="tab-pane fade show active" id="hearing-details" role="tabpanel" aria-labelledby="active-transaction-tab">
                    <x-backend.card>
                        <x-slot name="body">
                            <livewire:hearing-update hearing="{{ $hearing->id }}" />

                        </x-slot>
                    </x-backend.card>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection
