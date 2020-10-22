<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary datatable">Data Tower</h6>
<a href="<?php echo base_url('Data_admin/tambah')?>"><button class="btn btn-primary btn-sm btninsert" >+ Input Data</button></a>
</div>
<div class="card-body">
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Site</th>
        <th scope="col">Jenis Tower & Ketinggian</th>
        <th scope="col">Tipe Tower</th>
        <th scope="col">Jumlah CH</th>
        <th scope="col">CH 1</th>
        <th scope="col">CH 2</th>
        <th scope="col">CH 3</th>
        <th scope="col">CH 4</th>
        <th scope="col">CH 5</th>
        <th scope="col">CH 6</th>
        <th scope="col">CH 7</th>
        <th scope="col">CH 8</th>
        <th scope="col">CH 9</th>
        <th scope="col">CH 10</th>
        <th scope="col">CH 11</th>
        <th scope="col">CH 12</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Site</th>
        <th scope="col">Jenis Tower & Ketinggian</th>
        <th scope="col">Tipe Tower</th>
        <th scope="col">Jumlah CH</th>
        <th scope="col">CH 1</th>
        <th scope="col">CH 2</th>
        <th scope="col">CH 3</th>
        <th scope="col">CH 4</th>
        <th scope="col">CH 5</th>
        <th scope="col">CH 6</th>
        <th scope="col">CH 7</th>
        <th scope="col">CH 8</th>
        <th scope="col">CH 9</th>
        <th scope="col">CH 10</th>
        <th scope="col">CH 11</th>
        <th scope="col">CH 12</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($towerku as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
            <td><?php echo $baris->nama_site;?></td>
            <td><?php echo $baris->nama_tower;?> & <p><?php echo $baris->tinggi_tow;?>m</p></td>
            <td><?php echo $baris->type_tow;?></td>
            <td><?php echo $baris->jumlah_ch;?></td>
            <td><p>SN1:<?php echo $baris->sn1;?></p></td>
            <td><p>SN2:<?php echo $baris->sn2;?></p></td>
            <td><p>SN3:<?php echo $baris->sn3;?></p></td>
            <td><p>SN4:<?php echo $baris->sn4;?></p></td>
            <td><p>SN5:<?php echo $baris->sn5;?></p></td>
            <td><p>SN6:<?php echo $baris->sn6;?></p></td>
            <td><p>SN7:<?php echo $baris->sn7;?></p></td>
            <td><p>SN8:<?php echo $baris->sn8;?></p></td>
            <td><p>SN9:<?php echo $baris->sn9;?></p></td>
            <td><p>SN10:<?php echo $baris->sn10;?></p></td>
            <td><p>SN11:<?php echo $baris->sn11;?></p></td>
            <td><p>SN12:<?php echo $baris->sn12;?></p></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('Data_admin/edit/'.$baris->id_tower).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('Data_admin/hapus/'.$baris->id_tower).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
            ?>
            
            </td>
        </tr>
            <?php }?>
    </tbody>
  </table>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->