<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset(app('settings')['site_fav_icon'] ?? 'frontend/img/favicon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ app('settings')['site_title'] ?? 'My Website' }}</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.home') }}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class=" bx bx-shape-polygon"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.create') }}"><i class="bi bi-circle"></i>Add Category</a>
                </li>
                <li> <a href="{{ route('admin.category.index') }}"><i class="bi bi-circle"></i>Category List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-medal"></i>
                </div>
                <div class="menu-title">Project</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.project.create') }}"><i class="bi bi-circle"></i>Add Project</a>
                </li>
                <li> <a href="{{ route('admin.project.index') }}"><i class="bi bi-circle"></i>Project List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-donate-heart"></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.service.create') }}"><i class="bi bi-circle"></i>Add Service</a>
                </li>
                <li> <a href="{{ route('admin.service.index') }}"><i class="bi bi-circle"></i>Service List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-wind"></i>
                </div>
                <div class="menu-title">Portfolios</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.portfolio.create') }}"><i class="bi bi-circle"></i>Add Portfolio</a>
                </li>
                <li> <a href="{{ route('admin.portfolio.index') }}"><i class="bi bi-circle"></i>Portfolio List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-heart-circle"></i>
                </div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.blog.create') }}"><i class="bi bi-circle"></i>Add Blog</a>
                </li>
                <li> <a href="{{ route('admin.blog.index') }}"><i class="bi bi-circle"></i>Blog List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Teams</div>
            </a>
            <ul>
                <li> <a href="{{ Request::url() != route('admin.team.create') ? route('admin.team.create') : '#' }}"><i class="bi bi-circle"></i>Add Team</a>
                </li>
                <li> <a href="{{ Request::url() != route('admin.team.index') ? route('admin.team.index') : '#' }}"><i class="bi bi-circle"></i>Team List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-star"></i>
                </div>
                <div class="menu-title">Testimonials</div>
            </a>
            <ul>
                <li> <a href="{{ Request::url() != route('admin.testiominal.create') ? route('admin.testiominal.create') : '#' }}"><i class="bi bi-circle"></i>Add Testimonial</a>
                </li>
                <li> <a href="{{ Request::url() != route('admin.testiominal.index') ? route('admin.testiominal.index') : '#' }}"><i class="bi bi-circle"></i>Testimonial List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-movie"></i>
                </div>
                <div class="menu-title">Sliders</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.slider.create') }}"><i class="bi bi-circle"></i>Add Slider</a>
                </li>
                <li> <a href="{{ route('admin.slider.index') }}"><i class="bi bi-circle"></i>Slider List</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.settings.index') }}">
                <div class="parent-icon"><i class="bi bi-gear-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
