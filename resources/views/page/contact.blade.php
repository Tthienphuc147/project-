@extends('master')
@section('tieudetrang')
   Liên hệ
@endsection
@section('content')
<div class="contact-area section_padding_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="google-map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122699.29859441433!2d108.13666486017046!3d16.04715737696602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0xfc14e3a044436487!2zxJDDoCBO4bq1bmcsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1555764771277!5m2!1svi!2s" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- Contact Info Area Start -->
           

            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s" style="background-image: url('{{ asset('../public/img/bg-img/contact.jpg') }}')">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                            <h2 class="contact-form-title mb-30">Liên hệ</h2>
                            <!-- Contact Form -->
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Tên">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                              
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                                </div>
                                <button type="submit" class="btn contact-btn">Gửi ý kiến</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection