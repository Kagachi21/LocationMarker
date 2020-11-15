<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Tower</h1>
 </div>
 <?php foreach($tower as $baris){ ?>
 <form class="user" action="<?php echo base_url('TipeTower/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_tower" value="<?php echo $baris->id_tower; ?>">
      <input type="hidden" name="id_tipe" value="<?php echo $baris->id_tipe; ?>">
 </div>
 <div class="form-group">
<label for="exampleInputEmail1">Nama Site :</label>
<input type="text" class="form-control form-control-user" id="" name="" placeholder="" value="<?php echo $baris->nama_site; ?>" require>
      <input type="radio" name="nama_site" value="Mapolda">MAPOLDA
      &nbsp;
      <input type="radio" name="nama_site" value="Cempo">CEMPO
</div>
<div class="form-group">
<label for="exampleInputEmail1">Nama Tower :</label>
      <input type="text" class="form-control form-control-user" id="nama_tower" name="nama_tower" placeholder="Jenis Convensional. " value="<?php echo $baris->nama_tower; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Tinggi Tower :</label>
      <input type="text" class="form-control form-control-user" id="tinggi_tow" name="tinggi_tow" placeholder="SN... " value="<?php echo $baris->tinggi_tow; ?>" require>m
</div>
<div class="form-group">
<label for="exampleInputEmail1">Tipe Tower :</label>
      <input type="text" class="form-control form-control-user" id="type_tow" name="type_tow" placeholder="SN... " value="<?php echo $baris->type_tow; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Jumlah CH :</label>
      <input type="text" class="form-control form-control-user" id="jumlah_ch" name="jumlah_ch" placeholder="SN... " value="<?php echo $baris->jumlah_ch; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 1 :</label>
      <input type="text" class="form-control form-control-user" id="sn1" name="sn1" placeholder="SN... " value="<?php echo $baris->sn1; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 2  :</label>
      <input type="text" class="form-control form-control-user" id="sn2" name="sn2" placeholder="SN... " value="<?php echo $baris->sn2; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 3  :</label>
      <input type="text" class="form-control form-control-user" id="sn3" name="sn3" placeholder="SN... " value="<?php echo $baris->sn3; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 4  :</label>
      <input type="text" class="form-control form-control-user" id="sn4" name="sn4" placeholder="SN... " value="<?php echo $baris->sn4; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 5  :</label>
      <input type="text" class="form-control form-control-user" id="sn5" name="sn5" placeholder="SN... " value="<?php echo $baris->sn5; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 6  :</label>
      <input type="text" class="form-control form-control-user" id="sn6" name="sn6" placeholder="SN... " value="<?php echo $baris->sn6; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 7  :</label>
      <input type="text" class="form-control form-control-user" id="sn7" name="sn7" placeholder="SN... " value="<?php echo $baris->sn7; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 8  :</label>
      <input type="text" class="form-control form-control-user" id="sn8" name="sn8" placeholder="SN... " value="<?php echo $baris->sn8; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 9  :</label>
      <input type="text" class="form-control form-control-user" id="sn9" name="sn9" placeholder="SN... " value="<?php echo $baris->sn9; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 10  :</label>
      <input type="text" class="form-control form-control-user" id="sn10" name="sn10" placeholder="SN... " value="<?php echo $baris->sn10; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 11  :</label>
      <input type="text" class="form-control form-control-user" id="sn11" name="sn11" placeholder="SN... " value="<?php echo $baris->sn11; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 12  :</label>
      <input type="text" class="form-control form-control-user" id="sn12" name="sn12" placeholder="SN... " value="<?php echo $baris->sn12; ?>" require>
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Edit">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('TipeTower/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>