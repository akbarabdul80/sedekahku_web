<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

    <header>
        <?php $this->load->view("admin/_partials/header.php") ?>
    </header>

    <div class="container" style="padding: 25px 20px;">
        <div class="alert alert-success" role="alert">Berhasil Menambahkan Dll. Pokoknya Alert :)</div>

        <div class="card mb-3">
            <div class="card-header" style="border-radius: 0!important">
                <a href="index.php" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fa fa-angle-left"></i> Kembali</a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <img src="<?= base_url() ?>assets/img/banner/1.png" class="img-fluid" style="border-radius:3px; width: 100px;">
                                </td>

                                <td width="250">
                                    <a href="" data-toggle="modal" data-target="#modalEdit" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fas fa-edit text-info"></i> Edit</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <img src="<?= base_url() ?>assets/img/banner/3.png" class="img-fluid" style="border-radius:3px; width: 100px;">
                                </td>

                                <td width="250">
                                    <a href="" data-toggle="modal" data-target="#modalEdit" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fas fa-edit text-info"></i> Edit</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    <img src="<?= base_url() ?>assets/img/banner/3.png" class="img-fluid" style="border-radius:3px; width: 100px;">
                                </td>

                                <td width="250">
                                    <a href="" data-toggle="modal" data-target="#modalEdit" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fas fa-edit text-info"></i> Edit</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog1 modal-lg">

            <div class="modal-content modal-content1">
                <div class="modal-header">
                    <a href="" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted" data-dismiss="modal"><i class="fa fa-angle-left"></i> Kembali</a>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Masukkan Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" require />
                            </div>
                            <input class="btn btn-success" style="background: #28a745" type="submit" name="btn" value="Simpan" />
                        </form>
                    </div>

                    <div class="card-footer small text-muted">
                        * Wajib Diisi
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php $this->load->view("admin/_partials/footer.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>