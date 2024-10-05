<div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>+62 821 5901 3417</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>azzahratransportama@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i href='https://www.facebook.com/share/mFUbewH2XnePy3kg/?mibextid=qi2Omg' class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i href='https://www.instagram.com/azzahra_transportama?igsh=MXh4dHd2d2d5MmlyZQ==' class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <img src="{{ asset('assets/img/azzahra_logo.png') }}" alt="" style="width: 60px">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ route('home') }}" class="{{ request()->is('/*') ? ' active' : '' }} nav-item nav-link ">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->is('about*') ? ' active' : '' }} nav-item nav-link">About</a>
                <a href="{{ route('service') }}" class="{{ request()->is('service*') ? ' active' : '' }} nav-item nav-link">Service</a>
                <a href="{{ route('contact') }}" class="{{ request()->is('contact*') ? ' active' : '' }} nav-item nav-link">Contact</a>
                <a href="{{ route('resi') }}" class="{{ request()->is('resi*') ? ' active' : '' }} nav-item nav-link">Cek Resi</a>
            </div>
            <div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block" style="border-radius: 8px">Hubungi Kami</a>
            </div>
        </div>
    </nav>
</div>
