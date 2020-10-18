<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Admin</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('Data_admin/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama"name="nama" placeholder="Nama " require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="email"name="email" placeholder="Email " require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="alamat"name="alamat" placeholder="Alamat " require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="no_telp"name="no_telp" placeholder="No. Telp " require>
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Data_admin/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>