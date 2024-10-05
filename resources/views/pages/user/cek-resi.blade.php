@extends('layouts.user')

@section('title')
    Tentang Mandala Cargo Indonesia
@endsection

@section('content')
    <main>
        <div class="jumbotron jumbotron-fluid mb-5">
            <div class="container text-center py-5">
                <h1 class="text-white display-3">Cek Resi</h1>
                <div class="d-inline-flex align-items-center text-white">
                    <p class="m-0"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-circle px-3"></i>
                    <p class="m-0">Cek Resi</p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center pt-5">
                    <div class="col-lg-6">
                        <h1 class="heading  mb-3" data-aos="fade-up">Masukkan Nomor Resi Anda!</h1>
                        <p class=" mb-4" data-aos="fade-up" data-aos-delay="100">Cek nomor resi anda disini!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <form action="{{ route('cek-resi.check') }}" method="POST" class="search-box">
                @csrf
                <div class="search">
                    <input type="text" name="resi" placeholder="Masukkan Nomor Resi" value="{{ old('resi') }}"
                        required>
                    <button type="submit">Cek</button>
                </div>
            </form>
            @if (request()->isMethod('post'))
                @if (isset($product) && $product)
                    <div class="row align-items-start justify-content-center text-center pt-5 pb-5">
                        <h2>Detail Pengiriman</h2>
                        <div class="col-lg-12 d-lg-block d-none mb-3 mt-lg-4">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p><strong>Nama</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Nomor Resi</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Status</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Rute Pengiriman</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Jumlah</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Keterangan</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p>{{ $product->name }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->resi }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p
                                        @if ($product->status === 'Pengemasan') style="background-color: #FFD700; border-radius: 8px; padding: 5px; color: #fff;"
                                            @elseif($product->status === 'Dalam Pengiriman') style="background-color: #1E90FF; border-radius: 8px; padding: 5px; color: #fff;"
                                            @elseif($product->status === 'Telah Sampai') style="background-color: #32CD32; border-radius: 8px; padding: 5px; color: #fff;" @endif>
                                        {{ $product->status }}
                                    </p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->asal_pengiriman }} - {{ $product->tujuan_pengiriman }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->jumlah }}</p>
                                </div>
                                <div class="col-lg-2">
                                    {!! $product->keterangan !!}
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{ asset('storage/' . $product->photo) }}" alt="Photo" width="200">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-lg-none d-block mb-3 mt-lg-4">
                            <div class="col-lg-6 col-md-12 mb-3">
                                <p><strong>Nama:</strong> {{ $product->name }}</p>
                                <p><strong>Nomor Resi:</strong> {{ $product->resi }}</p>

                                <!-- Status with color based on condition -->
                                <p>
                                    <strong>Status:</strong>
                                    <span
                                        @if ($product->status === 'Pengemasan') style="background-color: #FFD700; border-radius: 8px; padding: 5px; color: #fff;"
                                    @elseif($product->status === 'Dalam Pengiriman') style="background-color: #1E90FF; border-radius: 8px; padding: 5px; color: #fff;"
                                    @elseif($product->status === 'Telah Sampai') style="background-color: #32CD32; border-radius: 8px; padding: 5px; color: #fff;" @endif>
                                        {{ $product->status }}
                                    </span>
                                </p>
                                <p><strong>Asal Pengiriman:</strong> {{ $product->asal_pengiriman }}</p>
                                <p><strong>Jumlah:</strong> {{ $product->jumlah }}</p>
                                <p><strong>Tujuan Pengiriman:</strong> {{ $product->tujuan_pengiriman }}</p>
                                <p><strong>Keterangan:</strong> {!! $product->keterangan !!}</p>
                                <p><img src="{{ asset('storage/' . $product->photo) }}" alt="Photo" width="200"></p>
                            </div>
                        </div>
                    </div>
                @else
                    <div style="margin-top: 30px">
                        <div class="alert alert-danger" role="alert">
                            Resi yang Anda masukkan tidak ditemukan.
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
