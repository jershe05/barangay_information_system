<div>
    <table class="table w-50">
        <tbody>
          <tr>
            <th scope="row">Blotter</th>
            <td class="float-right">{{ $hearing->blotter->report }}</td>
          </tr>
          <tr>
            <th scope="row">Incident Address</th>
            <td class="float-right">{{ $hearing->blotter->insident_address }}</td>
          </tr>
          <tr>
            <th scope="row">Description</th>
            <td class="float-right w-100"> <textarea wire:model="description" class="form-control" name="report" cols="30" rows="8" required></textarea></td>
          </tr>
          <tr>
            <th scope="row">Status</th>
            <td>
            <select class="form-control" wire:model="status" >

                @if($hearing->result === '1')
                    <option value="1">Pending</option>
                    <option value="2">Unresolved</option>
                    <option value="3">Resolved</option>
                @elseif ($hearing->result === '2')
                    <option value="2">Unresolved</option>
                    <option value="1">Pending</option>
                    <option value="4">Resolved</option>
                @else
                    <option value="3">Resolved</option>
                    <option value="2">Unresolved</option>
                    <option value="1">Pending</option>
                @endif

            </select>
            </td>
          </tr>
          <tr>
            <th scope="row">Date</th>
            <td class="float-right w-100"> <input type="date" wire:model="date" name="date" class="form-control  form-control-lg" placeholder="Hearing Date"></td>
          </tr>
          <tr>
            <th scope="row">Time</th>
            <td class="float-right w-100"><input type="time" wire:model="time" class="form-control  form-control-lg" placeholder="Hearing time"> </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td>
                <input type="submit" wire:click="saveHearing" value="Save" class="btn float-right login_btn btn-secondary">
            </td>
          </tr>
        </tbody>
      </table>

</div>
