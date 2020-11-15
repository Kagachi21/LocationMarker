<form action="<?= base_url('MarkerMap/editMap'); ?>" method="POST">
  <div class="form-group">
      <input type="hidden" name="id_lokasi" value="<?= $map['id_lokasi']; ?>">
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Nama Lokasi :</label>
      <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?= $map['nama_lokasi']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Latitude :</label>
      <input type="text" class="form-control form-control-user" id="latitude" name="latitude" placeholder="Latitude" value="<?= $map['latitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Longitude :</label>
      <input type="text" class="form-control form-control-user" id="longitude" name="longitude" placeholder="Longitude" value="<?= $map['longitude']; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Tower :</label>
      <input type="hidden" name="" value="<?= $map['id_tower']; ?>">
      <input type="text" class="form-control form-control-user" id="" disabled name="" placeholder="" value= "<?= $map['nama_site']; ?> : <?= $map['nama_tower']; ?> <?= $map['tinggi_tow']; ?>m Tipe <?= $map['type_tow']; ?>" require>
     <select class="form-control" id="id_tower" name="id_tower" require>
     <?php foreach($loca as $baris){ ?>
      <option value="<?= $baris['id_tower']; ?>"> <?= $baris['nama_site']; ?> : <?= $baris['nama_tower']; ?> <?= $baris['tinggi_tow']; ?>m & Tipe <?= $baris['type_tow']; ?> </option>
       <?php } ?> 
     </select> 
 </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>