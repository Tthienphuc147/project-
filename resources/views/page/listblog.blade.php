@extends('master')
@section('tieudetrang')
    Những bí kíp tuyệt vời

@endsection
@section('content')
<div class="breadcumb-area" style="background-image: url(public/img/blog.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumb-title text-center">
                <h2>NHỮNG BÍ KÍP TUYỆT VỜI</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ****** Breadcumb Area End ****** -->

<!-- ****** Archive Area Start ****** -->
<section class="archive-area section_padding_80">
    <div class="container">
        <div class="row">

            <!-- Single Post -->
            @foreach ($datablog as $item)
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.1s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                                <a href="/blog/{{ $item['tieudekhongdau'] }}"> <img src="public/img/{{ $item['anhmota'] }}" alt=""></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                       By <a href="#">{{ $item['user_id'] }}</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">{{ date_format($item['created_at'],'d') }}/{{ date_format($item['created_at'],'m') }}/20{{ date_format($item['created_at'],'y') }}</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->

                            </div>
                            <a href="/blog/{{ $item['tieudekhongdau'] }}">
                                <h4 class="post-headline">{{ $item['tieudeblog'] }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
        {{ $datablog->links() }}
    </div>
</section>

@endsection
