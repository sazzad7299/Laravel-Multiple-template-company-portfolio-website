<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-user-setting">
                    <a
                        class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <div class="user-setting d-flex align-items-center">
                            <img
                                src="{{
                                    asset(
                                        'backend/assets/images/avatars/avatar-1.png'
                                    )
                                }}"
                                class="user-img"
                                alt=""
                            />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img
                                        src="{{
                                            asset(
                                                'backend/assets/images/avatars/avatar-1.png'
                                            )
                                        }}"
                                        alt=""
                                        class="rounded-circle"
                                        width="54"
                                        height="54"
                                    />
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">
                                            Jhon Deo
                                        </h6>
                                        <small
                                            class="mb-0 dropdown-user-designation text-secondary"
                                            >HR Manager</small
                                        >
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="pages-user-profile.html"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                      
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript::" class="text-body ms-0"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>{{ __('Log Out') }}</div>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--end top header-->
