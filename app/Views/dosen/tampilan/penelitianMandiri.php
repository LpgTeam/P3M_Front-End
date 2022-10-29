<?= $this->extend('dosen/fixed/templatePenelitian') ?>

<?= $this->section('content'); ?>
<main id="main" class="main">
    <section class="section">
        <header class="section-header2">
            <h2>Penelitian Mandiri</h2>
            <hr>
            <p>Dosen Politeknik Statistika STIS</p>
        </header>
        <div class="row justify-content-md-center" data-aos="fade-up">
            <div class="form row gy-4 justify-content-md-center col-md-8">
                <div class="form-body pt-3 col-md-14">
                    <!-- Bordered Tabs -->
                    <!-- Form -->
                    <form>
                        <div class="row mb-3">
                            <label for="judul" class="col-md-4 col-lg-3 col-form-label">Judul Penelitian</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="judul" type="text" class="form-control" id="judul">
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-lg-3 col-form-label">Ketua Penelitian</label>
                        </div>

                        <div class="row mb-3">
                            <label for="namaLengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="namaLengkap" type="text" class="form-control" id="namaLengkap">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan Fungsional</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="jabatan" type="email" class="form-control" id="jabatan">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hp" class="col-md-4 col-lg-3 col-form-label">Nomor Handphone</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="hp" type="text" class="form-control" id="hp">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="email" type="text" class="form-control" id="email">
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label for="bidang" class="col-md-4 col-lg-3 col-form-label">Bidang</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="bidang" type="text" class="form-control" id="bidang">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="anggota" class="col-md-4 col-lg-3 col-form-label">Jumlah Anggota</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="anggota" type="number" class="form-control" id="anggota">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="upload" class="col-md-4 col-lg-3 col-form-label ">Upload Bukti Luaran</label>
                            <div class="col-md-8 col-lg-9">
                                <input class="form-control" type="file" id="upload">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <table class="table table-advance table-hover align-middle ">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">Nama Anggota</th>
                                        <th scope="col">Program Studi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Joko Sulistyo</td>
                                        <td>Komputasi Statistik</td>
                                    </tr>
                                    <tr>
                                        <td>Annisa Rahmawati</td>
                                        <td>Komputasi Statistik</td>
                                    </tr>
                                    <tr>
                                        <td>Susanto Jayakertanegara</td>
                                        <td>Komputasi Statistik</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </form><!-- Form End -->

                    <div class="row mb-3">
                        <div class="col-md-4 col-lg-3">
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#add">Tambah Anggota <i class=" bi bi-plus-square"></i></button>
                        </div>
                    </div>


                    <div class="row mb-3"></div>
                    <div class="row mb-3"></div>

                    <hr>

                    <div class="text-end">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#submit">Submit Form</button>
                    </div>
                </div>

            </div>
        </div>

        </div>
        </div>
    </section>
</main>
<!-- End #main -->

<!-- Tambah Anggota -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addLabel">Tambah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="namaAnggota" class="col-form-label">Nama Anggota :</label>
                    <input type="text" class="form-control" id="namaAnggota" name="namaAnggota">
                </div>
                <div class="mb-3">
                    <label for="studiAnggota" class="col-form-label">Program Studi :</label>
                    <input type="text" class="form-control" id="studiAnggota" name="studiAnggota">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/penelitianMandiri'">Ya</button>
            </div>
            <div class="w-100">
            </div>
        </div>
    </div>
</div>

<!-- Submit Form -->
<div class="modal fade" id="submit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="submitLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="submitLabel">Submit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan submit formulir?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/penelitianDosen'">Ya</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>