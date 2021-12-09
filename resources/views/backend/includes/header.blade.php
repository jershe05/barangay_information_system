
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Barangay Information System</a>
    <button class="navbar-toggler" type="button" data-coreui-toggle="collapse" data-coreui-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Officials
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('admin.official.add') }}">Add</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.official.index') }}">List</a></li>
            </ul>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Blotter
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="{{ route('admin.blotter.add') }}">Add</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.blotter.list') }}">List</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Hearings
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="{{ route('admin.hearing.add') }}">Add</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.hearing.schedules') }}">Schedules</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Citizens
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="#">Add</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.citizen.list') }}">List</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
             Indigents
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="{{ route('admin.indigent.add') }}">Add</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.indigent.list') }}">List</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
             Accounts
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="{{ route('admin.auth.user.index') }}">Users</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.indigent.list') }}">List</a></li>
          </ul>
        </li>
      </ul>
      <div class="float-right">
          <a href="{{ route('frontend.auth.logout') }}" class="btn btn-primary float-right ml-5">Log-out</a>
      </div>

    </div>
  </div>
</nav>

{{-- <header class="c-header c-header-light c-header-fixed navbar navbar-dark bg-dark ">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <a class="c-header-brand d-lg-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <ul class="c-header-nav d-md-down-none" data-coreui-toggle="dropdown">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Home')</a></li>
    </ul>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
    </li>
    </ul>
    <ul class="c-header-nav dropdown">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Hearings')</a></li>
    </ul>


    <ul class="c-header-nav d-md-down-none ">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Sensus')</a></li>
    </ul>

    <ul class="c-header-nav d-md-down-none ">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Indigents')</a></li>
    </ul>

    <ul class="c-header-nav d-md-down-none ">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Citizens')</a></li>
    </ul>

    <ul class="c-header-nav d-md-down-none ">
        <li class="c-header-nav-item px-3 text-white"><a class="c-header-nav-link text-white" href="{{ route('frontend.index') }}">@lang('Blotter')</a></li>
    </ul>

    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <x-utils.link class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <x-slot name="text">
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="{{ $logged_in_user->avatar }}" alt="{{ $logged_in_user->email ?? '' }}">
                    </div>
                </x-slot>
            </x-utils.link>

            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2">
                    <strong>@lang('Account')</strong>
                </div>

                <x-utils.link
                    class="dropdown-item"
                    icon="c-icon mr-2 cil-account-logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <x-slot name="text">
                        @lang('Logout')
                        <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                    </x-slot>
                </x-utils.link>
            </div>
        </li>
    </ul>

</header> --}}
