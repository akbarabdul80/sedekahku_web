			<nav class="navigation dark">
				<div class="container">
					<a href="index.php" class="" rel="home">
						<img src="<?= base_url() ?>assets/img/logo/logo.png" style="width:200px;margin-bottom:-50px;margin-top:-53px">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse menu" id="navbar">
						<ul>
							<li><a href="./">Statistik</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="company" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
								<div class="dropdown-menu" aria-labelledby="company">
									<a href="<?= base_url() ?>admin/masjid">
										<i data-feather="home"></i>
										<div class="title">
											<h5>Masjid</h5>
											<p>Posting Masjid</p>
										</div>
									</a>
									<a href="<?= base_url() ?>admin/artikel">
										<i data-feather="edit"></i>
										<div class="title">
											<h5>Artikel</h5>
											<p>Posting Artikel</p>
										</div>
									</a>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="company" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
								<div class="dropdown-menu" aria-labelledby="company">
									<a href="<?= base_url() ?>admin/about">
										<i data-feather="user"></i>
										<div class="title">
											<h5>About</h5>
											<p>Edit halaman Tentang</p>
										</div>
									</a>
									<a href="<?= base_url() ?>admin/sosmed">
										<i data-feather="users"></i>
										<div class="title">
											<h5>Sosial Media</h5>
											<p>Edit Sosial Media</p>
										</div>
									</a>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="company" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
								<div class="dropdown-menu" aria-labelledby="company">
									<a href="<?= base_url() ?>admin/slide">
										<i data-feather="image"></i>
										<div class="title">
											<h5>Slideshow</h5>
											<p>Atur Slideshow Gambar</p>
										</div>
									</a>
									<a href="<?= base_url() ?>admin/akun">
										<i data-feather="user"></i>
										<div class="title">
											<h5>Akun</h5>
											<p>Atur akun Admin</p>
										</div>
									</a>
								</div>
							</li>
						</ul>
						<a href="#" data-toggle="modal" data-target="#logoutModal" class="btx"><i data-feather="x-square"></i> Keluar</a>
					</div>
				</div>
			</nav>