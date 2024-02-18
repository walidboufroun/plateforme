@extends("blog/layouts.layout")

@section("title", "Contact")

@section("content")
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    <!-- Contact section -->
    <div class="contact">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Contact <span class="blue_light">Us</span></h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <form method="POST" action="DoContact" id="request" class="main_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="name" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone number" type="type"
                                    name="phone_number" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Your Email" type="type" name="email"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" name="message" Message="Name" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end Contact section -->
@endsection