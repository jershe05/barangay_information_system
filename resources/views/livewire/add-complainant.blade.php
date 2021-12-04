<div>
    <div class="p-3">
        @if($message)
        <div class="alert alert-success" role="alert">
           {{ $message }}
        </div>
        @endif
    <livewire:add-complainant-table blotterId="{{ $blotterId }}" />
    </div>
</div>
