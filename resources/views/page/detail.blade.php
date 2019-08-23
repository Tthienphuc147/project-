@extends('master')
@section('tieudetrang')
    Bài viết
@endsection
@section('content')


<!-- ****** Breadcumb Area End ****** -->

<!-- ****** Single Blog Area Start ****** -->
<section class="single_blog_area section_padding_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row no-gutters">

                    <!-- Single Post Share Info -->


                    <!-- Single Post -->
                    <div class="col-10 col-sm-11">
                        <div class="single-post">
                            <!-- Post Thumb -->
                            <div class="post-thumb">
                                <img src="../public/img/{{ $databaiviet[0]['anhgioithieu'] }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">


                                <a href="#">
                                    <h2 class="post-headline">{{ $databaiviet[0]['tieude'] }}</h2>
                                </a>
                                <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By {{ $databaiviet[0]['user_id'] }}</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">

                                                <a href="#">{{ date_format($databaiviet[0]['created_at'],'d') }}/{{ date_format($databaiviet[0]['created_at'],'m') }}/{{ date_format($databaiviet[0]['created_at'],'y') }}</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="#"{{ $databaiviet[0]['noibat'] }}</a>
                                            </div>
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#">số lượt xem: {{ $databaiviet[0]['soluotxem'] }}</a>
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                <div class="posts-content">



                                    <p>{!! $databaiviet[0]['noidung'] !!}</p>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ****** Blog Sidebar ****** -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="blog-sidebar mt-5 mt-lg-0">
                    <!-- Single Widget Area -->
              

                    <!-- Single Widget Area -->


                    <!-- Single Widget Area -->
                    <div class="single-widget-area popular-post-widget">
                        <div class="widget-title text-center">
                            <h6>Bài viết liên quan</h6>
                        </div>
                        <!-- Single Popular Post -->
                        @foreach ($datalq as $item)


                        <div class="single-populer-post d-flex">
                          <img src="../public/img/{{ $item['anhgioithieu'] }}" alt="" height="100px">
                            <div class="post-content">
                                <a href="/diadiem/{{ $item['tieudekhongdau'] }}">
                                    <h6>{{ $item['tieude'] }}</h6>
                                </a>
                                <p>{{ date_format($databaiviet[0]['created_at'],'d') }}/{{ date_format($databaiviet[0]['created_at'],'m') }}/{{ date_format($databaiviet[0]['created_at'],'y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget text-center">
                        <div class="add-widget-area">
                            <img src="img/sidebar-img/6.jpg" alt="">
                            <div class="add-text">
                                <div class="yummy-table">
                                    <div class="yummy-table-cell">
                                        <h2>Cooking Book</h2>
                                        <p>Buy Book Online Now!</p>
                                        <a href="#" class="add-btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area newsletter-widget">
                        <div class="widget-title text-center">
                            <h6>Newsletter</h6>
                        </div>
                        <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                        <div class="newsletter-form">
                            <form action="#" method="post">
                                <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Single Blog Area End ****** -->

<!-- ****** Instagram Area Start ****** -->

@endsection
