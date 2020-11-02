<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Admin</h1>
 </div>
     <?php foreach($loc as $baris){ ?>
 <form class="user" action="<?php echo base_url('InfoLokasi/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_lokasi" value="<?php echo $baris['id_lokasi']; ?>">
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Nama Lokasi :</label>
      <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?php echo $baris['nama_lokasi']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Latitude :</label>
      <input type="text" class="form-control form-control-user" id="latitude" name="latitude" placeholder="Latitude" value="<?php echo $baris['latitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Longitude :</label>
      <input type="text" class="form-control form-control-user" id="longitude" name="longitude" placeholder="Longitude" value="<?php echo $baris['longitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Tower :</label>
      <input type="hidden" name="" value="<?php echo $baris['id_tower']; ?>">
      <input type="text" class="form-control form-control-user" id="" disabled name="" placeholder="" value= "<?php echo $baris['nama_site']; ?> : <?php echo $baris['nama_tower']; ?> <?php echo $baris['tinggi_tow']; ?>m Tipe <?php echo $baris['type_tow']; ?>" require>
      <?php } ?>
     <select class="form-control" id="id_tower" name="id_tower" require>
     <?php foreach ($loca as $key) {?>
      <option value="<?php echo $key['id_tower']; ?>"> <?php echo $key['nama_site']; ?> : <?php echo $key['nama_tower']; ?> <?php echo $key['tinggi_tow']; ?>m & Tipe <?php echo $key['type_tow']; ?> </option>
      <?php } ?>
      </select> 
 </div>
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="edit">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('InfoLokasi/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>