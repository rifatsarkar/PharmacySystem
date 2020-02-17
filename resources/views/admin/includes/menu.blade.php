<div class=" sidebar" style="background-color: #122b40" role="navigation">
    <div class="sidebar-nav  navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw" style="background-color: #122b40"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-category') }}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{ route('manage-category') }}">Manage Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- brand category -->

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Medicine Company <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-brand') }}">Add Company </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-brand') }}">Manage  </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <!-- brand category -->

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw" style="background-color: #122b40"></i> Medicine Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-product') }}">Add Medicine </a>
                    </li>
                    <li>
                        <a href="{{ route('manage-product') }}">Manage Medicine </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw" ></i> POS <span class="fa arrow" style="background-color: #122b40"></span></a>
                <ul class="nav nav-second-level" style="background-color: #122b40">
                    <li>
                        <a href="">Account Management </a>
                    </li>

                    <li>
                        <a href="">Employee Management </a>
                    </li>

                    <li>
                        <a href="">Customer Management </a>
                    </li>
                    <li>
                        <a href="">Branch Management </a>
                    </li>
                    <li>
                        <a href="">Daily Reports </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <!-- Product -->





            <li>
                <a href="{{ route('manage-order') }}"><i class="fa fa-table fa-fw"style="background-color: #122b40"></i> Manage Customer Order  </a>
            </li>





        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
