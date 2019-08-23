<section class="welcome-post-sliders owl-carousel">
    @foreach ($dataslide as $item)
    <div class="welcome-single-slide">
        <!-- Post Thumb -->
        <img src="public/img/slide-img/{{ $item['anh'] }}" alt="">
        <!-- Overlay Text -->
        <div class="project_title">
            <div class="post-date-commnents d-flex">
                <a href="#">{{ $item['tenslide'] }}</a>
            </div>
            <a href="#">
                <h5>{{ $item['mota'] }}</h5>
            </a>
        </div>
    </div>


    @endforeach
        <!-- Single Slide -->



    </section>
