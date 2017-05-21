<section id="area" class="c-section c-section--top p-our-area" data-j-class="OurArea">
    <h3 class="c-section__heading p-our-area__ttl header-title">Da Nang Locations</h3>
    <p class="c-section__lead p-our-area__lead">Please select the area you are interested in having your photo shoot in for additional information.<br>We also offer photo shoots to special locations such as Nara and Hokkaido. </p>
    <div class="p-our-area__content">
        <nav class="p-our-area__nav">
            <ul class="p-area-select-nav">
                @foreach($diadiems as $key=>$diadiem)
                <li class="p-area-select-nav__item"><a href="{{URL::to('/dia-diem/'.$diadiem->path)}}" data-map-name="{{$diadiem->path}}" style="color: white;">{{$diadiem->name}}</a></li>
                @endforeach
                {{--<li class="p-area-select-nav__item"><a href="http://d-weddingphoto.com/area/osaka/" data-map-name="osaka" style="color: white;">Osaka</a></li>--}}
                {{--<li class="p-area-select-nav__item"><a href="http://d-weddingphoto.com/area/kobe/" data-map-name="kobe" style="color: white;">Kobe</a></li>--}}
                {{--<li class="p-area-select-nav__item"><a href="http://d-weddingphoto.com/area/fukuoka/" data-map-name="fukuoka" style="color: white;">Fukuoka</a></li>--}}
                {{--<li class="p-area-select-nav__item"><a href="http://d-weddingphoto.com/area/okinawa/" data-map-name="okinawa" style="color: white;">Okinawa</a></li>--}}
            </ul>
        </nav>
    </div>

    <div class="p-our-area__map">
        <div class="p-our-area__map__contents">
            {{ Html::image('images/diadiem/baida_1495251915150.jpg', '',array('class'=>'p-our-area__map__content p-our-area__map__content--is-active','data-map-img-name' => 'bai-da')) }}
            {{--<img class="p-our-area__map__content p-our-area__map__content--is-active" src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/img-home-map--tokyo.jpg" alt="" data-map-img-name="tokyo">--}}
            @foreach($diadiems as $key=>$diadiem)
                {{ Html::image('images/diadiem/'.$diadiem->bando, '',array('class'=>'p-our-area__map__content','data-map-img-name' => $diadiem->path)) }}
            {{--<img class="p-our-area__map__content" src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/img-home-map--yokohama.jpg" alt="" data-map-img-name="yokohama">--}}
            @endforeach
        </div>
    </div>
</section>