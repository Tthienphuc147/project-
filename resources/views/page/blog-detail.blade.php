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
                                <img src="public/img/{{ $datablog[0]['anhmota'] }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">


                                <a href="#">
                                    <h2 class="post-headline">{{  $datablog[0]['tieudeblog'] }}</h2>
                                </a>
                                <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By {{  $datablog[0]['user_id'] }}</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">

                                                <a href="#">{{ date_format( $datablog[0]['created_at'],'d') }}/{{ date_format($datablog[0]['created_at'],'m') }}/{{ date_format($datablog[0]['created_at'],'y') }}</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="#"{{  $datablog[0]['noibat'] }}></a>
                                            </div>
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#">số lượt xem: {{  $datablog[0]['soluotxem'] }}</a>
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                <div class="posts-content">



                                    <p>{!!  $datablog[0]['noidung'] !!}</p>
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




                     <div class="single-widget-area popular-post-widget">
                        <div class="widget-title text-center">
                            <h6>Bài viết liên quan</h6>
                        </div>

                        @foreach ($datalq as $item)


                        <div class="single-populer-post d-flex">
                            <img src="../../public/img/{{ $item['anhmota'] }}" alt="" height="100px">
                            <div class="post-content">
                                <a href="/blog/{{ $item['tieudekhongdau'] }}"">
                                    <h6>{{ $item['tieudeblog'] }}</h6>
                                </a>
                                <p>{{ date_format($datalq[0]['created_at'],'d') }}/{{ date_format($datalq[0]['created_at'],'m') }}/{{ date_format($datalq[0]['created_at'],'y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="single-widget-area add-widget text-center">
                    <div class="add-widget-area">
                            <img src="../../public/img/advblog.jpg" alt="">
                            <div class="add-text">
                                <div class="yummy-table">
                                    <div class="yummy-table-cell">
                                        <h2>Cuộc sống muôn màu</h2>
                                        <p>Có những mẹo vặt này, cuộc sống của bạn sẽ trở nên thoải mái và bớt phiền toái đi nhiều đấy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Single Blog Area End ****** -->

<!-- ****** Instagram Area Start ****** -->
<div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/1.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/2.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/3.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/4.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/5.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/6.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/1.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="img/instagram-img/2.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ****** Our Creative Portfolio Area End ****** -->

<!-- ****** Footer Social Icon Area Start ****** -->
<div class="social_icon_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-social-area d-flex">
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>GOOGLE+</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>linkedin</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i><span>VIMEO</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>YOUTUBE</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
