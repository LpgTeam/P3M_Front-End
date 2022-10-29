<?= $this->extend('dosen/fixed/template') ?>

<?= $this->section('content'); ?>
<main id="main" class="main">
    <section class="section">
        <div class="container" data-aos="fade-up">
            <header class="section-header2">
                <h2>Penelitian</h2>
                <hr>
                <p>Dosen Politeknik Statistika STIS</p>
            </header>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="">
                <div class="card">
                    <h5>&nbsp;</h5>
                    <div class="card-body">
                        <a href="/penelitianjenisDosen" class="btn-pilih">Tambah Penelitian <i class="bi bi-plus-square"></i></a>
                        <p>&nbsp</p>
                        <!-- Table with stripped rows -->
                        <table class="table table-advance table-hover align-middle ">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Jenis Penelitian</th>
                                    <th scope="col">Tanggal Pengajuan</th>
                                    <th scope="col">Judul Penelitian</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mandiri</td>
                                    <td>24-06-2022</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a class="btn btn-primary" onclick=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Semi Mandiri</td>
                                    <td>22-04-2022</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a class="btn btn-primary" onclick="location.href='/penelitianSemiMandiri1'"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Di Danai Institusi</td>
                                    <td>24-06-2022</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a class="btn btn-primary" onclick=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Institusi</td>
                                    <td>24-06-2022</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a class="btn btn-primary" onclick=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Kerjasama</td>
                                    <td>24-06-2022</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a class="btn btn-primary" onclick=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>

        <script>

        </script>
    </section>

</main>
<!-- End #main -->
<?= $this->endSection(); ?>