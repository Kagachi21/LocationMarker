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
  <a class="nav-link" href="<?php echo base_url('Staff/dashboard');?>">
    <i class="fas fa-fw fa-home"></i>
    <span>Dashboard</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Staff/MarkerMap');?>">
    <i class="fas fa-fw fa-map-marker"></i>
    <span>Marker Map</span></a>
</li>

  <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-map"></i>
          <span>Data Lokasi</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Tower:</h6>
            <a class="collapse-item" href="<?php echo base_url('Staff/InfoLokasi');?>">Info Lokasi</a>
            <a class="collapse-item" href="<?php echo base_url('Staff/TipeTower');?>">Tower</a>
            <a class="collapse-item" href="<?php echo base_url('Staff/Combiner');?>">Combiner</a>
            <a class="collapse-item" href="<?php echo base_url('Staff/Convensional');?>">Convensional</a>
          </div>
        </div>
      </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->