<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Admin</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('Data_admin/input1');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
<div class="form-group">
<label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control form-control-user" id="username"name="username" placeholder="Username " require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Password</label>
      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password " require >
</div>
<div class="form-group">
<label for="exampleInputEmail1">Hak Akses</label>
      <select class="form-control" id="id_level" name="id_level" require>
      <?php foreach($akses as $baris){ ?>
      <option value="<?php echo $baris['id_level']; ?>"> <?php echo $baris['level']; ?> </option>
      <?php } ?>
      </select> 
</div>
<div class="form-group">
<!-- <label for="exampleInputEmail1">User</label> -->
      <input type="hidden" class="form-control form-control-user" id="id_user" name="id_user" placeholder="User" value="<?php echo $max_user; ?>"require>
</div>
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Data_admin/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>