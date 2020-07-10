<div class="content-wrapper">
	<section class="content">
		<?php 
    	foreach ($penyakit as $pyt) { ?>

		<form method="post" action="<?php echo base_url().'dokter/penyakit/update'; ?>" >
		
			<div class="form-group">
				<label>NAMA PENYAKIT</label>
				<input type="hidden" name="no" class="form-control" value="<?php echo $pyt->no ?>">
				<input type="text" name="nama_penyakit" class="form-control" value="<?php echo $pyt->nama_penyakit ?>">
			</div>
			<div class="form-group">
				<label>DESKRIPSI PENYAKIT</label>
				<input type="text" name="deskripsi_penyakit" class="form-control" value="<?php echo $pyt->deskripsi_penyakit ?>">
			</div>

			<div class="form-group">
				<label>LIST GEJALA</label>
				<input type="text" name="list_gejala" class="form-control" value="<?php echo $pyt->list_gejala ?>">
			</div>

			<div class="form-group">
				<label>OBAT PENANGANAN</label>
				<input type="text" name="obat_penanganan" class="form-control" value="<?php echo $pyt->obat_penanganan ?>">
			</div>

			<div class="form-group">
				<label>TNGKAT KEWASPADAAN</label>
				<select name = "tingkat_kewaspadaan" class="form-control" value="<?php echo $pyt->tingkat_kewaspadaan?>">
						<option value= ""> </option>
						<option value ="Ringan">Ringan</option>
						<option value ="Sedang">Sedang</option>
						<option value ="Berat">Berat</option>
						<option value ="Parah">Parah</option>
					</select>
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<br><br>	
		</form>
		<?php } ?>
	</section>
</div>