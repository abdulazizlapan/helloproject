<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>

      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif

      <li class="menu-header">Master Data</li>
      <li class="{{ Request::route()->getName() == 'admin.add.category' || Request::route()->getName() == 'admin.index.category' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.index.category') }}"><i class="fa fa-columns"></i> <span>Category</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.index.product' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.index.product') }}"><i class="fa fa-columns"></i> <span>Product</span></a></li>

    </ul>
</aside>
