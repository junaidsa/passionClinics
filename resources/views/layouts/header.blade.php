
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <i class="ti ti-md"></i>
                    </a>
                </li>
                <!--/ Style Switcher -->

                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ asset('public') }}/assets/img/icons/brands/html-label.png" alt class="h-auto rounded-circle" />
                            </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{ asset('public') }}/img/icons/brands/html-label.png" alt
                                                    class="h-auto rounded-circle" />
                                            </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('profile/update-about/' . Auth::id()) }}">
                                <i class="ti ti-settings me-2 ti-sm"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);"
                                onclick="document.getElementById('logoutForm').submit();">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                            <form id="logoutForm" method="POST" action="{{ url('/logout') }}">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>

        @if (Auth::check() && Route::currentRouteName() === 'library.index')
            <form action="{{ route('library.index') }}" class="d-flex flex-column flex-md-row align-items-center"
                id="searchForm" method="GET">
                <div class="input-group w-100 w-md-75 mb-3 mb-md-0 ms-5" style="position: relative;">
                    <input class="form-control me-2" type="search" style="margin-left: -40%;" name="search"
                        value="{{ request('search') }}" aria-label="Search"
                        id="searchInput" placeholder="Type This.."/>
                    <!-- Clear Icon inside the input field -->
                    <button type="button" class="btn btn-outline-primary" id="clearSearch"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: transparent;">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                </div>
                <!-- Search Submit Button -->
                <button class="btn btn-primary w-md-auto" type="submit">Search</button>
            </form>
        @endif
    </nav>

<script>
    document.getElementById('clearSearch').addEventListener('click', function() {
        document.getElementById('searchInput').value = '';
        document.getElementById('searchForm').submit();
    });

    document.querySelector('.search-toggler').addEventListener('click', function () {
    const searchForm = document.getElementById('searchForm');
    searchForm.classList.toggle('d-none');
});
</script>
