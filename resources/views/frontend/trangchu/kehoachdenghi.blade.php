
<section class="c-sention c-section--top">
    <h3 class="c-section__heading header-title">Album Gallary</h3>
    <div class="p-plans c-columns">
        @foreach($albums as $key=>$album)
        <div class="c-column--three">
            <a class="p-plan " href="{{URL::to('/album/'.$album->path)}}">
                <div class="p-plan__photo">
                    <div class="p-plan__photo__content">
                        {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/650-410_mini-2.jpg"--}}
                             {{--width="650" height="410" alt="650-410_mini" class="">--}}
                        {{ Html::image('images/album/anhdaidien/'.$album->anhmini, '',array('width' => 650,'height' => 410)) }}
                    </div>
                </div>
                <div class="p-plan__box">
                    <div class="p-plan__box__inner">
                        <h4 class="p-plan__box__title title-h3">{{$album->name}}</h4>
                        <p class="p-plan__box__description"></p>
                        <div class="p-plan__box__btn"><p class="c-btn">Xem chi tiết</p></div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>