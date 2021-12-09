
<x-utils.view-button :href="route('admin.citizen.show',['person' => $person])" />
<x-utils.edit-button :href="route('admin.hearing.delete',['hearing' => $person])" />
<x-utils.delete-button :href="route('admin.hearing.delete',['hearing' => $person])" />

