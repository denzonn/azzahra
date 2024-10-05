@extends('layouts.user')

@section('title')
    Azzahra Transportama
@endsection

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Pengiriman Barang & Kendaraan</h1>
            <h1 class="text-white display-3 mb-5">Via Darat,Via Laut & Via Udara</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <form action="{{ route('cek-resi.check') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="resi" class="form-control border-light" style="padding: 30px;"
                            placeholder="Masukkan Nomor Resi Disini.">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary px-3">Cek Resi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/about.jpg') }}" alt="">
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0 text-white">Pengalaman Pengiriman Barang & Kendaraan</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Tentang Kami</h6>
                    <h1 class="mb-4">Penyedia Layanan Logistik Berpengalaman & Terpercaya</h1>
                    <p class="mb-4">Layanan logistik yang terintegrasi, mulai dari pengambilan barang hingga pengiriman.
                        Armada kami yang modern dan profesional yang berpengalaman memastikan setiap pengiriman tiba di
                        tujuan dengan aman dan dalam kondisi terbaik. Kami mengelola rantai pasokan Anda dengan cermat untuk
                        memastikan efisiensi dan transparansi.</p>
                    <div class="d-flex align-items-center pt-2">
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
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
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/feature.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Mengapa Memilih Kami?</h6>
                    <h1 class="mb-4">Layanan Logistik Lebih Cepat, Aman, dan Terpercaya</h1>
                    <p class="mb-4"></p>
                    <ul class="list-inline">
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Port to Door</h6>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Door to Door</h6>
                        </li>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Free Packing</h6>
                        </li>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Pelayanan 24 Jam</h6>
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Harga</h6>
                <h1 class="mb-4">Mulai Rp. 2.500/Kg</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0 text-white">Rute Pengiriman</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Makassar <<>> All Jabodetabek</p>
                            <p>Makassar <<>> All Kalimantan</p>
                            <p>Makassar <<>> All Sumatra</p>
                            <p>Makassar <<>> All Maluku</p>
                            <p>Makassar <<>> All NTT & NTB</p>
                            <p>Makassar <<>> All Papua</p>
                            <a href="https://api.whatsapp.com/send/?phone=6282159013417&text&type=phone_number&app_absent=0"
                                class="btn btn-primary py-2 px-4 my-2">Hubungi Segera</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0 text-white">Rute Pengiriman</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Makassar <<>> All Jabodetabek</p>
                            <p>Makassar <<>> All Kalimantan</p>
                            <p>Makassar <<>> All Sumatra</p>
                            <p>Makassar <<>> All Maluku</p>
                            <p>Makassar <<>> All NTT & NTB</p>
                            <p>Makassar <<>> All Papua</p>
                            <a href="https://api.whatsapp.com/send/?phone=6282159013417&text&type=phone_number&app_absent=0"
                                class="btn btn-primary py-2 px-4 my-2">Hubungi Segera</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0 text-white">Rute Pengiriman</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Makassar <<>> All Jabodetabek</p>
                            <p>Makassar <<>> All Kalimantan</p>
                            <p>Makassar <<>> All Sumatra</p>
                            <p>Makassar <<>> All Maluku</p>
                            <p>Makassar <<>> All NTT & NTB</p>
                            <p>Makassar <<>> All Papua</p>
                            <a href="https://api.whatsapp.com/send/?phone=6282159013417&text&type=phone_number&app_absent=0"
                                class="btn btn-primary py-2 px-4 my-2">Hubungi Segera</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Delivery Team</h6>
                <h1 class="mb-4">Pengiriman Kami</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{ asset('assets/img/gambar 6.jpeg') }}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Rute</h5>
                                <span>Jakarta - Ternate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{ asset('assets/img/gambar 2.jpeg') }}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Rute</h5>
                                <span>Makassar - Tangerang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{ asset('assets/img/gambar 3.jpeg') }}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Rute</h5>
                                <span>Makassar - Batu Licin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{ asset('assets/img/gambar 4.jpeg') }}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Rute</h5>
                                <span>Bandung - Makassar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
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
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Blog Kami</h6>
                <h1 class="mb-4">Portofolio Kami</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/gambar 8.jpeg') }}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1 text-white">01</h4>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;"
                                    src="{{ asset('assets/img/azzahra_logo.png') }}" alt="">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Pengiriman Kendaraan</h4>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/gambar 6.jpeg') }}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1 text-white">01</h4>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;"
                                    src="{{ asset('assets/img/azzahra_logo.png') }}" alt="">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Pengiriman Kontainer</h4>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/gambar 12.jpeg') }}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1 text-white">01</h4>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;"
                                    src="{{ asset('assets/img/azzahra_logo.png') }}" alt="">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <a class="text-muted ml-2" href=""></a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Pengiriman Barang</h4>
                    </div>
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
