<div class="container">
	<div class="row">
		<div class="col">
			<?php if ($this->session->flashdata('flash')): ?>
				<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">One Of Mahasiswa Has
				  <strong>Success</strong> <?= $this->session->flashdata('flash');; ?>.
				  </button>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>

<div class="container
	<?php if (!$this->session->flashdata('flash')): ?>
		mt-4
	<?php endif ?>
">
	<div class="row">
		<div class="col-7">
			<h2>List Of Peoples In The Worlds</h2>
		</div>
		<div class="col-5">
			<form class="form-inline float-right" action="" method="post">
		    	<input class="form-control mr-sm-2 px-5" name="keyword" type="search" placeholder="Search" aria-label="Search">
		    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
		  	</form>
		</div>
	</div>
</div>

<div class="container mt-4">
	<div class="row">
		<div class="col">
			<table class="table text-center">
				<tr>
					<th>NO</th>
					<th>NAME</th>
					<th>ADDRESS</th>
					<th>EMAIL</th>
					<th>ACTIONS</th>
				</tr>
		
				<?php foreach ($people as $peep): ?>				
				<tr>
					<td><?= ++$start_index; ?></td>
					<td><?= $peep['nama']; ?></td>
					<td><?= $peep['address']; ?></td>
					<td><?= $peep['email']; ?></td>
					<td>
						<a href="<?= base_url(); ?>people/delete/<?= $peep['id']; ?>" class="badge badge-danger" onclick="return confirm('Delete it?')">Delete</a>						
					</td>
				</tr>
				<?php endforeach; ?>

			</table>

			<?= $this->pagination->create_links(); ?>

		</div>
	</div>
</div>
