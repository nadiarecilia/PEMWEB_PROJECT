<!-- ======= Reservasi Section ======= -->
<section id="reservasi" class="reservasi">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservasi</h2>
            <p>Kami tunggu kehadiran Anda!</p>
        </div>

        <form action="form/bookatable.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Nama"
                        data-rule="minlen:4" data-msg="Tolong masukkan minimal 4 karakter!">
                    <div class="Validasi"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="Email" id="Email" placeholder="Email"
                        data-rule="Email" data-msg="Tolong masukkan Email Anda dengan benar!">
                    <div class="Validasi"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="nomer" class="form-control" name="Nomor-Handphone" id="Nomor-Handphone" placeholder="Nomor Handphone"
                        data-rule="minlen:4" data-msg="Tolong masukkan Nomor Handphone Anda!">
                    <div class="Validasi"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="nomer" name="Tanggal" class="form-control" id="Tanggal" placeholder="Tanggal"
                        data-rule="minlen:4" data-msg="Tolong masukkan Tanggal reservasi">
                    <div class="Validasi"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="nomer" class="form-control" name="Waktu" id="Waktu" placeholder="Waktu"
                        data-rule="minlen:4" data-msg="Tolong masukkan Waktu reservasi">
                    <div class="Validasi"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="nomer" class="form-control" name="pelanggan" id="pelanggan" placeholder="Jumlah Pelanggan"
                        data-rule="minlen:1" data-msg="Tolong masukkan jumlah pelanggan">
                    <div class="Validasi"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="message"></textarea>
                <div class="Validasi"></div>
            </div>
            <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message">"Ada kesalahan, silakan coba lagi."</div>
                <div class="sent-message">"Pesan Anda telah terkirim. Terima kasih!"</div>
            </div>
            <div class="text-center"><button type="submit">Reservasi</button>
            </div>
        </form>

    </div>
</section><!-- End Reservasi Section -->
