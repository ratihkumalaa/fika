<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Shop | <?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
	<!-- icon -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- admin -->
	<link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silahkan Login</p>

				<!-- memvalidasi jawaban -->
				<?php
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');
				// jika jawaban salah akan muncul tulisan error
				if ($this->session->flashdata('error')) {
					echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-ban"></i> Alert!</h5>';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				// jika jawaban benar maka akan muncul tulisan sukses 
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-check"></i> Sukses!</h5>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}

				echo form_open('auth/login_user')
				?>
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<a href="<?= base_url() ?>" class="btn btn-success btn-block"> Website</a>
					</div>
					<div class="col-6">
						<button type="submit" class="btn btn-primary btn-block">Log In</button>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>

	<!-- jquery  -->
	<script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>

</body>

</html>
