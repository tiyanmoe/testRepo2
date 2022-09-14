
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="/admin_side" {{ (request()->is('admin_side')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="home"></i>
                           <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="/admin_side/profile" {{ (request()->routeIs('profile.*')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="user"></i>
                            <span>Profile</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="/admin_side/social" {{ (request()->routeIs('social.*')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="twitter"></i>
                            <span>Social Media</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="/admin_side/edu" {{ (request()->routeIs('edu.*')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="award"></i>
                            <span>Educations</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="/admin_side/exp" {{ (request()->routeIs('exp.*')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="book-open"></i>
                            <span>Experiences</span>
                        </div>
                    </a>
                </li>

            </ul>
            <!-- <div class="shadow-bottom"></div> -->

        </nav>

    </div>
