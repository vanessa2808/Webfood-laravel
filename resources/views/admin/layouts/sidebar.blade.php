<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="adminMain/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SteakFood</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminMain/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                {{--                Users                   --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            users
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/users/add_users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/users/list_users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list users</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- blogs     --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            blog
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/blog/add_blog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add_blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/blog/list_blog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list_blog</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- Food--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            food
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/food/add_food" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add food</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/food/list_food" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list food</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{--                header--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            header
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/header/add_header" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add_header</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/header/list_header" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list_header</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            product categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/product_categories/add_categories" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add_type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/product_categories/list_categories" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list_type</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{--                main visual 2--}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            main
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/main/add_main" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add_main</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/main/list_main" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list_main</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{--side_bar--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            side_bar
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/sidebar/add_sidebar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add_sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/sidebar/list_sidebar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list_sidebar</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{--                about--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            about
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/about/add_about" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add about</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/about/list_about" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list about</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Comments
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/comments/list_comments" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List comment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/comments/total_rate" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Total rate</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin/orders/list_orders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/orders/list_order_details" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list orders detail</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('logout') }}" class="nav-link "
                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}


                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
                </li>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->

