<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Admin</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('Data_admin/input1');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="username"name="username" placeholder="Username " require>
</div>
<div class="form-group">
      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password " require >
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="id_level" name="id_level" placeholder="Akses" require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="id_user" name="id_user" placeholder="User" value="<?php echo $max_user; ?>"require>
</div>
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Data_admin/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>