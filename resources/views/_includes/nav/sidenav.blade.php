<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li><a href="{{ route('manage.dashboard') }}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a></li>
    </ul>
    <p class="menu-label">Content</p>
    <ul class="menu-list">
      <li><a href="#" class="">Manage Staff</a></li>
      <li><a href="#" class="">Manage Vacancies</a></li>
    </ul>
    <p class="menu-label">Administration</p>
    <ul class="menu-list">
      <li><a href="#" class="">Manage Users</a></li>
      <li>
        <a class="has-submenu">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="#" class="">Roles</a></li>
          <li><a href="#" class="">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
