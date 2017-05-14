<section class="c-sention c-section--top">
    <h1 class="c-section__heading">Báo Giá</h1>
    <div class="p-campaigns">
        @foreach($albums as $key=>$album)
        <a href="{{URL::to('/bao-gia/'.$album->path)}}" class="p-campaigns-item ">
            <div class="p-campaigns-item__photo">
                {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/fb634d7e88cf5dfaa644c3e85cd955e4.jpg" width="840" height="500" alt="" class="">--}}
                {{ Html::image('images/album/anhdaidien/'.$album->anhdaidien,'',array('width'=>'840','style'=>'height:500px!important'))}}
            </div>
            <div class="p-campaigns-item__info">
                <div class="p-campaign-info-box-wrap">
                    <div class="p-campaign-info-box-wrap__inner">
                        <div class="p-campaign-info-box">
                            <div class="p-campaign-info-box__inner">
                                <h4 class="p-campaign-info-box__title">{{$album->name}}</h4>
                                <div class="p-discount-price">
                                    <p class="p-discount-price__after">{{$album->price}}</p>
                                </div>
                                <div class="p-campaign-info-box__description">{{$album->mota}}</div>
                                <div class="p-campaign-info-box__btn"><p class="c-btn">Xem Chi Tiết</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <a href="http://d-weddingphoto.com/campaigns/nara-studio-opening/" class="p-campaigns-item ">
            <div class="p-campaigns-item__photo">
                <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/05/2830302207019d953b4f40a2dc7d2d82.jpg" width="840" height="500" alt="トップ3" class="">  </div>
            <div class="p-campaigns-item__info">
                <div class="p-campaign-info-box-wrap">
                    <div class="p-campaign-info-box-wrap__inner">
                        <div class="p-campaign-info-box">
                            <div class="p-campaign-info-box__inner">
                                <h4 class="p-campaign-info-box__title">Nara　x　Deer　<br>
                                    〜 Super Special Price for New Studio Open 〜</h4>
                                <div class="p-discount-price">
                                    <p class="p-discount-price__before">Special Price only NOW</p>
                                    <!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->
                                    <p class="p-discount-price__after">98,800yen</p>
                                </div>
                                <div class="p-campaign-info-box__description">2016.05.01 Grand Opening of Nara studio！We are pleased to announce the grand ope...</div>
                                <div class="p-campaign-info-box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>            <a href="http://d-weddingphoto.com/campaigns/okinawa-beach-photo-plan/" class="p-campaigns-item ">
            <div class="p-campaigns-item__photo">
                <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/img02-5.jpg" width="840" height="500" alt="img02" class="">  </div>
            <div class="p-campaigns-item__info">
                <div class="p-campaign-info-box-wrap">
                    <div class="p-campaign-info-box-wrap__inner">
                        <div class="p-campaign-info-box">
                            <div class="p-campaign-info-box__inner">
                                <h4 class="p-campaign-info-box__title">Okinawa Beach Photo Plan</h4>
                                <div class="p-discount-price">
                                    <p class="p-discount-price__before">Special Price</p>
                                    <!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->
                                    <p class="p-discount-price__after">126,000yen</p>
                                </div>
                                <div class="p-campaign-info-box__description">Sandy beaches and the stunning blue sea. Enjoy your Wedding Photo with excitemen...</div>
                                <div class="p-campaign-info-box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>            <a href="http://d-weddingphoto.com/campaigns/half-day-light-plan/" class="p-campaigns-item ">
            <div class="p-campaigns-item__photo">
                <img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/15_840500-1.jpg" width="2000" height="1190" alt="15_840*500" class="">  </div>
            <div class="p-campaigns-item__info">
                <div class="p-campaign-info-box-wrap">
                    <div class="p-campaign-info-box-wrap__inner">
                        <div class="p-campaign-info-box">
                            <div class="p-campaign-info-box__inner">
                                <h4 class="p-campaign-info-box__title">Half Day Light Plan</h4>
                                <div class="p-discount-price">
                                    <p class="p-discount-price__before">Special Price</p>
                                    <!-- <div class="p-discount-price__arrow"><img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/top-icn-arrow.png" alt=""></div> -->
                                    <p class="p-discount-price__after">150,000yen</p>
                                </div>
                                <div class="p-campaign-info-box__description">Easy Come! Easy Go!! Wedding Photo!!!It is no longer difficult to have an attrac...</div>
                                <div class="p-campaign-info-box__btn"><p class="c-btn">VIEW DETAILS</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>          </div>
</section>