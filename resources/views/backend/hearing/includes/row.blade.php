<x-livewire-tables::bs4.table.cell>
    {{ $row->date . ' '. $row->time}}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->insident_address }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <div class="text-truncate" style="width: 200px">
        {{ $row->report }}
      </div>

</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->created_at }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    @include('backend.Blotter.includes.actions', ['model' => $row])
</x-livewire-tables::bs4.table.cell>
