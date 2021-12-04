<div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Blotter Details</h3>
                        </div>
                        <div class="card-body">

                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                    </div>
                                    <input type="date" wire:model="date" name="date" class="form-control  form-control-lg" placeholder="Date of Incident" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Time</span>
                                    </div>
                                    <input type="time" wire:model="time" name="insident_address" class="form-control  form-control-lg" placeholder="Incident Address" required>
                                </div>
                                 <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></i></span>
                                    </div>
                                    <input type="text" wire:model="address" name="insident_address" class="form-control  form-control-lg" placeholder="Incident Address" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                    </div>
                                    <textarea wire:model="description" class="form-control" name="report" rows="8" required></textarea>

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Hearing</span>
                                    </div>

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                    </div>
                                    <input type="date" wire:model="hearingDate" name="date" class="form-control  form-control-lg" placeholder="Hearing Date">
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Hearing Time</span>
                                    </div>
                                    <input type="time" wire:model="hearingTime" name="insident_address" class="form-control  form-control-lg" placeholder="Incident Address">
                                </div>
                                <div class="form-group">
                                    <input type="submit" wire:click="addBlotter" value="Save" class="btn float-right login_btn btn-secondary">
                                </div>

                        </div>
                    </div>

            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
</div>
