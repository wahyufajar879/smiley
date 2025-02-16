<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('assets/admin/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            <img src="{{ asset('assets/admin/vendors/images/deskapp-logo-white.svg') }}" alt=""
                class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.html">Dashboard</a></li>
                    </ul>
                    {{--
                    <ul class="submenu">
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    </ul>
                    --}}
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-sailboat"></span><span class="mtext">Snorkling</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('snorklings.index')}}">Snorkling</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-ticket-1"></span><span class="mtext">Ticket</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('tickets.index')}}">Ticket</a></li>
                        {{-- <li><a href="advanced-components.html">CRUD Ticket</a></li> --}}
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-school-bus"></span><span class="mtext">Trip Island</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('trips.index')}}">Data Trip Island</a></li>
                        {{-- <li><a href="advanced-components.html">CRUD Trip Island</a></li> --}}
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-motorcycle"></span><span class="mtext">Rent Motorbike</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('rents.index')}}">Data Rent Motorbike</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-folder"></span><span class="mtext">Data</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('data_snorklings.index') }}">Snorkling</a></li>
                        <li><a href="{{ route('data_tickets.index') }}">Ticket</a></li>
                        <li><a href="{{ route('data_trips.index') }}">Trip Island</a></li>
                        <li><a href="{{ route('data_rent_motorbikes.index') }}">Rent Motorbike</a></li>
                        <li><a href="{{ route('data_blogs.index') }}">Blog</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user-2"></span><span class="mtext">Users</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Basic Tables</a></li>
                        <li><a href="datatable.html">DataTables</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>