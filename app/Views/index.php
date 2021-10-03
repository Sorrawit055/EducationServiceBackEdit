<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8_unicode_ci">
	<title>เพิ่มรายชื่อนักเรียน</title>
	<meta name="description" content="The tiny framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
	  .container {
		max-width: 500px;
	  }
	</style>
</head>
<body>

<div class="container mt-5">
	<div class="card">
		<div class="card-header text-center">
			<strong>Upload CSV File</strong>
		</div>

		<div class="card-body">

		<div class="mt-2">
			<?php if (session()->has('message')){ ?>
				<div class="alert <?=session()->getFlashdata('alert-class') ?>">
					<?=session()->getFlashdata('message') ?>
				</div>
			<?php } ?>

			<?php $validation = \Config\Services::validation(); ?>
		</div>	

			<form action="<?=site_url('import-csv') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group mb-3">
					<div class="mb-3">
						<input type="file" name="file" class="form-control" id="file">
					</div>					   
				</div>
				<div class="d-grid">
					<input type="submit" name="submit" value="Upload" class="btn btn-dark" />
				</div>
			</form>

			<a href="http://localhost:3000/dashboardAdmin">กลับReactป่ะ</a>
		</div>
	</div>
</div>
</body>
</html>