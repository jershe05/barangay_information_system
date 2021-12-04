<div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between mb-1">
                <h3>Complainants</h3>
                <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                data-toggle="modal"
                data-target=".addComplainant"
                data-backdrop="static"
                data-keyboard="false"
                :text="__('Add Complainant')"
            />
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
            @if($complainants)
                @foreach ($complainants as $complainant)
                    <tr>
                        <td>{{ $complainant->first_name }}</td>
                        <td>{{ $complainant->middle_name }}</td>
                        <td>{{ $complainant->last_name }}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>
