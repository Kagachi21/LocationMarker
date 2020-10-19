  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
  <img src="<?php echo base_url('assets/loginv1/images/Polda_Jatim.png')?>" width=50 height=70 alt="IMG">
  <!-- </div> -->
  <div class="sidebar-brand-text mx-3">Kapolda Jatim</div>
  <img src="<?php echo base_url('assets/loginv1/images/TIK_Polri.png')?>" width=50 height=70 alt="IMG">
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Divider -->
<hr class="sidebar-divider">



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Data Kepolisian
</div>
<!-- Nav Item - Pages Collapse Menu -->
<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('dashboard');?>">
    <i class="fas fa-fw fa fa-home"></i>
    <span>Dashboard</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('MarkerMap');?>">
    <i class="fas fa-fw fa fa-map-marker"></i>
    <span>Marker Map</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Form_data');?>">
    <i class="fas fa-fw fa fa-truck"></i>
    <span>Form Data</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Data_admin');?>">
    <i class="fas fa-fw fa fa-users"></i>
    <span>Data Admin</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->