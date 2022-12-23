<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}" class="has-arrow">Dashboard</a>
        </li>
        <li>
            <a href="{{route('events.index')}}" >Event</a>
        </li>
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application</div>
            </a>
            <ul>
                <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
                </li>
                <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
                </li>
                <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
                </li>
                <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
                </li>
                <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                </li>
                <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                </li>
            </ul>
        </li> --}}

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-cog bx-spin"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                @can('role-list')
                    <li><a href="{{route('roles.index')}}"><i class="bx bx-right-arrow-alt"></i>Roles</a></li>
                @endcan
                @can('permission-list')
                    <li><a href="{{route('permissions.index')}}"><i class="bx bx-right-arrow-alt"></i>Permissions</a></li>
                @endcan
                @can('admin-list')
                    <li><a href="{{route('admins.index')}}"><i class="bx bx-right-arrow-alt"></i>Admins</a>
                    </li>
                @endcan
                @can('agent-list')
                    <li><a href="{{route('agents.index')}}"><i class="bx bx-right-arrow-alt"></i>Agents</a>
                    </li>
                @endcan

            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
