@extends('backend.layouts.app')

@section('title', __('Add Citizen'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Add Citizen')
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon fas fa-undo"
            class="card-header-action"
            :href="route('admin.citizen.list')"
            :text="__('Back')"
        />

        </x-slot>

        <x-slot name="body">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.citizen.store') }}" method="POST" >
                                        @csrf
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="first_name" class="form-control  form-control-lg" placeholder="First Name" required>
                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="middle_name" class="form-control  form-control-lg" placeholder="Middle Name">

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text"  name="last_name" class="form-control  form-control-lg" placeholder="Last Name" required>

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                            </div>
                                            <select id="inputState"  class="form-control" name="gender" required>
                                                <option selected>Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                              </select>

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                            </div>
                                            <input type="date"  name="birthdate" class="form-control  form-control-lg" placeholder="Birthdate">

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="cil-address-book"></i></span>
                                            </div>
                                            <input type="text"   name="address" class="form-control  form-control-lg" placeholder="Address" required>

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="cil-phone"></i></span>
                                            </div>
                                            <input type="phone"  name="phone" class="form-control  form-control-lg" placeholder="Phone Number" required>

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                                            </div>
                                            <input type="email"  name="email" class="form-control  form-control-lg" placeholder="E-mail">

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text"   class="form-control  form-control-lg" placeholder="work">

                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                            </div>
                                            <input type="text"  name="alias" class="form-control  form-control-lg" placeholder="Alias">

                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="type">

                                            <label class="form-check-label" for="defaultCheck2">
                                              Citizen
                                            </label>
                                          </div>

                                          <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                            </div>
                                            <textarea class="form-control"  name="description" rows="8"></textarea>

                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Add" class="btn float-right login_btn btn-dark">
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
