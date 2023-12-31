<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ route('admin_dashboard') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('slider.index') }}" aria-expanded="false"><i class="fa-solid fa-sliders"></i><span class="hide-menu">{{ __('Silder') }}</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('leaders.index') }}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Leader</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('staff.index') }}" aria-expanded="false"><i class="fa-solid fa-user"></i><span class="hide-menu">Staff</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('newscategory.index') }}" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">News Category</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('news.index') }}" aria-expanded="false"><i class="fa-regular fa-newspaper"></i><span class="hide-menu">News</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('gallery.index') }}" aria-expanded="false"><i class="fa-regular fa-image"></i><span class="hide-menu">Gallery</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('reports.index') }}" aria-expanded="false"><i class="fa-regular fa-file"></i><span class="hide-menu">Report</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('chiefmsg.index') }}" aria-expanded="false"><i class="fa-solid fa-message"></i><span class="hide-menu">Chief Message</span></a>
                </li>
            </ul>
            <div class="text-center m-t-30">
                {{-- <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn-info hidden-md-down"> Logout</a> --}}
                <a class="dropdown-item bg-info text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>