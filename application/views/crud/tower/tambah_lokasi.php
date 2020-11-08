<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Lokasi</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('InfoLokasi/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
<label for="exampleInputEmail1">Nama Lokasi :</label>
      <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama lokasi.. " require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Latitude :</label>
      <input type="text" class="form-control form-control-user" id="latitude" name="latitude" placeholder="Latitude... " require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Longitude :</label>
      <input type="text" class="form-control form-control-user" id="longitude" name="longitude" placeholder="Longitude... " require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Tower :</label>
<select class="form-control" id="id_tower" name="id_tower" require>
      <?php foreach($loc as $baris){ ?>
      <option value="<?php echo $baris['id_tower']; ?>"> <?php echo $baris['nama_site']; ?> : <?php echo $baris['nama_tower']; ?> <?php echo $baris['tinggi_tow']; ?>m Tipe <?php echo $baris['type_tow']; ?></option>
      <?php } ?>
      </select> 
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('InfoLokasi/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>