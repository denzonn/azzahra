@extends('layouts.user')

@section('title')
Tentang Kami - Azzahra Transportama
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Tentang Kami</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Tentang</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/azzahra_logo.png') }}" alt="">
                    <div class="bg-primary  text-center p-4">
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
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
@endsection
