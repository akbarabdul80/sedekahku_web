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
                <a href="" data-toggle="modal" data-target="#modalAdd" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fas fa-plus"></i> Tambahkan Baru</a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <img src="<?= base_url() ?>assets/img/blog/2.jpg" class="img-fluid" style="border-radius:3px; width: 100px;">
                                </td>
                                <td>
                                    Kegiatan Amal Memeriahkan Acara Sedekah Desa
                                </td>

                                <td>
                                    Deny Listianto
                                </td>

                                <td width="250">
                                    <a href="" data-toggle="modal" data-target="#modalEdit" class="small shadow-sm text-muted" title="Edit" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;"><i class="fas fa-edit text-info"></i> Edit</a>
                                    <a onclick="" href="#!" class="small shadow-sm text-muted" title="Hapus" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;"><i class="fas fa-trash text-danger"></i> Hapus</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="modalAdd" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog1 modal-lg">

            <div class="modal-content modal-content1">
                <div class="modal-header">
                    <a href="" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted" data-dismiss="modal"><i class="fa fa-angle-left"></i> Kembali</a>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul_acara">Judul*</label>
                                <input type="text" class="form-control" name="judul_acara" placeholder="Masukkan Judul" require />
                            </div>
                            <div class="form-group">
                                <label for="nama_penulis">Nama Penulis*</label>
                                <input type="text" class="form-control" name="nama_penulis" placeholder="Nama Penulis" require />
                            </div>
                            <div class="form-group">
                                <label for="alamat_acara">Alamat Masjid*</label>
                                <input type="text" class="form-control" name="alamat_acara" placeholder="Alamat Acara" require />
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleFormControlFile1">Masukkan Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" require />
                                <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
                                <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="7"></textarea>
                            </div>

                            <input class="btn btn-primary" style="background: #007bff" type="submit" name="btn" value="Posting" />
                        </form>
                    </div>

                    <div class="card-footer small text-muted">
                        * Wajib Diisi
                    </div>
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
                                <label for="judul_acara">Judul*</label>
                                <input type="text" class="form-control" name="judul_acara" placeholder="Masukkan Judul" value="Kegiatan Amal Memeriahkan Acara Sedekah Desa" require />
                            </div>
                            <div class="form-group">
                                <label for="nama_penulis">Nama Penulis*</label>
                                <input type="text" class="form-control" name="nama_penulis" placeholder="Nama Penulis" value="Deny Listianto" require />
                            </div>
                            <div class="form-group">
                                <label for="alamat_acara">Alamat Masjid*</label>
                                <input type="text" class="form-control" name="alamat_acara" placeholder="Alamat Acara" value="Jl. Sukowati blok B nomor 14, Km.11" require />
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" require />
                                <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
                                <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="7">SEDEKAHKU adalah aplikasi yang dibuat untuk memudahkan seseorang untuk memberi bantuan. Ini adalah contoh Keterangan Singkat</textarea>
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