<?= $this->extend('dosen/fixed/templatePenelitian') ?>

<?= $this->section('content'); ?>
<main id="main" class="main">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <header class="section-header2">
                <h2>PKM (----)</h2>
                <hr>
                <p>Dosen Politeknik Statistika STIS</p>
            </header>
            <!-- ======= Proses Section ======= -->
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue service-box1">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Form</h3>
                            <p>
                                Proses peninjauan form PKM yang telah diisi oleh dosen
                                Politeknik Statistika STIS
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Laporan</h3>
                            <p>
                                Pelaporan kegiatan PKM yang dilakukan oleh dosen
                                Politeknik Statistika STIS
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Selesai</h3>
                            <p>
                                Proses PKM selesai dilaksanakan oleh dosen
                                Politeknik Statistika STIS
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <!-- End Proses -->

            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Bukti Kegiatan dan Tugas/Peran Tim PKM</h5>
                            <hr>
                            <p>
                                Hal yang perlu disertakan dalam buktu kegiatan
                            <ul>
                                <li>
                                    Slide paparan/artikel/dokumen/bukti lain
                                </li>
                                <li>
                                    Presensi peserta
                                </li>
                                <li>
                                    Dokumentasi
                                </li>
                                <li>
                                    Feedback (sampel) peserta
                                </li>
                                <li>
                                    Penggunaan dana
                                </li>
                            </ul>
                            </p>
                            <hr>
                            <form>
                                <div class="row mb-4">
                                    <div class="row mb-3">
                                        <table class="table table2 table-advance table-hover align-middle anggota">
                                            <tr class="table-primary">
                                                <th scope="col">Nama Anggota</th>
                                                <th scope="col">Bidang Keahlian</th>
                                                <th scope="col">Tugas/Peran</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            <tbody>
                                            </tbody>
                                        </table>

                                        <div class="col-md-4 col-lg-6">
                                            <button onclick='add2()' class="btn btn-warning">
                                                Tambah Anggota <i class=" bi bi-plus-square"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <script>
                                        function rm2() {
                                            $(event.target).closest("tr").remove();
                                        }

                                        function add2() {
                                            $(".table2").append("<tr><td><input name='namaAnggota2' class='form-control' type='text' id='namaAnggota2' required></td><td><input name='bidangAnggota' class='form-control' type='text' id='bidangAnggota' required></td><td><input name='tugasAnggota' class='form-control' type='text' id='tugasAnggota' required></td><td><button onclick='rm2()' class='btn btn-danger'>Hapus</button></td></tr>");
                                        }
                                    </script>

                                    <label for="bukti" class="col-md-3 col-lg-4 col-form-label ">Bukti Kegiatan</label>
                                    <div class="col-md-3 col-lg-8">
                                        <input class="form-control" type="file" id="bukti" name="bukti" required>
                                    </div>

                                    <div class="col-md-3 col-lg-8">&nbsp</div>

                                    <hr>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Section: Timeline
                            <ul class="timeline-with-icons">
                                <li class="timeline-item mb-5">
                                    <span class="timeline-icon">
                                        <i class="fas fa-rocket text-primary fa-sm fa-fw"></i>
                                    </span>

                                    <h5 class="fw-bold">Proposal</h5>
                                    <p class="text-muted">
                                        Proposal sedang direview oleh reviewer
                                    </p>
                                </li>

                                <li class="timeline-item mb-5">

                                    <span class="timeline-icon">
                                        <i class="fas fa-hand-holding-usd text-primary fa-sm fa-fw"></i>
                                    </span>
                                    <h5 class="fw-bold">Proposal</h5>
                                    <p class="text-muted">
                                        Proposal telah disetujui oleh reviewer
                                    </p>
                                </li>

                                <li class="timeline-item mb-5">

                                    <span class="timeline-icon">
                                        <i class="fas fa-users text-primary fa-sm fa-fw"></i>
                                    </span>
                                    <h5 class="fw-bold">Proposal</h5>
                                    <p class="text-muted">
                                        Proposal sedang ditinjau oleh reviewer
                                    </p>
                                </li>

                                <li class="timeline-item mb-5">

                                    <span class="timeline-icon">
                                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                                    </span>
                                    <h5 class="fw-bold">Proposal</h5>
                                    <p class="text-muted">
                                        Proposal disetujui oleh Kepala PPPM
                                    </p>
                                </li>

                                <li class="timeline-item mb-5">

                                    <span class="timeline-icon">
                                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                                    </span>
                                    <h5 class="fw-bold">Proposal</h5>
                                    <p class="text-muted">
                                        Proposal ditandatangani oleh Direktur Polstat STIS
                                    </p>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>
<!-- End #main -->

<!-- Submit -->
<div class="modal fade" id="submit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="submitLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="submitLabel">Setuju Surat Pernyataan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menyetujui surat pernyataan?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/penelitianDosen'">Ya</button>
            </div>
        </div>
    </div>
</div>


<!-- Tidak Setuju -->
<div class="modal fade" id="tidak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tidakLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tidakLabel">Tidak Setujui Surat Pernyataan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apak anda yakin tidak ingin menyetujui surat pernyataans?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/penelitianDosen'">Ya</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>