<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Admin</h1>
 </div>
     <?php foreach($user as $baris){ ?>
 <form class="user" action="<?php echo base_url('Data_admin/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $baris->id; ?>">
 </div>
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama"name="nama" placeholder="Nama Admin " value="<?php echo $baris->nama; ?>" require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="username"name="username" placeholder="Username " value="<?php echo $baris->username; ?>" require>
</div>
<div class="form-group">
      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password " value="<?php echo $baris->password; ?>" require >
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="level" name="level" placeholder="level" value="<?php echo $baris->level; ?>" require>
</div>
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Data_admin/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>