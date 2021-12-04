@extends('backend.layouts.app')

@section('title', __('Create Official'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Officials')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.official.add')"
                :text="__('Add Official')"
            />
        </x-slot>
        <x-slot name="body">

            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Officials</h3>
                                </div>
                                <div class="card-body ">

                                    <livewire:official-list />

                                </div>
                            </div>

                    </div><!--col-md-8-->
                </div><!--row-->
            </div><!--container-->

        </x-slot>

    </x-backend.card>
    <livewire:add-person />
@endsection
