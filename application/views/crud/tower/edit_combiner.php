<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Combiner</h1>
 </div>
 <?php foreach($combin as $baris){ ?>
 <form class="user" action="<?php echo base_url('Combiner/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_combiner" value="<?php echo $baris->id_combiner; ?>">
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Nama Combiner</label>
      <input type="text" class="form-control form-control-user" id="nama_combiner" name="nama_combiner" placeholder="Masukkan Combiner " value="<?php echo $baris->nama_combiner; ?>" require>
 </div>
 <div class="form-group">
      <label for="exampleInputEmail1">Jumlah Combiner</label>
      <input type="text" class="form-control form-control-user" id="jumlah_cb" name="jumlah_cb" placeholder="Masukkan Jumlah " value="<?php echo $baris->jumlah_cb; ?>" require>
 </div>
<div class="form-group">
<label for="exampleInputEmail1">SN 1 :</label>
      <input type="text" class="form-control form-control-user" id="csn1"name="csn1" placeholder="Masukkan SN " value="<?php echo $baris->csn1; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 2 :</label>
      <input type="text" class="form-control form-control-user" id="csn2"name="csn2" placeholder="Masukkan SN " value="<?php echo $baris->csn2; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 3 :</label>
      <input type="text" class="form-control form-control-user" id="csn3"name="csn3" placeholder="Masukkan SN " value="<?php echo $baris->csn3; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 4 :</label>
      <input type="text" class="form-control form-control-user" id="csn4"name="csn4" placeholder="Masukkan SN " value="<?php echo $baris->csn4; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 5 :</label>
      <input type="text" class="form-control form-control-user" id="csn5"name="csn5" placeholder="Masukkan SN " value="<?php echo $baris->csn5; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 6 :</label>
      <input type="text" class="form-control form-control-user" id="csn6"name="csn6" placeholder="Masukkan SN " value="<?php echo $baris->csn6; ?>"require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 7 :</label>
      <input type="text" class="form-control form-control-user" id="csn7"name="csn7" placeholder="Masukkan SN " value="<?php echo $baris->csn7; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 8 :</label>
      <input type="text" class="form-control form-control-user" id="csn8"name="csn8" placeholder="Masukkan SN " value="<?php echo $baris->csn8; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 9 :</label>
      <input type="text" class="form-control form-control-user" id="csn9"name="csn9" placeholder="Masukkan SN " value="<?php echo $baris->csn9; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 10 :</label>
      <input type="text" class="form-control form-control-user" id="csn10"name="csn10" placeholder="Masukkan SN " value="<?php echo $baris->csn10; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 11 :</label>
      <input type="text" class="form-control form-control-user" id="csn11"name="csn11" placeholder="Masukkan SN " value="<?php echo $baris->csn11; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN 12 :</label>
      <input type="text" class="form-control form-control-user" id="csn12"name="csn12" placeholder="Masukkan SN " value="<?php echo $baris->csn12; ?>" require>
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Edit">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Combiner/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>