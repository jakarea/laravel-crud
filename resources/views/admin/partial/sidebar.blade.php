 <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{!! url('dashboard')!!}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{!! url('users')!!}">All Users</a></li>
                        <li><a href="{!! url('user/create')!!}"> Add New</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->