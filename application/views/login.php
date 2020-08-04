<!DOCTYPE html>
<html lang="id">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>

	<header>
		<?php $this->load->view("_partials/header.php") ?>
	</header>

	<div class="form">
		<div class="container">
			<?php if ($this->session->flashdata('eror')) : ?>
				<div class="alert alert-warning" role="alert">
					<?php echo $this->session->flashdata('eror'); ?>
				</div>
			<?php endif; ?>

			<div class="item shadow-border">

				<form action="<?= site_url('login') ?>" method="POST" class="form-group">
					<h2>Login</h2>
					<div class="form-group">
						<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
						<button class="btn prepend"><i data-feather="mail"></i></button>
					</div>
					<div class="form-group">
						<input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
						<button class="btn prepend"><i data-feather="lock"></i></button>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-user btn-block" type="submit" style="background: #1d5df9;">Login</button>
					</div>
					<span>Belum punya akun? <a href="<?= base_url("register") ?>">Buat akun</a></span>
				</form>

			</div>
		</div>
	</div>

	<?php $this->load->view("_partials/footer.php") ?>


</body>

</html>