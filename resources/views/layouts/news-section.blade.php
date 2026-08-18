 <section class="about-news-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="latest-news-section">Latest News</h4>
                <p class="parag">Catch the latest and up-to-date developments regarding admissions and important exams in one glance.</p>
                <marquee direction="up" loop="" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" class="mat-tags">
                    
                    @foreach($all_news as $n)
                    <div class="row about-card">
                        <div class="col-lg-3 col"><img alt="{{ $n->title }}" src="{{asset('notifications/'.$n->image) }}"   class="news-section-image-css"></div>
                        <div class="col-lg-9 col">
                            <a class="hyper-news-link" href="{{ url('news/'.$n->slug)}}" aria-label="{{ $n->title }}" >
                               <h5>{{ $n->title }}</h5>
                                
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
    </marquee>
            </div>
            <div class="col-lg-6">
              <video class="news-section-video-css" autoplay loop muted>
  <source src="{{ asset('video/bano-doctor-introduction-video.mp4')}}" type="video/mp4" alt="About Bano Doctor ">
 
Your browser does not support the video tag.
</video>
                
            </div>
        </div>
    </div>
</section>