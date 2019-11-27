<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Navigation</h3>
        <div class="ln_solid"></div>
        <ul class="nav side-menu sidebar-scroll">
            <li>
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li @if(in_array(Route::currentRouteName(), ['admin.banner.create','admin.banner.edit']))
                 {{ "class=current-page" }}
                 @endif >
                 <a href="{{ route('admin.banner.index') }}"><i class="fa fa-flag-checkered"></i>Banner</a>
            </li>
            <li @if(in_array(Route::currentRouteName(), ['admin.category.create','admin.category.edit','admin.sub-category.create','admin.sub-category.edit']))
                 {{ "class=active" }}
                 @endif>
                 <a><i class="fa fa-bars"></i> Categories <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" @if(in_array(Route::currentRouteName(), ['admin.category.create', 'admin.category.edit','admin.sub-category.create', 'admin.sub-category.edit']))
                    {{ "style=display:block;" }}
                    @endif>
                    <li @if(in_array(Route::currentRouteName(), ['admin.category.create', 'admin.category.edit']))
                     {{ "class=current-page" }}
                     @endif
                     ><a href="{{ route('admin.category.index') }}">Category</a></li>
                    <li @if(in_array(Route::currentRouteName(), ['admin.sub-category.create', 'admin.sub-category.edit']))
                         {{ "class=current-page" }}
                         @endif
                         ><a href="{{ route('admin.sub-category.index') }}">Sub Category</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}"><i class="fa fa-users"></i>Users</a>
            </li>
            <li>
                <a href="{{ route('admin.vendor.index') }}"><i class="fa fa-users"></i>Vendors</a>
            </li>

        </ul>
    </div>
</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <!--   <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a> -->
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->