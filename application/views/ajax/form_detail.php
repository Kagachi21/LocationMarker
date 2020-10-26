<input type="hidden" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['id_lokasi']; ?>" require>
<div class="form-group">
<label for="exampleInputEmail1">Nama Lokasi :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['nama_lokasi']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Latitude :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['latitude']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Longitude :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['longitude']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Nama Site :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['nama_site']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Jenis Tower & Ketinggian :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['nama_tower']; ?> <?= $map['tinggi_tow']; ?>m" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Tipe Tower :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['type_tow']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Combiner :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['nama_combiner']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Jumlah Combiner :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['jumlah_cb']; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Convensional :</label>
      <input type="text" class="form-control form-control-user" disabled id="" name="" placeholder="<?= $map['tipe_conven']; ?>" require>
</div>


<button type="button" id="<?= $map['id_lokasi']; ?>" class="btn btn-primary btn-edit-modal">Edit</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>