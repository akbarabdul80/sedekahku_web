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
            <div class="item shadow-border">
                <form>
                    <h2>Daftar</h2>
                    <div class="form-group">
                        <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                        <button class="btn prepend"><i data-feather="user"></i></button>
                    </div>
                    <div class="form-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                        <button class="btn prepend"><i data-feather="mail"></i></button>
                    </div>
                    <div class="form-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn prepend"><i data-feather="lock"></i></button>
                    </div>
                    <button class="btn primary" type="submit">Buat akun</button>
                    <span>Sudah punya akun? <a href="<?= base_url("login") ?>">Login</a></span>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view("_partials/footer.php") ?>


</body>

</html>