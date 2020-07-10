<div class = "content-wrapper">
	 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dokter/home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Penyakit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!--Navbar-->
<nav class="navbar navbar-expand-lg teal mb-4">

  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus mr-2"></i>Tambah Data Penyakit</button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Search form -->
    <form class="form-inline ml-auto" method="post" action="<?php echo base_url().'dokter/penyakit/search'; ?>">
      <div class="md-form my-0">
        <?php echo form_open('penyakit/search') ?>
        <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    <section class="content">
      
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA PENYAKIT</th>
    			<th>DESKRIPSI PENYAKIT</th>
    			<th>GEJALA</th>
    			<th>OBAT/PENANGANAN</th>
    			<th>TINGKAT KEWASPADAAN</th>
    			<th colspan="2">AKSI</th>
    		</tr>

    		<?php
    		$no = 1;
    		foreach ($penyakit as $pyt) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $pyt->nama_penyakit ?></td>
    			<td><?php echo $pyt->deskripsi_penyakit ?></td>
    			<td><?php echo $pyt->list_gejala ?></td>
    			<td><?php echo $pyt->obat_penanganan ?></td>
    			<td><?php echo $pyt->tingkat_kewaspadaan ?></td>
    			<td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('dokter/penyakit/hapus/'.$pyt->no, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
    			<td><?php echo anchor('dokter/penyakit/edit/'.$pyt->no, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    		</tr>
    	<?php endforeach; ?>
    	
    	</table>

    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" >INPUT DATA PENYAKIT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="<?php echo base_url().'dokter/penyakit/tambah_aksi/'; ?>">
      		
      		<div class="form-group">
      			<label>NAMA PENYAKIT</label>
      			<input type="text" name="nama_penyakit" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>DESKRIPSI PENYAKIT</label>
      			<textarea name="deskripsi_penyakit" class="form-control" rows="3"></textarea>
      		</div>

      		<div class="form-group">
      			<label>LIST GEJALA</label>
      			<textarea name="list_gejala" class="form-control" rows="3">
      			</textarea>
      		</div>

      		<div class="form-group">
      			<label>OBAT/PENANGANAN</label>
      			<input type="text" name="obat_penanganan" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>TINGKAT KEWASPADAAN</label>
					<select name = "tingkat_kewaspadaan" class="form-control" >
						<option value= ""> </option>
						<option value ="Ringan">Ringan</option>
						<option value ="Sedang">Sedang</option>
						<option value ="Berat">Berat</option>
						<option value ="Parah">Parah</option>
					</select>
      		</div>

      		<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
       	 	<button type="submit" class="btn btn-primary">Simpan</button>

      	</form>
      </div>
    </div>
  </div>
</div>
</div>