@extends('backend.layouts.app')

@section('title', __('Hearings Schedules'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Citizen Record ')
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
                                        :text="__('Personal Info')"
                                        class="nav-link bg-white active"
                                        id="citizen-details-tab"
                                        data-toggle="pill"
                                        href="#citizen-details"
                                        role="tab"
                                        aria-controls="active"
                                        aria-selected="true" />
                                    <x-utils.link
                                        class="nav-link bg-white"
                                        id="citizen-complaints-tab"
                                        data-toggle="pill"
                                        href="#citizen-complaints"
                                        role="tab"
                                        aria-controls="active"
                                        aria-selected="true" >
                                        @lang("Complaints")
                                    </x-utils.link>
                                    <x-utils.link
                                        class="nav-link bg-white"
                                        id="citizen-blotter-tab"
                                        data-toggle="pill"
                                        href="#citizen-blotter"
                                        role="tab"
                                        aria-controls="active"
                                        aria-selected="true" >
                                        @lang("Blotters")
                                    </x-utils.link>
                                    <x-utils.link
                                    class="nav-link bg-white"
                                    id="citizen-certificate-tab"
                                    data-toggle="pill"
                                    href="#citizen-certificate"
                                    role="tab"
                                    aria-controls="active"
                                    aria-selected="true" >
                                    @lang("Issued Certificates")
                                    </x-utils.link>
                                </div>
                            </nav>

                            <div class="tab-content" id="tabsContent">
                                <div class="tab-pane fade show active" id="citizen-details" role="tabpanel" aria-labelledby="citizen-details-tab">
                                    <x-backend.card>
                                                <x-slot name="body">
                                                    <table class="table w-50">
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">Name</th>
                                                            <td >{{ $person->first_name .' '. $person->middle_name . ' ' . $person->last_name }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Address</th>
                                                            <td>{{ $person->address }}</td>
                                                          </tr>
                                                          <tr>
                                                            <tr>
                                                                <th scope="row">Date of Birth</th>
                                                                <td> {{ $person->birthdate }}</td>
                                                              </tr>
                                                            <th scope="row">Gender</th>
                                                            <td > {{ $person->gender }}</td>
                                                            <tr>
                                                                <th scope="row">Phone</th>
                                                                <td >{{ $person->phone}}</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Email</th>
                                                                <td > {{ $person->email }}</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Work</th>
                                                                <td >{{ $person->work }} </td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Alias</th>
                                                                <td > {{ $person->alias }}</td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </x-slot>
                                    </x-backend.card>
                                </div>
                                <div class="tab-pane fade show" id="citizen-complaints" role="tabpanel" aria-labelledby="citizen-complaints-tab">
                                    <x-backend.card>
                                        <x-slot name="body">
                                            <livewire:blotter-table complaint="{{ $person->id }}"/>
                                        </x-slot>
                                    </x-backend.card>
                                </div>
                                <div class="tab-pane fade show" id="citizen-blotter" role="tabpanel" aria-labelledby="citizen-blotter-tab">
                                    <x-backend.card>
                                        <x-slot name="body">
                                            <livewire:blotter-table blotter="{{ $person->id }}" />
                                        </x-slot>
                                    </x-backend.card>
                                </div>
                                <div class="tab-pane fade show" id="citizen-certificate" role="tabpanel" aria-labelledby="citizen-certificate-tab">
                                    <x-backend.card>
                                        <x-slot name="body">

                                        </x-slot>
                                    </x-backend.card>
                                </div>
                            </div>
        </x-slot>
    </x-backend.card>
@endsection
