
 <div class="content-wrapper">
 <div class="container-fluid">
<div class="container">
<?php if($this->session->flashdata('flash-data') ): ?>
<div class="row mt-4">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa
	  		<strong>Berhasil</strong> <?= $this->session->flashdata('flash-data');?>
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	   		 	<span aria-hidden="true">&times;</span>
	  		</button>
		</div>
	</div>
</div>
<?php endif; ?>
	<div class="row mt-4">
		<div class="col-md-6">
			
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-6">
			
		</div>
	</div>



	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group ">
				  <input type="text" class="form-control" placeholder="Cari data Mahasiswa" name="keyword" >
				 	 <div class="input-group-append">
				    	<button class="btn btn-primary" type="submit">Cari</button>
  					</div>
				</div>
			</form>
			<h2>Daftar Mahasiswa</h2>

			<?php if(empty($mahasiswa)): ?>
				<div class="alert alert-danger" role="alert">Data Mahasiswa Tidak Ditemukan
				</div>
			<?php endif; ?>
			
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs):?>
					<li class="list-group-item">
						<?= $mhs['nama'];?>
						<a href="<?= base_url();?>mahasiswa/hapus/<?=$mhs['id'];?>" class="badge badge-danger float-right" onclick ="return confirm('Yakin Data Ini Akan di Hapus?');">Hapus</a>


						<a href="<?=base_url();?>mahasiswa/edit/<?= $mhs['id'];?>" class="badge badge-success float-right">Edit</a>

						<a href="<?php echo base_url('mahasiswa/index'); ?>" class="badge badge-primary float-right">Detail</a>

					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		</div>
		</div>
	</div>
</div>

