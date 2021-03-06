<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <a target="_blank" class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fab fa-dochub"></i>
    </div>
    <div class="sidebar-brand-text mx-2">DemoScript <sup>A1</sup></div>
  </a>

  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?=base_url('dashboard')?>">
      <i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">
  <div class="sidebar-heading">Primary Menu</div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Main Menu</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?=base_url('dashboard/demoscript')?>">Demo List</a>
        <a class="collapse-item" href="<?=base_url('dashboard/category')?>">Category</a>
        <a class="collapse-item" href="<?=base_url('dashboard/filemanager')?>">File Manager</a>
        <a class="collapse-item" href="<?=base_url('dashboard/inbox')?>">Messages</a>
        <a class="collapse-item" href="<?=base_url('dashboard/download')?>">Download</a>
        <a class="collapse-item" href="<?=base_url('dashboard/page')?>">Page List</a>

      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('dashboard/author')?>">
      <i class="fas fa-fw fa-user-secret"></i>
      <span>Administrator</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('dashboard/settings')?>">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Settings</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
