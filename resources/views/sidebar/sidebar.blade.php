<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{set_active(['setting/page'])}}" hidden>
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin Dashboard</a></li>
                    </ul>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>User Management</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif
                <li class="submenu {{set_active(['articles/list','articles/addBlog'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('articles/list') }}"  class="{{set_active(['articles/list'])}}">Blogs List</a></li>
                        <li><a href="{{ route('articles/addBlog') }}" class="{{set_active(['articles/addBlog'])}}">Create Blog</a></li>
                        <li><a href="{{ route('articles.tags') }}" class="{{set_active(['articles.tags'])}}">Category</a></li>
                    </ul>
                </li>
                <li class="submenu {{set_active(['subscribers/list'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Subscribers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('subscribers/list') }}"  class="{{set_active(['subscribers/list'])}}">Subscribers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>