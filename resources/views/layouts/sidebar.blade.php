<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/admin/dashboard') }}" class="app-brand-link">
            <img src="{{ asset('public') }}/assets/img/branding/headerlogo.png" style="height: auto; width: 120px;" class="app-brand-logo ms-3">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ Request::is('/admin/dashboard') ? 'active' : '' }}">
            <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="menu-icon icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M13.45 11.55l2.05 -2.05" />
                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                </svg>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('/admin/calendar') ? 'active' : '' }}">
            <a href="{{ url('/admin/calendar') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
            </a>
        </li>
                <li class="menu-item {{ Request::is('admin/appointments') ? 'active' : '' }}">
            <a href="{{ url('admin/appointments') }}" class="menu-link">
                <i class="menu-icon ti ti-send ti-xs"></i>
                <div data-i18n="Appointments">Appointments</div>
            </a>
        </li>
 @if (Auth::check() && Auth::user()->role === 'admin')

        <li class="menu-item {{ Request::is('admin/services') || Request::is('admin/services/edit/*') || Request::is('admin/service/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Services">Services</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/service/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/service/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/services') ? 'active' : '' }}">
                    <a href="{{ url('admin/services') }}" class="menu-link">
                        <div data-i18n="Services List">Services List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item {{ Request::is('admin/customers') || Request::is('admin/customer/edit/*') || Request::is('admin/customer/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Customers">Customers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/customer/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/customer/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/customers') ? 'active' : '' }}">
                    <a href="{{ url('admin/customers') }}" class="menu-link">
                        <div data-i18n="Customer List">Customer List</div>
                    </a>
                </li>

            </ul>
        </li>


        <li class="menu-item {{ Request::is('admin/service/') ||  Request::is('admin/service/edit/*') || Request::is('admin/facility/create') || Request::is('admin/service/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div data-i18n="Staff">Staff</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/teams/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/teams/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/teams') ? 'active' : '' }}">
                    <a href="{{ url('admin/teams') }}" class="menu-link">
                        <div data-i18n="Staff List">Staff List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ Request::is('admin/testimonials') || Request::is('admin/testimonials/edit/*') || Request::is('admin/testimonials/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Testimonials">Testimonials</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/testimonials/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/testimonials/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/testimonials') ? 'active' : '' }}">
                    <a href="{{ url('admin/testimonials') }}" class="menu-link">
                        <div data-i18n="Testimonials List">Testimonials List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item {{ Request::is('blog') || Request::is('blog/edit/*') || Request::is('blog/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-brand-slack"></i>
                <div data-i18n="Blog">Blog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('blog/create') ? 'active' : '' }}">
                    <a href="{{ url('blog/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('blog') ? 'active' : '' }}">
                    <a href="{{ url('blog') }}" class="menu-link">
                        <div data-i18n="Blog List">Blog List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li
        class="menu-item  Request::is('admin/location/create') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-checkbox"></i>
            <div data-i18n="Locations">Locations</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/location/create') ? 'active' : '' }}">
                <a href="{{ url('admin/location/create') }}" class="menu-link">
                    <div data-i18n="Create">Create</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/locations') ? 'active' : '' }}">
                <a href="{{ url('admin/locations') }}" class="menu-link">
                    <div data-i18n="Locations List">Locations List</div>
                </a>
            </li>

        </ul>
    </li>
        <li
            class="menu-item {{ Request::is('admin/contact/list') || Request::is('admin/contacts') || Request::is('admin/facility/create') || Request::is('admin/difference/create') || Request::is('admin/about') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div data-i18n="pages">Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/about') ? 'active' : '' }}">
                    <a href="{{ url('admin/about') }}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/contact/list') ? 'active' : '' }}">
                    <a href="{{ url('admin/contact/list') }}" class="menu-link">
                        <div data-i18n="Contact Messages">Contact Messages</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/facility/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/facility/create') }}" class="menu-link">
                        <div data-i18n="Facilits">Facilits</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/difference/create') ? 'active' : '' }}">
                    <a href="{{ url('admin/difference/create') }}" class="menu-link">
                        <div data-i18n="Difference">Difference</div>
                    </a>
                </li>

            </ul>
        </li>
        <li
            class="menu-item {{ Request::is('admin/setting') || Request::is('admin/contacts') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Setting">Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/permissions') ? 'active' : '' }}">
                    <a href="{{ url('admin/permissions') }}" class="menu-link">
                        <div data-i18n="Role & Permissions">Role & Permissions</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/setting') ? 'active' : '' }}">
                    <a href="{{ url('admin/setting') }}" class="menu-link">
                        <div data-i18n="Site Setting">Site Settings</div>
                    </a>
                </li>
            </ul>
        </li>
             @endif
    </ul>
</aside>
