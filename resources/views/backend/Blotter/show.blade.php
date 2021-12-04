@extends('backend.layouts.app')

@section('title', __('Create Blotter'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Blotter #'. $blotter->id)
        </x-slot>
        <x-slot name="headerActions">

            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action"
            :href="route('admin.blotter.add')"
            :text="__('Add Blotter')"
        />

        </x-slot>

        <x-slot name="body">
            <ul class="list-group">

                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Complainants
                  <div>
                      @foreach($complainants as $complainant)
                      <span class="badge badge-primary badge-pill p-2">
                            {{ ucfirst($complainant->first_name) .' '. ucfirst(Str::substr($complainant->middle_name,0, 1))  .'. '. ucfirst($complainant->last_name) }}
                        </span>
                    @endforeach
                    <br  />
                </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Report
                 <span class="w-50">
                     {{ $blotter->report }}
                 </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Date of Incident
                   <span>
                       {{ $blotter->date }}
                   </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Date Reported
                   <span>
                       {{ $blotter->created_at }}
                   </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Suspects
                    <div>
                        @foreach($suspects as $suspect)
                        <span class="badge badge-primary badge-pill p-2">
                              {{ ucfirst($suspect->first_name) .' '. ucfirst(Str::substr($suspect->middle_name,0, 1))  .'. '. ucfirst($suspect->last_name) }}
                          </span>
                      @endforeach
                      <br  />
                  </div>
                  </li>

              </ul>

              <ul class="list-group">
                @foreach ($hearings as $hearing)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Hearing Date : {{ $hearing->date .' Time: '. $hearing->time }}
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Report
                   <span class="w-50">
                       {{ $hearing->description }}
                   </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    official
                   <span class="w-50">
                       @if($official->where('id', $hearing->official)->first())
                            {{ ucfirst($official->where('id', $hearing->official)->first()->position) . ' '.
                                ucfirst($official->where('id', $hearing->official)->first()->first_name) .' '.
                                ucfirst(Str::substr($official->where('id', $hearing->official)->first()->middle_name,0, 1))  .'. '.
                                ucfirst($official->where('id', $hearing->official)->first()->last_name)
                            }}
                        @else
                            None
                        @endif

                   </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Result
                   <span class="w-50">
                       @if($hearing->result === 1)
                            Resolved
                        @elseif($hearing->result === 2)
                            Unresolved
                       @else
                            Pending
                       @endif
                   </span>
                  </li>
                @endforeach

              </ul>
        </x-slot>

    </x-backend.card>
@endsection
