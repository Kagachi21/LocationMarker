<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Tower</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('TipeTower/input1');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
<label for="exampleInputEmail1">Nama Site :</label>
<br></br>
      <input type="radio" name="nama_site" checked value="Mapolda">MAPOLDA
      &nbsp;
      <input type="radio" name="nama_site" value="Cempo">CEMPO
</div>
<div class="form-group">
<label for="exampleInputEmail1">Tipe :</label>
      <select class="form-control" id="id_tipe" name="id_tipe" require>
      <?php foreach($tipe as $baris){ ?>
      <option value="<?php echo $baris['id_tipe']; ?>"> <?php echo $baris['nama_tower']; ?> <?php echo $baris['tinggi_tow']; ?>m & Tipe <?php echo $baris['type_tow']; ?> </option>
      <?php } ?>
      </select> 
</div>
<div class="form-group">
<label for="exampleInputEmail1">Combiner :</label>
<select class="form-control" id="id_combiner" name="id_combiner" require>
      <?php foreach($combi as $row){ ?>
      <option value="<?php echo $row['id_combiner']; ?>"><?php echo $row['nama_combiner']; ?> : Jumlah CH <?php echo $row['jumlah_cb']; ?> </option>
      <?php } ?>
      </select> 
</div>
<div class="form-group">
<label for="exampleInputEmail1">Convensional :</label>
<select class="form-control" id="id_convensional" name="id_convensional" require>
      <?php foreach($conven as $l){ ?>
      <option value="<?php echo $l['id_convensional']; ?>"><?php echo $l['tipe_conven']; ?> : <?php echo $l['jenis_coven']; ?> <?php echo $l['seri_coven']; ?> & <?php echo $l['jenis_coven2']; ?> <?php echo $l['seri_coven2']; ?> </option>
      <?php } ?>
      </select> 
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('TipeTower/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>