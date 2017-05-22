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
                                    <div class="p-campaign-info-box__description">{!! $album->mota!!}</div>
                                    <div class="p-campaign-info-box__btn"><p class="c-btn">Xem Chi Tiết</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>