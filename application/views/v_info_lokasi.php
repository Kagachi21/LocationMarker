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
        <th scope="col">Nama Lokasi</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Nama Site</th>
        <th scope="col">Jenis Tower & Ketinggian</th>
        <th scope="col">Tipe Tower</th>
        <th scope="col">Combiner</th>
        <th scope="col">Jumlah Combiner</th>
        <th scope="col">Convensional</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Lokasi</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Nama Site</th>
        <th scope="col">Jenis Tower & Ketinggian</th>
        <th scope="col">Tipe Tower</th>
        <th scope="col">Combiner</th>
        <th scope="col">Jumlah Combiner</th>
        <th scope="col">Convensional</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($infoloc as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->nama_lokasi;?></td>
            <td><?php echo $baris->latitude;?></td>
            <td><?php echo $baris->longitude;?></td>
            <td><?php echo $baris->nama_site;?></td>
            <td><?php echo $baris->nama_tower;?> & <?php echo $baris->tinggi_tow;?></td>
            <td><?php echo $baris->type_tow;?></td>
            <td><?php echo $baris->nama_combiner;?></td>
            <td><?php echo $baris->jumlah_cb;?></td>
            <td><?php echo $baris->tipe_conven;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('Data_admin/edit/'.$baris->id_lokasi).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('Data_admin/hapus/'.$baris->id_lokasi).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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