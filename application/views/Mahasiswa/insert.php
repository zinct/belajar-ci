<div class="row <?php if(!validation_errors()) {echo 'mt-4';}  ?> ml-5">
	<div class="col-md-5 ml-5">
		<div class="card" style="margin-left: 13rem;">
		  <div class="card-header">
		    Insert Mahasiswa Form
		  </div>
		  <div class="card-body" >

		  	<!-- form -->
		  	<form method="post" action="">
			  	<div class="form-group">
				   <label for="exampleInputEmail1">Your Name</label>
				   <input type="text" class="form-control" name="nama" placeholder="Input Your Name Here..." id="exampleInputEmail1" aria-describedby="emailHelp">

				   <!-- Form Error -->
				   <?php if ( form_error('nama')): ?>
				   		<small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
				   <?php endif ?>	
				   <!-- Form Error -->

				 </div>
				 <div class="form-group">
				   <label for="exampleInputEmail1">Your Identity Number</label>
				   <input type="text" class="form-control" name="nis" placeholder="Input Your Identity Number Here..." id="exampleInputEmail1" aria-describedby="emailHelp">

				   <!-- Form Error -->
				   <?php if ( form_error('nama')): ?>
				   		<small id="emailHelp" class="form-text text-danger"><?= form_error('nis'); ?></small>
				   <?php endif ?>	
				   <!-- Form Error -->

				 </div>
				 <label>Your Identity Major</label>
				 <select class="custom-select mb-3" name="jurusan">
				  <option value="" selected>Input Your Major Here...</option>
				  <?php foreach ($jurusan as $jrs): ?>
				  		<option value="<?= $jrs['daftar_jurusan']; ?>"><?= $jrs['daftar_jurusan']; ?></option>
				  <?php endforeach; ?>
				</select>			

					<!-- Form Error -->
				   <?php if ( form_error('nama')): ?>
				   		<small id="emailHelp" class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				   <?php endif ?>	
				   <!-- Form Error -->

				<div class="container ">
					<button type="submit" class="btn btn-primary float-right ml-2 px-5">Insert</button>
					<a href="<?= base_url(); ?>mahasiswa" class="btn btn-light float-right px-5">Back</a>				
				</div>
			</form>
		  	<!-- form -->

		  </div>
		</div>
	</div>
</div>