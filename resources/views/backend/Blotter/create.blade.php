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
            data-toggle="modal"
            data-target=".addPerson"
            data-backdrop="static"
            data-keyboard="false"
            :text="__('Add Person')"
        />

        </x-slot>

        <x-slot name="body">


           <livewire:complainant-list blotterId="{{ $blotter->id }}" />
           <livewire:suspect-list blotterId="{{ $blotter->id }}" />
            <livewire:add-blotter blotter="{{ $blotter->id }}" />
            <div class="modal fade addComplainant" tabindex="-1" role="dialog" aria-labelledby="addComplainant" aria-hidden="true">
                <div class="modal-dialog modal-lg">

                  <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-tag pr-2"></i>Add Parties Involved</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <livewire:add-complainant blotterId="{{ $blotter->id }}"  />
                  </div>
                </div>
              </div>
              <div class="modal fade addPerson" tabindex="-1" role="dialog" aria-labelledby="addPerson" aria-hidden="true">
                <div class="modal-dialog modal-lg">

                  <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"><i class="fas fa-sms pr-2"></i>Messages</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    {{-- <livewire:messaging.show-messages  /> --}}
                  </div>
                </div>
              </div>
        </x-slot>
    </x-backend.card>
@endsection
