<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary datatable">Data Convensional</h6>
<a href="<?php echo base_url('InfoLokasi/tambah1')?>"><button class="btn btn-primary btn-sm btninsert" >+ Input Data</button></a>
</div>
<div class="card-body">
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <th scope="col">No.</th>
        <th scope="col">Nama Convensional</th>
        <th scope="col">Convensional 1</th>
        <th scope="col">Convensional 2</th>
        <th scope="col">Seri Convensional 1</th>
        <th scope="col">Seri Convensional 2</th>
        <th scope="col">SN Convensional 1</th>
        <th scope="col">SN Convensional 2</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Convensional</th>
        <th scope="col">Convensional 1</th>
        <th scope="col">Convensional 2</th>
        <th scope="col">Seri Convensional 1</th>
        <th scope="col">Seri Convensional 2</th>
        <th scope="col">SN Convensional 1</th>
        <th scope="col">SN Convensional 2</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($conven as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
            <td><?php echo $baris->tipe_conven;?></td>
            <td><?php echo $baris->jenis_coven;?></td>
            <td><?php echo $baris->jenis_coven2;?></td>
            <td><?php echo $baris->seri_coven;?></td>
            <td><?php echo $baris->seri_coven2;?></td>
            <td><p>SN1:<?php echo $baris->sn_c1;?></p></td>
            <td><p>SN2:<?php echo $baris->sn_c2;?></p></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('Convensional/edit/'.$baris->id_convensional).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('Convensional/hapus/'.$baris->id_convensional).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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