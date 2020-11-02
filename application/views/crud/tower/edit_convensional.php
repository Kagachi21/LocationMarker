<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Conventional</h1>
 </div>
 <?php foreach($conven as $baris){ ?>
 <form class="user" action="<?php echo base_url('Convensional/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_convensional" value="<?php echo $baris->id_convensional; ?>">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Tipe Convensional :</label>
 <input type="text" class="form-control form-control-user" id="" disabled name="" placeholder="" value="<?php echo $baris->tipe_conven; ?>" require>
      <input type="radio" name="tipe_conven" value="RESTABES">RESTABES
      &nbsp;
      <input type="radio" name="tipe_conven" value="PJR">PJR
      &nbsp;
      <input type="radio" name="tipe_conven" value="BRIMOB">BRIMOB
</div>
<div class="form-group">
 <label for="exampleInputEmail1">Jenis Convensional 1 :</label>
 <input type="text" class="form-control form-control-user" id="" disabled name="" placeholder="" value="<?php echo $baris->jenis_coven; ?>" require>
      <input type="radio" name="jenis_coven" value="MTR">MTR
      &nbsp;
      <input type="radio" name="jenis_coven" value="GTR">GTR
</div>
<div class="form-group">
<label for="exampleInputEmail1">Jenis Convensional 2 :</label>
      <input type="text" class="form-control form-control-user" id="jenis_coven2" name="jenis_coven2" placeholder="Jenis Convensional. " value="<?php echo $baris->jenis_coven2; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Seri Convensional 1 :</label>
      <input type="text" class="form-control form-control-user" id="seri_coven" name="seri_coven" placeholder="Seri Convensional. " value="<?php echo $baris->seri_coven; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Seri Convensional 2 :</label>
      <input type="text" class="form-control form-control-user" id="seri_coven2" name="seri_coven2" placeholder="Seri Convensional. " value="<?php echo $baris->seri_coven2; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN Convensional 1 :</label>
      <input type="text" class="form-control form-control-user" id="sn_c1" name="sn_c1" placeholder="Seri Convensional. " value="<?php echo $baris->sn_c1; ?>" require>
</div>
<div class="form-group">
<label for="exampleInputEmail1">SN Convensional 2 :</label>
      <input type="text" class="form-control form-control-user" id="sn_c2" name="sn_c2" placeholder="Seri Convensional. " value="<?php echo $baris->sn_c2; ?>" require>
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Edit">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('Convensional/index')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>