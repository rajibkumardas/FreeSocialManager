@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
          <li><a href="{{ backpack_url('client') }}"><i class="fa fa-address-card-o"></i> <span>Clients</span></a></li>
          <li><a href="{{backpack_url('clientAccount') }}"><i class="fa fa-link"></i> <span>Client Accounts</span></a></li>
          <li><a href="{{backpack_url('taggroup') }}"><i class="fa fa-tags"></i> <span>Tag Groups</span></a></li>
          <li><a href="{{backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
          <li><a href="{{ backpack_url('publish') }}"><i class="fa fa-pencil"></i> <span>Publish</span></a></li>
          <li><a href="{{ backpack_url('publishclientaccount') }}"><i class="fa fa-pencil"></i> <span>Posts</span></a></li>
          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
