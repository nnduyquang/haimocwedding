<section class="c-sention c-section--top">
    <h2 class="c-section__heading">Kế Hoạch</h2>
    <section class="p-plan-detail">
        <h1 class="p-plan-detail__title">{{$album->name}}</h1>
        {{--<ul class="p-plan-detail__tags">--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/?area=tokyo">Tokyo</a></li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/summer/">Summer</a>--}}
        {{--</li>--}}
        {{--<li class="p-plan-detail__tags__item"><a--}}
        {{--href="http://d-weddingphoto.com/plans/keyword/greenery/">Greenery</a></li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/flower/">Flower</a>--}}
        {{--</li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/japanese-garden/">Japanese--}}
        {{--Garden</a></li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/city/">City</a></li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/kimono/">Kimono</a>--}}
        {{--</li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/dresstuxedo/">Dress/Tuxedo</a>--}}
        {{--</li>--}}
        {{--<li class="p-plan-detail__tags__item"><a href="http://d-weddingphoto.com/plans/keyword/night-view/">Night--}}
        {{--View</a></li>--}}
        {{--</ul>--}}
        <div class="p-plan-detail__container" data-j-selector="search-plan-position-base">
            <div class="p-plan-detail-body">

                <ul class="c-gallery" data-j-class="Gallery">
                    @foreach($imagemanagers as $key=>$imagemanager)
                        @php
                            $array_images=explode("+",$imagemanager->imagename);
                        @endphp
                        <li class="c-gallery__item" data-id="{{$imagemanager->id}}">
                            <a>
                                {{ Html::image('images/album/'.$array_images[0].'/'.$imagemanager->imagename,'',array('width'=>'750','height'=>'562'))}}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="c-lightbox">
                    <div class="c-lightbox__filter"></div>
                    <div class="c-lightbox__btn c-lightbox__btn--next"></div>
                    <div class="c-lightbox__btn c-lightbox__btn--prev"></div>
                    <div class="c-lightbox__btn c-lightbox__btn--delete"></div>
                    <div class="c-lightbox__photos">
                        @foreach($imagemanagers as $key=>$imagemanager)
                            @php
                                $array_images=explode("+",$imagemanager->imagename);
                            @endphp
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/img02-1.jpg" width="750"--}}
                            {{--height="562" alt="img02" class="c-lightbox__photo" data-id="1">--}}
                            {{ Html::image('images/album/'.$array_images[0].'/'.$imagemanager->imagename,'',array('style'=>'width:100%;height:100%;padding:50px 50px 50px 50px','class'=>'c-lightbox__photo','data-id'=>$imagemanager->id))}}
                        @endforeach
                    </div>
                </div>


                <div class="p-plan-detail-body__info p-plan-detail-info">
                    <div class="p-plan-detail-info__location">
                        <div class="p-plan-detail-info__location__box">
                            <div>Shooting Location / <br><span class="p-plan-detail-info__location__body"><p>Asakusa area,  Sky tree, Tokyo tower</p><br>
<p>Plan Type / 1 Day Photo Tour</p><br>
</span></div>
                        </div>
                        <div class="p-plan-detail-info__location__shares">
                            <div class="p-shares" data-j-class="Shares">
                                <dl class="p-shares__inner">
                                    <dt class="p-shares__heading">SHARE</dt>
                                    <dd class="p-shares__icon">
                                        <a href="http://twitter.com/share?url=http://d-weddingphoto.com/plans/tokyo-10-%e6%b5%85%e8%8d%89%e5%91%a8%e8%be%ba%ef%bc%8b%e6%b5%85%e8%8d%89%e8%a1%97%e4%b8%a6%e3%81%bf%ef%bc%8b%e3%82%b9%e3%82%ab%e3%82%a4%e3%83%84%e3%83%aa%e3%83%bc%ef%bc%8b%e6%9d%b1%e4%ba%ac%e3%82%bf/&amp;text=Ancient+%26+Modern+Tokyo+%7C+Plan+%7C+DE+%26+Co.+Decollte+Wedding+Photography+in+Japan"
                                           target="_blank" data-j-selector="btn" data-j-width="500" data-j-height="400"><img
                                                    src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/icon-share-twitter.png"
                                                    alt="Twitter"></a>
                                    </dd>
                                    <dd class="p-shares__icon">
                                        <a href="http://www.facebook.com/sharer.php?u=http://d-weddingphoto.com/plans/tokyo-10-%e6%b5%85%e8%8d%89%e5%91%a8%e8%be%ba%ef%bc%8b%e6%b5%85%e8%8d%89%e8%a1%97%e4%b8%a6%e3%81%bf%ef%bc%8b%e3%82%b9%e3%82%ab%e3%82%a4%e3%83%84%e3%83%aa%e3%83%bc%ef%bc%8b%e6%9d%b1%e4%ba%ac%e3%82%bf/"
                                           target="_blank" data-j-selector="btn" data-j-width="500" data-j-height="400"><img
                                                    src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/icon-share-facebook.png"
                                                    alt="Facebook"></a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="p-plan-detail-body__details p-plan-details">
                    <h3 class="p-plan-details__title c-headline">
                        <span>Plan Details</span>
                    </h3>


                    <ul class="p-plan-details__list p-plan-details-list">


                        <li class="p-plan-details-list__item">
                            <ul class="p-plan-details-list__item__in-items">
                                <li>
                                    <div class="p-plan-details-list__item__icon"><img
                                                src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/_sample/plan-icn-time.png"
                                                alt=""></div>
                                    <p class="p-plan-details-list__item__text">{{$album->tongthoigianchup}}</p>
                                </li>
                                <li>
                                    <div class="p-plan-details-list__item__icon"><img
                                                src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/_sample/plan-icn-camera.png"
                                                alt=""></div>
                                    <p class="p-plan-details-list__item__text">Số Shot Ảnh
                                        / {{$album->soluonganhchup}}</p>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <div class="p-plan-details__costume p-plan-details-costume">
                        <ul class="p-plan-details-costume__items">
                            <li class="p-plan-details-costume__item">
                                <div class="p-plan-details-costume__item__icon"><img
                                            src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/_sample/plan-icn-dress.png"
                                            alt=""></div>
                                <p class="p-plan-details-costume__item__text">
          <span class="p-plan-details-dl is-lang-en_US">
            <span class="p-plan-details-dl__dt p-plan-details-dl__dt--em-min">>Cô Dâu / </span>
            <span class="p-plan-details-dl__dd">{{$album->quanaocodau}}</span>
          </span>
                                </p>
                            </li>
                            <li class="p-plan-details-costume__item">
                                <div class="p-plan-details-costume__item__icon"><img
                                            src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/_sample/plan-icn-tuxedo.png"
                                            alt=""></div>
                                <p class="p-plan-details-costume__item__text">
          <span class="p-plan-details-dl is-lang-en_US">
            <span class="p-plan-details-dl__dt p-plan-details-dl__dt--em-small">Chú Rể / </span>
            <span class="p-plan-details-dl__dd">{{$album->quanaochure}}</span>
          </span>
                                </p>
                            </li>
                        </ul>
                        <ul class="p-plan-details-costume__attrs">
                            @foreach($phukiens as $key=>$phukien)
                                <li class="p-plan-details-costume__attr">{{$phukien->name}}</li>
                            @endforeach
                        </ul>
                    </div>

                    <section class="p-plan-included-services">
                        <h4 class="p-plan-included-services__title">Dịch Vụ Bao Gồm</h4>
                        <ul class="p-plan-included-services__items">
                            @foreach($dichvus as $key=>$dichvu)
                                <li class="p-plan-included-services__item p-plan-included-service">
                                    <div class="p-plan-included-service__icon">
                                        {{ Html::image('images/dichvu/'.$dichvu->icon,'',array('width'=>'90','height'=>'90'))}}
                                    </div>
                                    <div class="p-plan-included-service__text">
                                        {{$dichvu->name}}<br>
                                        <em>{{$dichvu->note}}</em>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <p class="p-plan-included-services__notice"><strong>Everything you need for the shooing is all
                                included.</strong><br>
                        </p>
                        <blockquote><br>
                            [Attendance]　A Hair&amp;Make-up Artist and an Interpreter come along with your shooting.<br>
                            [Unlimited choice!]　You can choose any available outfit in the studio without any upgrade
                            charge. <br>
                            [Included]　High quality album made in Japan containing 20 pages.<br>
                            [Included]　You can get ～25 simple edited photos.<br>
                            <br>
                            Please kindly contact us in advance if you are interested in Kimono and also have health
                            concerns.<p></p>
                        </blockquote>
                    </section>


                </section>

                <div class="p-plan-comment__btn">
                    <section class="p-cv-area">
                        <div class="p-cv-area__content">
                            <div class="p-cv-area__text">
                                <h2 class="p-cv-area__headline">
                                    CONTACT US
                                </h2>
                                <div class="p-cv-area__lead">
                                    English &amp; Mandarin Available
                                </div>
                                <div class="p-cv-area__flow">
                                    <a href="/flow/"><span>view the flow</span> ＞</a>
                                </div>
                            </div>
                            <div class="p-cv-area__btn">
                                <a class="p-cv-btn" href="https://de-weddingphoto.com/webapp/form/19127_rhcb_5/index.do"
                                   target="_blank">
                    <span class="p-cv-btn__text">
                      CONTACT US NOW                      <div class="p-cv-btn__balloon">
                        <div>
                          <div>Click<br>Here</div>
                        </div>
                      </div>
                    </span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="p-plan-detail-body__related p-plan-related">
                    <h2 class="p-plan-related__title c-headline">
                        <span>Bạn Cũng Có Thể Thích</span>
                    </h2>
                    <div class="p-plans c-columns c-columns--no-gutter p-plan-related__plans">
                        <div class="p-plans__item c-column--three">
                            <a class="p-plan p-plan--small"
                               href="http://d-weddingphoto.com/plans/yokohama-01-take-your-breath-away/">
                                <div class="p-plan__photo">
                                    <div class="p-plan__photo__content">
                                        <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/650410-9.jpg"
                                             alt="650*410" class="" height="410" width="650"></div>
                                </div>
                                <div class="p-plan__box">
                                    <div class="p-plan__box__inner">
                                        <h4 class="p-plan__box__title">Take your breath away</h4>
                                        <p class="p-plan__box__description">Put on the finest kimono to have marvellous
                                            photo shoot at one of the most popul...</p>
                                        <div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="p-plans__item c-column--three">
                            <a class="p-plan p-plan--small" href="http://d-weddingphoto.com/plans/tokyo-02-two-styles/">
                                <div class="p-plan__photo">
                                    <div class="p-plan__photo__content">
                                        <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/img02-70.jpg"
                                             alt="DE &amp; Co. Decollte Wedding Photography in Japan. A Japanese Wedding Photo Studio. | 德可莉日本專業婚紗攝影 | Tokyo | 東京 | Two styles | 倒轉。日本の時光"
                                             class="" height="410" width="650"></div>
                                </div>
                                <div class="p-plan__box">
                                    <div class="p-plan__box__inner">
                                        <h4 class="p-plan__box__title">Two Styles</h4>
                                        <p class="p-plan__box__description">Let’s start a satisfying day from the
                                            elegant Japanese garden where holds ...</p>
                                        <div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="p-plans__item c-column--three">
                            <a class="p-plan p-plan--small" href="http://d-weddingphoto.com/plans/tokyo9/">
                                <div class="p-plan__photo">
                                    <div class="p-plan__photo__content">
                                        <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/08/fc6927a4cd7fc6f068de9eb5d3ae4aff.jpg"
                                             alt="サムネイル" class="" height="410" width="650"></div>
                                </div>
                                <div class="p-plan__box">
                                    <div class="p-plan__box__inner">
                                        <h4 class="p-plan__box__title">Tokyo 1 Day Shooting Tour</h4>
                                        <p class="p-plan__box__description">There are too many attractions you must go
                                            while you are in Tokyo however it is ...</p>
                                        <div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </section>
            </div>


            <div class="p-search-plan p-search-plan--vertical" data-j-class="SearchPlanVartical"
                 style="visibility: visible;">
                <div class="p-search-plan__item p-search-by-key p-search-by-key--vertical">
                    <h3 class="p-search-by-key__title">Khu Vực</h3>
                    <ul class="p-search-by-key__items">
                        @foreach($diadiems as $key=>$diadiem)
                            <li class="p-search-by-key__item ">
                                <a href="http://d-weddingphoto.com/plans/?area=tokyo">{{$diadiem->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {{--<div class="p-search-plan__item p-search-by-key p-search-by-key--vertical">--}}
                {{--<h3 class="p-search-by-key__title">Keyword</h3>--}}
                {{--<ul class="p-search-by-key__items">--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/spring/">Spring</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/summer/">Summer</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/autumn/">Autumn</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/winter/">Winter</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/sakura/">Sakura</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/autumn-leaves/">Autumn Leaves</a></li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/greenery/">Greenery</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/flower/">Flower</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/beach/">Beach</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/templeshrine/">Temple/Shrine</a></li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/japanese-castle/">Japanese Castle</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/japanese-garden/">Japanese Garden</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/city/">City</a></li>--}}
                {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/kimono/">Kimono</a>--}}
                {{--</li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/dresstuxedo/">Dress/Tuxedo</a></li>--}}
                {{--<li class="p-search-by-key__item "><a--}}
                {{--href="http://d-weddingphoto.com/plans/keyword/night-view/">Night View</a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
</section>