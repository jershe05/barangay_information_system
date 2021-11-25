@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Blotter')
        </x-slot>

        <x-slot name="body">

            @if($complainants)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Complainants</h3>
                    </div>
                    <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($complainants as $complainant)
                        <tr>
                            <td>{{ $complainant->first_name }}</td>
                            <td>{{ $complainant->middle_name }}</td>
                            <td>{{ $complainant->last_name }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
            @endif
            @include('backend.Person.Includes.create')
            <div class="card-footer">
                <div class="form-group">
                    <a class="btn float-right login_btn btn-secondary" href="{{ route('admin.blotter.add') }}" role="button">Next</a>
                </div>
            </div>
            {{-- <livewire:users-table /> --}}
        </x-slot>
    </x-backend.card>
@endsection
