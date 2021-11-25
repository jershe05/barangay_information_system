@extends('backend.layouts.app')

@section('title', __('Create Blotter'))

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
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Add Blotter Details</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.blotter.store') }}" method="POST">
                                        @csrf
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                            </div>
                                            <input type="date"  name="date" class="form-control  form-control-lg" placeholder="Date of Incident">
                                        </div>
                                         <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-address-card"></i></i></span>
                                            </div>
                                            <input type="text"  name="insident_address" class="form-control  form-control-lg" placeholder="Address" required>
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                            </div>
                                            <textarea class="form-control" name="report" rows="8"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Next" class="btn float-right login_btn btn-secondary">
                                        </div>
                                    </form>
                                </div>
                            </div>

                    </div><!--col-md-8-->
                </div><!--row-->
            </div><!--container-->

        </x-slot>
    </x-backend.card>
@endsection
