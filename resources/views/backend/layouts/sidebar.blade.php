<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Snacked</h4>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Ads</div>
            </a>
            <ul>
                <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add Ad</a>
                </li>
                <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Ad List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Testimonials</div>
            </a>
            <ul>
                <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add Testimonial</a>
                </li>
                <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Testimonial List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
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
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-gear-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>
                            <ul>
                                <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
