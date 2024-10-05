@extends('layouts.user')

@section('title')
Kontak Kami - Azzahra Transportama
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Kontak Kami</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Kontak</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-center p-4">
                        <h4 href="https://maps.app.goo.gl/pxEfA1ESzdYUzXzz7" class="m-0 text-white"><i
                                href="https://maps.app.goo.gl/pxEfA1ESzdYUzXzz7"
                                class="fa fa-map-marker-alt text-white mr-2"></i>Main Office: Jl. Tidung Mariolo V No. 1
                            Rappocini, Makassar</h4>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h4 href="https://maps.app.goo.gl/ZJHnzKBrWvMUHvSJ8" class="m-0 text-white"><i
                                href="https://maps.app.goo.gl/ZJHnzKBrWvMUHvSJ8"
                                class="fa fa-map-marker-alt text-white mr-2"></i>Head Office: Jl. Manggar Raya No. 2 A Koja
                            Priuk, Jakarta Utara</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contact Us</h6>
                    <h1 class="mb-4">Hubungi Kami.</h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name"
                                    placeholder="Your Name" required="required"
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email"
                                    placeholder="Your Email" required="required"
                                    data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                                    required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
