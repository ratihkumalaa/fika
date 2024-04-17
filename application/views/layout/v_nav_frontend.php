<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md" style="background-color: #2FA0B5;">
	<div class="container">
		<a href="<?= base_url() ?>" class="navbar-brand">
			<i class="fas fa-store text-white"></i>
			<span class="brand-text font-weight-light text-white"><b>Toko Online</b></span>
		</a>

		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse order-3" id="navbarCollapse">

			<a href="<?= base_url() ?>" class="nav-link text-white">Home</a>
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Fashion</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Catalog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Lifestyle</a>
			</li>
			</ul>
		</div>

		<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
			<?php
			$keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $value) {
				$jml_item = $jml_item + $value['qty'];
			}
			?>
			<li class="nav-item dropdown">
				<a class="nav-link" href="<?= base_url('belanja') ?>">
					<i class="fas fa-shopping-cart text-white"></i>
					<span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
				</a>
			</li>
		</ul>
	</div>
</nav>

<!-- konten -->
<div class="content-wrapper">
	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"> <?= $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Toko Online</a></li>
						<li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container">