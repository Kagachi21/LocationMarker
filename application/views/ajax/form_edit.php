<form action="<?= base_url('MarkerMap/editMap'); ?>" method="POST">
  <div class="form-group">
      <input type="hidden" name="id_lokasi" value="<?php echo $map['id_lokasi']; ?>">
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Nama Lokasi :</label>
      <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?php echo $map['nama_lokasi']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Latitude :</label>
      <input type="text" class="form-control form-control-user" id="latitude" name="latitude" placeholder="Latitude" value="<?php echo $map['latitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Longitude :</label>
      <input type="text" class="form-control form-control-user" id="longitude" name="longitude" placeholder="Longitude" value="<?php echo $map['longitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Tower :</label>
      <input type="hidden" name="" value="<?php echo $map['id_tower']; ?>">
      <input type="text" class="form-control form-control-user" id="" disabled name="" placeholder="" value= "<?php echo $map['nama_site']; ?> : <?php echo $map['nama_tower']; ?> <?php echo $map['tinggi_tow']; ?>m Tipe <?php echo $map['type_tow']; ?>" require>
     <select class="form-control" id="id_tower" name="id_tower" require>
     <?php foreach ($loca) {?>
      <option value="<?php echo $loca['id_tower']; ?>"> <?php echo $loca['nama_site']; ?> : <?php echo $loca['nama_tower']; ?> <?php echo $loca['tinggi_tow']; ?>m & Tipe <?php echo $loca['type_tow']; ?> </option>
      <?php } ?>
      </select> 
 </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>