@extends('backend.layouts.app')

@section('title', __('Add Hearing'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Add Hearing')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon fas fa-undo"
            class="card-header-action"
            :href="route('admin.hearing.schedules')"
            :text="__('Back')"
        />

        </x-slot>

        <x-slot name="body">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Blotter Details</h3>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('admin.hearing.store') }}" method="POST" >
                                        @csrf
                                         <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-address-card pr-2"></i>Official</span>
                                            </div>
                                            <select class="form-control" name="official">
                                                <option selected value="" >Select...</option>
                                                @foreach ($officials as $official)
                                                <option value="{{ $official->id }}">{{ $official->position . ' - ' . $official->person->first_name . ' ' .  $official->person->middle_name . ' ' . $official->person->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-book-open pr-2"></i></i>Blotter</span>
                                            </div>
                                            <select class="form-control" name="case_id">
                                                <option selected value="" >Select...</option>
                                                @foreach ($blotters as $blotter)
                                                <option value="{{ $blotter->id }}">blotter# : {{  $blotter->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                            </div>
                                            <input type="date"  name="date" class="form-control  form-control-lg" placeholder="Hearing Date">
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Hearing Time</span>
                                            </div>
                                            <input type="time"  name="time" class="form-control  form-control-lg" placeholder="time">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit"  value="Save" class="btn float-right login_btn btn-secondary">
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
