<nav class="navigation dark" style="box-shadow:1px 2px 5px 1px rgba(0,0,0,0.08)">
	<div class="container">
		<a href="index.php" class="" rel="home">
			<img src="<?= base_url() ?>assets/img/logo/logo.png" style="width:200px;margin-bottom:-50px;margin-top:-53px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse menu" id="navbar" style="z-index: 999">
			<ul>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" id="hosting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fitur</a>
					<div class="dropdown-menu" aria-labelledby="hosting">
						<a href="#Fitur">
							<i data-feather="gift"></i>
							<div class="title">
								<h5>Donasi</h5>
								<p>Pilih tipe Donasi</p>
							</div>
						</a>
						<a href="#Fitur">
							<i data-feather="inbox"></i>
							<div class="title">
								<h5>Sedekah</h5>
								<p>Pilih tipe Sedekah</p>
							</div>
						</a>
						<a href="#Fitur">
							<i data-feather="box"></i>
							<div class="title">
								<h5>Zakat</h5>
								<p>Pilih tipe Zakat</p>
							</div>
						</a>
						<a href="#Fitur">
							<i data-feather="zap"></i>
							<div class="title">
								<h5>Acak</h5>
								<p>Pilih tipe Acak</p>
							</div>
						</a>
					</div>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" id="company" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
					<div class="dropdown-menu" aria-labelledby="company">
						<a href="tentang.png">
							<i data-feather="user"></i>
							<div class="title">
								<h5>Tentang Kami</h5>
								<p>Tentang komunitas</p>
							</div>
						</a>
						<a href="team.php">
							<i data-feather="users"></i>
							<div class="title">
								<h5>Team</h5>
								<p>Anggota komunitas</p>
							</div>
						</a>
						<a href="kontak.php">
							<i data-feather="mail"></i>
							<div class="title">
								<h5>Kontak</h5>
								<p>Hubungi kami</p>
							</div>
						</a>
					</div>
				</li>
			</ul>
			<a href="login" class="primary">Login</a>
			<a href="register" class="primary">Daftar</a>
		</div>
	</div>
</nav>

