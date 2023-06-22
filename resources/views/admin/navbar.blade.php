    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div
                    class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
                >
                    <a class="sidebar-brand brand-logo" href="/redirects"
                        ><img src="images/logo/test.png" alt="logo"
                    /></a>
                    <a class="sidebar-brand brand-logo-mini" href="/redirects"
                        ><img src="images/logo/test.png" alt="logo"
                    /></a>
                </div>
                <ul class="nav">
                    
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="{{url('/users')}}">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Users</span>
                        </a>
                    </li>
                    
                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            href="{{url('/foodmenu')}}"
                        >
                            <span class="menu-icon">
                                <i class="mdi mdi-playlist-play"></i>
                            </span>
                            <span class="menu-title">FoodMenu</span>
                        </a>
                    </li>
                </ul>
            </nav>