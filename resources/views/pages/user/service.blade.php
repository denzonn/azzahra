@extends('layouts.user')

@section('title')
Pelayanan - Azzahra Transportama
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Pelayanan Kami</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Pelayanan</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Pelayanan Kami</h6>
                <h1 class="mb-4">Layanan Logistik Terbaik</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-white pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Via Udara</h6>
                    </div>
                    <p class="text-content"
                        data-fulltext="Dengan layanan transportasi udara kami, Anda dapat mengandalkan pengiriman yang cepat dan tepat waktu. Kami bekerja sama dengan maskapai terkemuka untuk memastikan barang Anda tiba di tujuan dengan efisien. Ideal untuk pengiriman barang mendesak, layanan udara kami dirancang untuk memenuhi kebutuhan bisnis Anda dalam situasi yang memerlukan kecepatan.">
                        Dengan layanan transportasi udara kami, Anda dapat mengandalkan pengiriman yang cepat dan tepat
                        waktu...</p>
                    <a class="toggle-link border-bottom text-decoration-none" href="javascript:void(0)">Tampilkan lebih
                        banyak</a>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-white pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Via Laut</h6>
                    </div>
                    <p class="text-content"
                        data-fulltext="Pengiriman kendaraan dan barang dalam jumlah besar atau jarak jauh, layanan transportasi laut kami adalah pilihan yang tepat. Kami bekerja sama dengan perusahaan pelayaran terpercaya untuk memastikan proses pengiriman yang aman dan efisien. Dengan kemampuan mengangkut kontainer dan kargo besar, kami siap memenuhi kebutuhan logistik Anda dengan biaya yang kompetitif.">
                        Pengiriman kendaraan dan barang dalam jumlah besar atau jarak jauh, layanan transportasi laut kami
                        adalah pilihan yang tepat...</p>
                    <a class="toggle-link border-bottom text-decoration-none" href="javascript:void(0)">Tampilkan lebih
                        banyak</a>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-white pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Via Darat</h6>
                    </div>
                    <p class="text-content"
                        data-fulltext="Layanan transportasi darat kami menyediakan berbagai pilihan, mulai dari truk pengangkut kecil hingga kendaraan besar untuk pengiriman barang berat. Kami memiliki jaringan yang luas untuk menjangkau berbagai lokasi, baik di perkotaan maupun pedesaan. Dengan tim pengemudi profesional dan berpengalaman, kami menjamin keamanan dan ketepatan waktu setiap pengiriman.">
                        Layanan transportasi darat kami menyediakan berbagai pilihan, mulai dari truk pengangkut kecil
                        hingga kendaraan besar...</p>
                    <a class="toggle-link border-bottom text-decoration-none" href="javascript:void(0)">Tampilkan lebih
                        banyak</a>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-white pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Gudang</h6>
                    </div>
                    <p class="text-content"
                        data-fulltext="Gudang yang dirancang untuk memenuhi kebutuhan penyimpanan dan distribusi barang Anda. Dengan fasilitas gudang modern yang terletak strategis, kami menyediakan solusi logistik yang efisien dan terintegrasi untuk bisnis Anda.">
                        Gudang yang dirancang untuk memenuhi kebutuhan penyimpanan dan distribusi barang Anda...</p>
                    <a class="toggle-link border-bottom text-decoration-none" href="javascript:void(0)">Tampilkan lebih
                        banyak</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Partner Kami</h6>
                    <p class="mb-4">Kami bekerja sama dengan berbagai sektor, mulai dari e-commerce, manufaktur,
                        kontaraktor hingga distribusi barang. Kerjasama ini memungkinkan kami untuk memahami kebutuhan
                        spesifik setiap industri dan menawarkan layanan yang disesuaikan. Dengan pendekatan yang fleksibel,
                        kami siap memenuhi tuntutan pelanggan di era yang terus berubah</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">15</h1>
                            <h6 class="font-weight-bold mb-4">Partner</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1225</h1>
                            <h6 class="font-weight-bold mb-4">Client</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1240</h1>
                            <h6 class="font-weight-bold mb-4">Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimoni</h6>
                <h1 class="mb-4">Komentar Client</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Novita</h6>
                            <small>- Distributor</small>
                        </div>
                    </div>
                    <p class="m-0">Membantu packing barang yang perlu.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Ashari</h6>
                            <small>- Kontraktor</small>
                        </div>
                    </div>
                    <p class="m-0">Pengiriman kontainer dari Jakarta-Ternate terlayani dengan baik, berkas-berkas
                        lengkap.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Abd Salam</h6>
                            <small>- Pengusaha</small>
                        </div>
                    </div>
                    <p class="m-0">Pelayanan terbaik harga termurah.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleLinks = document.querySelectorAll('.toggle-link');

            toggleLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const paragraph = this.previousElementSibling;
                    const fullText = paragraph.getAttribute('data-fulltext');

                    if (paragraph.classList.contains('expanded')) {
                        paragraph.classList.remove('expanded');
                        paragraph.textContent = fullText.slice(0, 150) + '...';
                        this.textContent = 'Tampilkan lebih banyak';
                    } else {
                        paragraph.classList.add('expanded');
                        paragraph.textContent = fullText;
                        this.textContent = 'Sembunyikan';
                    }
                });
            });

            // Set the initial state with 150 characters only
            document.querySelectorAll('.text-content').forEach(paragraph => {
                const fullText = paragraph.getAttribute('data-fulltext');
                if (fullText.length > 150) {
                    paragraph.textContent = fullText.slice(0, 150) + '...';
                }
            });
        });
    </script>
@endpush
