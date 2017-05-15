<section class="c-sention c-section--top">
    <h2 class="c-section__heading">Báo Giá</h2>
    <section class="p-plan-detail">
        <h1 class="p-plan-detail__title">{{$album->name}}</h1>
        <div class="p-plan-detail__container">
            <div class="p-plan-detail-body--full">

                <ul class="c-gallery" data-j-class="Gallery">
                    @foreach($imagemanagers as $key=>$imagemanager)
                        @php
                            $array_images=explode("+",$imagemanager->imagename);
                        @endphp
                        <li class="c-gallery__item" data-id="{{$imagemanager->id}}">
                            <a>
                                {{ Html::image('images/album/'.$array_images[0].'/'.$imagemanager->imagename,'',array('width'=>'750','height'=>'562'))}}
                                {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/img02-1.jpg" width="750"--}}
                                {{--height="562" alt="img02" class=""> --}}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="c-lightbox" style="display: none; opacity: 0;">
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
                    <div class="p-plan-detail-info__description p-plan-detail-info__description--full">
                        Japan’s northernmost island, Hokkaido. <br>
                        Thanks to these unique features, this charming Japanese destination boasts a natural landscape
                        and scenery that are rare even by world standards. Let us capture your unforgettable moment with
                        spectacular natural locations!
                    </div>

                    <div class="p-plan-detail-info__location p-plan-detail-info__location--full">
                        <div class="p-plan-detail-info__location__box">
                            <div>Nơi Chụp / <br><span class="p-plan-detail-info__location__body">Đà Nẵng</span>
                            </div>
                        </div>
                        <div class="p-plan-detail-info__location__shares">
                            <div class="p-shares" data-j-class="Shares">
                                <dl class="p-shares__inner">
                                    <dt class="p-shares__heading">SHARE</dt>
                                    <dd class="p-shares__icon">
                                        <a href="http://twitter.com/share?url=http://d-weddingphoto.com/campaigns/2017-hokkaido/&amp;text=Hokkaido+Luxury+Plan+Campaign+%7C+Campaign+%7C+DE+%26+Co.+Decollte+Wedding+Photography+in+Japan"
                                           target="_blank" data-j-selector="btn" data-j-width="500" data-j-height="400"><img
                                                    src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/icon-share-twitter.png"
                                                    alt="Twitter"></a>
                                    </dd>
                                    <dd class="p-shares__icon">
                                        <a href="http://www.facebook.com/sharer.php?u=http://d-weddingphoto.com/campaigns/2017-hokkaido/"
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
                        <span>Chi Tiết</span>
                    </h3>

                    <div class="p-plan-details__box">

                        <ul class="p-plan-details__list p-plan-details-list">

                            <li class="p-plan-details-list__item">
                                <div class="p-plan-details-list__item__icon"><img
                                            src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/_sample/plan-icn-money.png"
                                            alt=""></div>
                                <div class="p-plan-details-list__item__text">
                                    Giá /
                                    <div class="p-discount-price p-discount-price--plan-detail">
                                        <p class="p-discount-price__after">{{$album->price}}</p>
                                    </div>
                                </div>
                            </li>

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
            <span class="p-plan-details-dl__dt">Cô Dâu / </span>
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
                                {{--<li class="p-plan-details-costume__attr">Corset for Dress</li>--}}
                                {{--<li class="p-plan-details-costume__attr">Shoes for Bride &amp; Groom</li>--}}

                            </ul>
                        </div>

                        <section class="p-plan-included-services">
                            <h4 class="p-plan-included-services__title">Dịch Vụ Bao Gồm</h4>
                            <ul class="p-plan-included-services__items">
                                @foreach($dichvus as $key=>$dichvu)

                                    <li class="p-plan-included-services__item p-plan-included-service">
                                        <div class="p-plan-included-service__icon">
                                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/hair_makeup.png"--}}
                                            {{--width="90" height="90" alt="hair_makeup" class="">--}}
                                            {{ Html::image('images/dichvu/'.$dichvu->icon,'',array('width'=>'90','height'=>'90'))}}
                                        </div>
                                        <div class="p-plan-included-service__text">
                                            {{$dichvu->name}}<br>
                                            <em>{{$dichvu->note}}</em>

                                        </div>
                                    </li>
                                    {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                                    {{--<div class="p-plan-included-service__icon">--}}
                                    {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/set_of_accessories.png"--}}
                                    {{--width="90" height="90" alt="set_of_accessories" class=""></div>--}}
                                    {{--<div class="p-plan-included-service__text">--}}
                                    {{--Set of Accessories--}}
                                    {{--</div>--}}
                                    {{--</li>--}}

                                @endforeach
                            </ul>
                            {{--<ul class="p-plan-included-services__items">--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/photo_props.png"--}}
                            {{--width="90" height="90" alt="photo_props" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--Photo Props--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/all_photo_data.png"--}}
                            {{--width="90" height="90" alt="all_photo_data" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--All Photo Data--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="p-plan-included-services__items">--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/10_album.png"--}}
                            {{--width="90" height="90" alt="10_album" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--10” x 10” Album<br>--}}
                            {{--<em>(the maximum number of photos : 25 pics)</em></div>--}}
                            {{--</li>--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/simple_edited_photodata.png"--}}
                            {{--width="90" height="90" alt="simple_edited_photodata" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--Simple Edited Photo Data<br>--}}
                            {{--<em> (pictures for your album)</em></div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="p-plan-included-services__items">--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/englsih_speaking_guide.png"--}}
                            {{--width="90" height="90" alt="englsih_speaking_guide" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--English Speaking Guide--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/transportation_expenses.png"--}}
                            {{--width="90" height="90" alt="transportation_expenses" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--Transportation Expenses<br>--}}
                            {{--<em>(Studio ⇆ Location)</em></div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="p-plan-included-services__items">--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/shipping_by_air.png"--}}
                            {{--width="90" height="90" alt="shipping_by_air" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--Shipping Cost by Air--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="p-plan-included-services__item p-plan-included-service">--}}
                            {{--<div class="p-plan-included-service__icon">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/a3_photo_board.png"--}}
                            {{--width="90" height="90" alt="a3_photo_board" class=""></div>--}}
                            {{--<div class="p-plan-included-service__text">--}}
                            {{--A3 Photo Board<br>--}}
                            {{--<strong>(Book NOW, Get it FREE!)</strong></div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}

                            <p class="p-plan-included-services__notice"><strong>Everything you need for the shooing is
                                    all included.</strong><br>
                            </p>
                            <blockquote><br>
                                [Attendance]　A Hair&amp;Make-up Artist and an Interpreter come along with your shooting.<br>
                                [Unlimited choice!]　You can choose any available outfit in the studio without any
                                upgrade charge. <br>
                                [Included]　High quality album made in Japan containing 20 pages.<br>
                                [Included]　You can get ～25 simple edited photos.<br>
                                <br>
                                <br>
                                Available Shooting Period：July 5th 〜 August 31st 2017<p></p>
                            </blockquote>
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
                                        <a class="p-cv-btn"
                                           href="https://de-weddingphoto.com/webapp/form/19127_rhcb_5/index.do"
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

                    </div>
                </section>
            </div>
        </div>
    </section>

    <div class="p-back-btn-wrap">
        <p class="p-back-btn">
            <a href="http://d-weddingphoto.com/campaigns/"><span class="p-back-btn__arrow">&lt;</span>Back to "Campaign"
                Page</a>
        </p>
    </div>
</section>