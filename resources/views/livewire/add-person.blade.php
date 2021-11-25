<div>
    <div wire:ignore.self class="modal fade" id="addPerson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Person</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        @if($success)
                                        <div class="alert alert-success" role="alert">
                                           Successfully Added!
                                        </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                            @error('firstName') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" wire:model="firstName" name="first_name" class="form-control  form-control-lg" placeholder="First Name" required>
                                            </div>
                                            @error('middleName') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" wire:model="middleName" name="middle_name" class="form-control  form-control-lg" placeholder="Middle Name">

                                            </div>
                                            @error('lastName') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" wire:model="lastName" name="last_name" class="form-control  form-control-lg" placeholder="Last Name" required>

                                            </div>
                                            @error('gender') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                                </div>
                                                <select id="inputState" wire:model="gender" class="form-control" name="gender" required>
                                                    <option selected>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                  </select>

                                            </div>
                                            @error('birthdate') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                                </div>
                                                <input type="date" wire:model="birthdate" name="birthdate" class="form-control  form-control-lg" placeholder="Birthdate">

                                            </div>
                                            @error('address') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="cil-address-book"></i></span>
                                                </div>
                                                <input type="text" wire:model="address"  name="address" class="form-control  form-control-lg" placeholder="Address" required>

                                            </div>
                                            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="cil-phone"></i></span>
                                                </div>
                                                <input type="phone" wire:model="phone" name="phone" class="form-control  form-control-lg" placeholder="Phone Number" required>

                                            </div>
                                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                                                </div>
                                                <input type="email" wire:model="email"  name="email" class="form-control  form-control-lg" placeholder="E-mail">

                                            </div>
                                             @error('work') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                </div>
                                                <input type="text" wire:model="work"   class="form-control  form-control-lg" placeholder="work">

                                            </div>
                                             @error('alias') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                                </div>
                                                <input type="text" wire:model="alias" class="form-control  form-control-lg" placeholder="Alias">

                                            </div>
                                            @error('isCitizen') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="form-check">
                                                <input class="form-check-input" wire:model="isCitizen" type="checkbox" value="1" id="defaultCheck2" name="type">

                                                <label class="form-check-label" for="defaultCheck2">
                                                  Citizen
                                                </label>
                                              </div>

                                              <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                                </div>
                                                <textarea class="form-control" wire:model="description" name="description" rows="8"></textarea>

                                            </div>
                                            @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                                            <div class="form-group">
                                                <input type="submit" wire:click="add" value="Add" class="btn float-right login_btn btn-dark">
                                            </div>
                                    </div>
                                </div>

                        </div><!--col-md-8-->
                    </div><!--row-->
                </div><!--container-->
            </div>
          </div>
        </div>
      </div>
</div>
