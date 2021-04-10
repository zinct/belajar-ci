<div class="container">

	<!-- Alert success -->
	<?php if($this->session->flashdata('success')) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa Has Been
			  <strong>Success</strong> <?= $this->session->flashdata('success'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>
	<!-- Alert success -->

	<!-- Alert Warning -->
	<?php if($this->session->flashdata('warning')) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Mahasiswa Has Been
			  <strong>Success</strong> <?= $this->session->flashdata('warning'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>
	<!-- Alert Warning -->

	<div class="row
		<?php if (!$this->session->flashdata()): ?>
			mt-4
		<?php endif ?>
	">
		<div class="col-md-6">

			<!-- Button trigger modal -->
			<a href="<?= base_url(); ?>mahasiswa/insert" class="btn btn-outline-primary my-2 my-sm-0">
				Insert Mahasiswa
			</a>
			<!-- Button trigger modal -->

			<!-- Search -->
			<form class="form-inline my-2 my-lg-0 float-left mr-2" action="" method="post">
		      <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search..." aria-label="Search" autocomplete="off" autofocus>
		      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
		    </form>
			<!-- Search -->

		</div>
	</div>
	
	<div class="row mt-3">
		<div class="col-md-6">
			<h2 class="mb-3">List Of Mahasiswa Baknus 666</h2>

			<!-- Mahasiswa Not Found -->
				<?php if (empty($mahasiswa)): ?>
					<div class="alert alert-danger" role="alert">
					  Mahasiswa Not Found!
					</div>
				<?php endif ?>
			<!-- Mahasiswa Not Found -->

			<ul class="list-group">				
				<?php foreach ($mahasiswa as $mhs): ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= base_url(); ?>mahasiswa/delete/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Are you sure want to delete it?')">Delete</a>
						<a href="<?= base_url(); ?>mahasiswa/update/<?= $mhs['id']; ?>" class="badge badge-success float-right">Update</a>
						<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2">Detail</a>
					</li>
				<?php endforeach ?>			  
			</ul>
		</div>	
	</div>

</div>