<a class="p-expo-banner"
   href="#">{{ Html::image('images/events/img-banner-home-expo-201609-en_US.png', 'HONG KONG WEDDING EXPO 2016.07.15-2016.07.17') }}
</a>
<section class="c-section c-section--top">
    <h3 class="c-section__heading header-title">List of Price</h3>
    <div class="p-pickup-campaigns" data-j-class="PickupCampaigns">
        <div class="p-pickup-campaigns__content">
            <div class="p-pickup-campaigns__items j-pickup-campaigns-items">
                @foreach($baogias as $key=>$baogia)
                <div class="p-pickup-campaigns__item j-pickup-campaigns-item">
                    <a href="{{URL::to('/bao-gia/'.$baogia->path)}}" class="p-campaigns-item is-size-fixed">
                        <div class="p-campaigns-item__photo">
                            {{ Html::image('images/album/anhdaidien/'.$baogia->anhdaidien, '',array('style'=>'height:400px!important','width' => 840,'height' => 500)) }}
                        </div>
                        <div class="p-campaigns-item__info">
                            <div class="p-campaign-info-box-wrap">
                                <div class="p-campaign-info-box-wrap__inner">
                                    <div class="p-campaign-info-box">
                                        <div class="p-campaign-info-box__inner">
                                            <h4 class="p-campaign-info-box__title">{{$baogia->name}}</h4>
                                            <div class="p-discount-price">
                                                {{--<p class="p-discount-price__before">Special Kimono Shooting--}}
                                                    {{--Price</p>--}}
                                                <!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->
                                                <p class="p-discount-price__after">Giá Đặc Biệt Chỉ {{$baogia->price}}</p>
                                            </div>
                                            <div class="p-campaign-info-box__description">{!! $baogia->mota!!}
                                            </div>
                                            <div class="p-campaign-info-box__btn"><p class="c-btn">Xem chi tiết</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/autumn2016/index.Html" class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/IMG_0925-PC.jpg', '',array('width' => 840,'height'=>500)) }}--}}
                        {{--</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">2016 Autumn Leaves Shooting--}}
                                                {{--in Japan</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__before">Maximum</p>--}}
                                                {{--<!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->--}}
                                                {{--<p class="p-discount-price__after">¥50,000yen OFF</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">Autumn leaves can be--}}
                                                {{--enjoyed in various ways. It must be one of the great choice...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/2017-hokkaido/index.Html" class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/b00ba1d8a928926a18d72c39a51ef092.jpg', '',array('width' => 840,'height'=>500)) }}--}}
                        {{--</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">2017 Hokkaido Wedding Photo--}}
                                                {{--Tour</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__after">300,000yen</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">Japan’s northernmost--}}
                                                {{--island, Hokkaido. Thanks to these unique features, this cha...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/kyoto-special/index.Html" class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/SP.jpg', '',array('width' => 840,'height'=>500)) }}--}}
                        {{--</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">Kyoto Summer Special--}}
                                                {{--Offer</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__before">Special Price</p>--}}
                                                {{--<!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->--}}
                                                {{--<p class="p-discount-price__after">188,000yen</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">Make your a memorable--}}
                                                {{--pre-wedding photo shoot at Kyoto, where is one of the most...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/nara-studio-opening/index.Html" class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/2830302207019d953b4f40a2dc7d2d82.jpg', '',array('width' => 840,'height'=>500)) }}--}}
                        {{--</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">Nara　x　Deer　<br/>--}}
                                                {{--〜 Super Special Price for New Studio Open 〜</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__before">Special Price only NOW</p>--}}
                                                {{--<!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->--}}
                                                {{--<p class="p-discount-price__after">98,800yen</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">2016.05.01 Grand--}}
                                                {{--Opening of Nara studio！We are pleased to announce the grand--}}
                                                {{--ope...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/okinawa-beach-photo-plan/index.Html"--}}
                       {{--class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/img02-5.jpg', '',array('width' => 840,'height'=>500)) }}</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">Okinawa Beach Photo Plan</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__before">Special Price</p>--}}
                                                {{--<!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->--}}
                                                {{--<p class="p-discount-price__after">126,000yen</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">Sandy beaches and the--}}
                                                {{--stunning blue sea. Enjoy your Wedding Photo with excitemen...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="p-pickup-campaigns__item j-pickup-campaigns-item">--}}
                    {{--<a href="campaigns/half-day-light-plan/index.Html" class="p-campaigns-item is-size-fixed">--}}
                        {{--<div class="p-campaigns-item__photo">--}}
                            {{--{{ Html::image('images/album/test/15_840500-1.jpg', '',array('width' => 2000,'height'=>1190)) }}--}}
                        {{--</div>--}}
                        {{--<div class="p-campaigns-item__info">--}}
                            {{--<div class="p-campaign-info-box-wrap">--}}
                                {{--<div class="p-campaign-info-box-wrap__inner">--}}
                                    {{--<div class="p-campaign-info-box">--}}
                                        {{--<div class="p-campaign-info-box__inner">--}}
                                            {{--<h4 class="p-campaign-info-box__title">Half Day Light Plan</h4>--}}
                                            {{--<div class="p-discount-price">--}}
                                                {{--<p class="p-discount-price__before">Special Price</p>--}}
                                                {{--<!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->--}}
                                                {{--<p class="p-discount-price__after">150,000yen</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__description">Easy Come! Easy Go!!--}}
                                                {{--Wedding Photo!!!It is no longer difficult to have an attrac...--}}
                                            {{--</div>--}}
                                            {{--<div class="p-campaign-info-box__btn"><p class="c-btn">VIEW--}}
                                                    {{--DETAILS</p></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>

            <a class="p-pickup-campaigns__next j-pickup-campaigns-next">
                {{ Html::image('images/temps/top-icn-arrow-next.jpg', '') }}
            </a>
            <a class="p-pickup-campaigns__prev j-pickup-campaigns-prev">
                {{ Html::image('images/temps/top-icn-arrow-prev.jpg', '') }}
            </a>
        </div>
    </div>
</section>